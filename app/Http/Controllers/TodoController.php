<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\http\Requests\todoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::orderBy('id','DESC')->get();
        return view('todos.index')->with('todos', $todo);
    }

    public function show($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.show')->with('todo', $todo);
    }
    public function create()
    {
        $todo = Todo::all();
        return view('todos.create')->with('todo', $todo);
    }
    public function store(todoRequest $request)
    {
        $data=$request->all();
       // dd($data);
        $todo = new Todo();
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed=false;
        $todo->save();
        return redirect('/todo');
    }
    public function edit($todoId)
    {
        $todo = Todo::find($todoId);

        return view('todos.edit')->with('todo',$todo);
    }
    public function update(todoRequest $request, $todoId)
    {
        
        $todo = Todo::find($todoId);
        $data=$request->all();
        //echo $todoId;
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->save();
        return redirect('/todo');
    }
}
