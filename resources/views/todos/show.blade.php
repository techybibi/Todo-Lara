@extends('layout.app')

@section('title')
Todo's | {{$todo->name}}
@endsection

@section('content')

        <h1 class="text center my-5">{{$todo->name}}</h1>
            <div class="card card-default " >
                <div class="card-header">
                Description
                </div>
                <div class="card-body">
                {{$todo->description}}
                </div>
            </div>
            <form method="POST" action="/todo/{{$todo->id}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <input type="submit" class="btn btn-danger float-left ml-3" value="Delete">
                </div>
            </form>
            <a href="/todo/{{$todo->id}}/edit">
            <button type="button" class="btn btn-info float-left ml-3">EDIT</button>
            </a>
            

@endsection