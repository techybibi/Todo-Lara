@extends('layout.app')

@section('title')
Todo's | {{$todo->name}}
@endsection

@section('content')

        <h1 class="text center my-5">{{$todo->name}}</h1>

            <div class="card card-default">
                <div class="card-header">
                    Details
                    
            <a href="/todo/{{$todo->id}}/edit">
            <button type="button" class="btn btn-info float-right ml-3 btn-sm">EDIT</button>
            </a>
            <a href="/todo/{{$todo->id}}/edit">
            <button type="button" class="btn btn-danger float-right ml-3 btn-sm">DELETE</button>
            </a>
                </div>
                <div class="card-body">
                {{$todo->description}}
                </div>
            </div>
            

@endsection