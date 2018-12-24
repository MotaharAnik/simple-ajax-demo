@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pt-3 pb-3">
                <form action="{{ route('editok') }}" method="post">
                    @csrf
                    <div class="col-sm-12">
                        <input type="hidden" name="id" value="{{ $Project4modelObj->id }}" class="form-control">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $Project4modelObj->title }}" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>My Post</label>
                                <input row="10" type="text" name="post" value="{{ $Project4modelObj->post }}" class="form-control">
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


