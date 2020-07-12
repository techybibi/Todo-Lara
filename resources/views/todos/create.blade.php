@extends('layout.app')

@section('title')
Create Todo's
@endsection

@section('content')

<h1 class="text-center my-5">CREATE NEW TODO</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                
                    <div class="card card-default">
                    <div class="card-header">
                        TITLE
                        </div>
                            <div class="card-body">
                            <form action="/todo" method="POST">
                           @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">SAVE</button>
                            </div>
                            </form>
                            </div>
                    </div>

                </div>
            </div>

@endsection

