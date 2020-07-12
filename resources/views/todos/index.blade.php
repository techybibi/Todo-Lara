@extends('layout.app')

@section('title')
Bibi's Todo's
@endsection

@section('content')


<h1 class="text-center my-5">WELCOME TO TO DO</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                
                    <div class="card card-default">
                    <a href="/todo/create" class="btn btn-success btn=sm float-right">Create</a>
                        <div class="card-header">
                        TODOS
                        </div>
                            <div class="card-body">
                                <ul class="list-group">
                                @foreach($todos as $todo)
                                <li class="list-group-item">
                                {{$todo->name}}
                                @if(!$todo->completed)
                                <a href="/todo/{{$todo->id}}/complete" class="btn btn-warning btn=sm float-right mr-2">Complete</a>
                                @endif
                                <a href="/todo/{{$todo->id}}" class="btn btn-primary btn=sm float-right mr-2">View</a>
                                </li>
                                @endforeach
                                
                                </ul>
                            </div>
                    </div>

                </div>
            </div>


@endsection