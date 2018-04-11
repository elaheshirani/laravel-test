<?php

namespace App\Http\Controllers;

use App\ToDoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists = ToDoList::where('user_id','=',Auth::user()->id)->get();
        //$todolists = \auth()->user()->toDoLists();


        return view('home',compact('todolists'));
    }
}
