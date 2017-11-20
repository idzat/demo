@extends('layout')
@section('content')
    <div class="col-md-12">
        <h1>SHOW POST</h1>
        <hr>
        <form action="#">
            <div class="form-group">
                <label for="">Title</label>    
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>    
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection