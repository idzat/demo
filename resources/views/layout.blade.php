<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.head')
    <body>
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-form">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <form action="{{action('PostController@store')}}" method="POST" class="ajax-form">
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
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>
