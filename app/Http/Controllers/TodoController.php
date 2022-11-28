<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todos');
    }
    public function create(Request $request){
        Todo::create($request->all);
        $todo=new Todo();
        $todo->task=$request->get('task');
        $todo->save();
        return redirect('/');
    }
    public function done(Todo $todo){
        $todo->done=!$todo->done;
        $todo->save();
    }
    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }
}
