@extends('layouts.layout')
@section('content')
    <head>
    </head>
    <div class="text">

    </div>
    <form>

        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" class="form-control" id="title"  placeholder="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">discription</label>
            <input type="text" class="form-control" id="discription" placeholder="discription">
        </div>
        <button id="postCategory" type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
