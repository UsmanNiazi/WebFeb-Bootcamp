<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
use Validator;
use Auth;
use Session;

class StatusController extends Controller
{
    public function index()
    {
        $status = Auth::user()->status;
        if ($status=='register') 
        {
            User::where('id',Auth::user()->id)->update([
                'status' => "Login"
            ]);
            Auth::logout();
            Session::flash('message', "Registeration Successfull!");
            return redirect('/login');
            // return Redirect::back();
        } 
        
        else {
            return redirect('/home');
        }

    }

    public function status()
    {
        $users = User::all()->where('status','disable')->except(1);
        $count = User::where('status','disable')->count();
        return view('dashboard', compact('users','count'));
    }

    public function update(Request $request, $id)
    {
        User::where('id',$id)->update(['status' => 'active']);
        Session::flash('message', "Status Updated Successfully!");
        return Redirect::back();
    }





}