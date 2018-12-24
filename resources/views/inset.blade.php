@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h2>Insert successfully</h2>
            <a class="btn btn-primary" href="{{ route('tableview') }}">Go to Table</a>
        </div>
    </div>
</div>
@endsection
