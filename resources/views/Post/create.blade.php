@extends('layout')
@section('content')
    <div class="col-md-12">
        <h1>CREATE POST</h1>
        <hr>
        <form action="{{action('PostController@store')}}" method="POST">
    		{{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>    
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>    
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection