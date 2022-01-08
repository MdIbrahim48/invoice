<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Expense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index(){
        $expenses = Expense::latest()->get();
        return view('admin.expense.index',[
            'expenses' => $expenses
        ]);
    }

    public function create(){
        $categories = Category::latest()->get();
        return view('admin.expense.create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        Expense::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'amount' => $request->amount,
            'status' => $request->status,
            'created_by' => Auth::user()->email,
        ]);
        return back()->with('alert-success','Expense Added Successfully');
    }

    public function edit($id){
        $expense = Expense::where('id',$id)->first();
        $categories = Category::latest()->get();
        return view('admin.expense.edit',[
            'expense' => $expense,
            'categories' => $categories,
        ]);
    }
    public function update(Request $request , $id){
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        Expense::where('id',$id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'amount' => $request->amount,
            'status' => $request->status,
            'edited_by' => Auth::user()->email,
        ]);
        return back()->with('alert-success','Expense Update Successfully');
    }

    public function destroy($id){
        Expense::where('id',$id)->delete();
        return back()->with('alert-success','Expense Delete Successfully');
    }

}
