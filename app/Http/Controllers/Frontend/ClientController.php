<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use App\Http\Controllers\Controller;
use App\Mail\VerifyClientMail;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }

    public function profile(){
        return view('frontend.profile.index');
    }

    public function updateProfile(Request $request){
        $user = User::where('id',Auth::user()->id)->first();
        $request->validate([
            'name' => 'required',
            // 'username' => 'required|unique:clients,username',
            // 'email' => 'required|unique:users,email',
            'shop_name' => 'required',
        ]);

        if($user->email != $request->email){
            $request->validate([
                'email' => 'required|unique:users,email',
            ]);
        }

        if($user->clientProfile->username != $request->username){
            $request->validate([
                'username' => 'required|unique:clients,username',
            ]);
        }

        if($request->email != Auth::user()->email){
            $request->validate([
                'email' => 'required|unique:users,email',
            ]);
            User::findOrFail(Auth::user()->id)->update([
                'email' => $request->email,
                'email_verified_at' => null,
            ]);
            VerifyUser::create([
                'token' => Str::random(60),
                'user_id' => Auth::user()->id,
            ]);
            Mail::to($request->email)->send(new VerifyClientMail($user));

        }
        // $user = User::where('id',Auth::user()->id)->first();
        Client::where('email',$user->email)->update([
            'email' => $request->email,
            'name' => $request->name,
            'username' => $request->username,
            'shop_name' => $request->shop_name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        if ($request->hasFile('image')) {
            //old photo delete if it is not default photo
            $old_photo_name = Auth::user()->clientProfile->image;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/client/').$old_photo_name;
                unlink($old_photo_location);
            }
            //photo update
            $image = $request->file('image');
            $name = Auth::User()->clientProfile->name.'_'.Auth::User()->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/client/');
            $image->move($destination,$name);
            Client::where('email',Auth::User()->email)->update([
                'image' => $name,
            ]);

        }

        if($request->email != Auth::user()->email){
            Auth::logout();
        }
        // VerifyUser::create([
        //     'token' => Str::random(60),
        //     'user_id' => Auth::user()->id,
        // ]);
        // Mail::to($request->email)->send(new VerifyUserMail($user));

        return redirect()->route('admin.login')->with('alert-success','Profile Update Successfully');

    }

    public function updatePassword(Request $request){
        $request->validate([
            'previous_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if(Hash::check($request->previous_password, Auth::user()->password)){
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),

            ]);
            return back()->with('alert-success','Password Change Successfully');
        }
        return back()->with('alert-danger','Password does not match with previous Password');
    }
}
