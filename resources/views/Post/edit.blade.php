@extends('layout')
@section('content')
    <div class="col-md-12">
        <h1>EDIT POST</h1>
        <hr>
        <form action="{{action('PostController@update', $post->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Title</label>    
                <input type="text" value="{{$post->title}}" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>    
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection