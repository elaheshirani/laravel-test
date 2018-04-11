<?php

namespace App\Http\Controllers;

use App\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function create(){
        return view('addtodo');
    }

    public function store(){
        $this->validate(\request(),[
            'title'=>'required',
            'description'=>'required'
        ]);
        auth()->user()->toDoLists()->create([
            'title'=>\request('title'),
            'description'=>\request('description')
        ]);

        return redirect('/home');
    }

    public function edit(ToDoList $toDoList){
       return view('editTodo',compact('toDoList')) ;
    }

    public function update($id){
        $todo = ToDoList::find($id);
       $todo->update([
           'title'=>\request('title'),
           'description'=>\request('description'),
           'status'=>\request('status')
       ]);
        return redirect('/home');
    }
}
