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
        	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add Post</button> -->
            <a class="btn btn-primary" href="{{ route('post') }}">Add Post</a>
            <a class="btn btn-primary" href="{{ route('tableview') }}">View Post</a>
        </div>
    </div>  
    
</div>
@endsection
