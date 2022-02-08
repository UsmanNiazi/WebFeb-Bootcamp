<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lists;
use Redirect;
use Validator;
use Auth;
use Session;

class ToDoController extends Controller
{
    public function index()
    {
        $tasks = lists::where('user_id',Auth::user()->id)->get();
        $count = lists::where('user_id',Auth::user()->id)->count();
        return view('index', compact('tasks','count'));
    }

    public function save(Request $req)
    {
       $list = new lists;
       $list->name = $req->name;
       $list->user_id = Auth::user()->id;
       $list->save();

        $tasks = lists::where('user_id',Auth::user()->id)->get();
        $count = lists::where('user_id',Auth::user()->id)->count();
        return view('index', compact('tasks','count'));
    }

    public function delete($id)
    {
        lists::find($id)->delete();
        return redirect('/home');
    }

    public function finish($id)
    {
        lists::where('id',$id)->update([
            'status' => "Completed"
        ]);
        return redirect('/home');
    }

}
