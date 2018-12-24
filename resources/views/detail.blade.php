@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card pt-3 pb-3 text-center">
                <input type="hidden" name="id" value="{{ $Project4modelObj->id }}" class="form-control">
                <h3>{{ $Project4modelObj->title }}</h3>
                <p>{{ $Project4modelObj->post }}</p>
            </div>
            <br>
            <br>
            <div>
                <a class="btn btn-primary" href="{{ route('tableview') }}">Go to Table</a>
                <a class="btn btn-primary" href="{{ route('post') }}">Add Post</a>
            </div>
        </div>
    </div>
</div>
@endsection
