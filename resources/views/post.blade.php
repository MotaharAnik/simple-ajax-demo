@extends('layouts.app')

@section('content')
<div class="container">
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
            <div class="card pt-3 pb-3">
            	<form action="{{ route('postinsert') }}" method="post">
            	    @csrf
            	    <div class="col-sm-12">
            	        <div class="form-group">
            	            <label>Title</label>
            	            <input type="text" name="title" placeholder="Enter title Here.." value="" class="form-control">
            	        </div>
            	        <div class="row">
            	            <div class="col-sm-12 form-group">
            	                <label>My Post</label>
            	                <textarea row="10" type="text" name="post" value="" placeholder="Write Post Here.." class="form-control"></textarea>
            	            </div>
            	        </div>
            	        <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">      
            	    </div>
            	</form> 
            </div>
        </div>
    </div>
</div>
@endsection
