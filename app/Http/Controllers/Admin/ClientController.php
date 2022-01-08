<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use App\Mail\VerifyClientMail;
use App\Mail\VerifyUserMail;
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
        $clients = Client::latest()->get();
        return view('admin.client.index',[
            'clients' => $clients
        ]);
    }

    public function create(){
        return view('admin.client.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:clients,username',
            'email' => 'required|unique:users,email',
            'password' => 'min:8|required|confirmed',
            'status' => 'required',
        ]);
        $users = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Client',
            'status' => $request->status,
        ]);
        Client::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'username'=> $request->username,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'shop_name'=> $request->shop_name,
            'status'=> $request->status,
            'created_by' => Auth::user()->email,
        ]);
        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $users->id,
        ]);
        Mail::to($request->email)->send(new VerifyClientMail($users));
        return back()->with('alert-success','Client Added Successfully');

    }

    public function edit($id){
        $client = Client::where('id',$id)->first();
        return view('admin.client.edit',[
            'client' => $client
        ]);
    }

    public function update(Request $request ,$email){
        User::where('email',$email)->update([
            'status' => $request->status,
        ]);
        Client::where('email',$email)->update([
            'status' => $request->status,
        ]);
        return back()->with('alert-success','Client Update Successfully');
    }


    public function destroy($email){
        User::where('email',$email)->delete();
        Client::where('email',$email)->delete();
        return back()->with('alert-success','Client Delete Successfully');
    }

    public function allDeletedClient(){
        $allDeletedClints = Client::onlyTrashed()->get();
        return view('admin.client.deleted_client',[
            'allDeletedClints' => $allDeletedClints,
        ]);
    }

    public function restoreClient($email){
        User::onlyTrashed()->where('email',$email)->restore();
        Client::onlyTrashed()->where('email',$email)->restore();
        return back()->with('alert-success','Client Restore Successfully');
    }

    public function permanentDelete($email){
        $userPermanentDelete = User::onlyTrashed()->where('email',$email)->first();;
        $clientPermanentDelete = Client::onlyTrashed()->where('email',$email)->first();
        $old_photo_name = $clientPermanentDelete->image;
        if($old_photo_name != 'default.png'){
            $old_photo_location = public_path('photo/client/').$old_photo_name;
            unlink($old_photo_location);
        }
        $userPermanentDelete->forceDelete();
        $clientPermanentDelete->forceDelete();
        return back()->with('alert-success','client Parmanent Deleted Successfully');
    }





}
