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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add Post</button>
            <!-- <a class="btn btn-primary" href="{{ route('post') }}">Add Post</a> -->
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('postinsert') }}" id="postinsertform" method="post">
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter title Here.." value="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>My Post</label>
                                    <textarea row="10" type="text" name="post" id="post" value="" placeholder="Write Post Here.." class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="button" class="btnmodalclose btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" name="submit" id="btnsubmit" value="Submit" class="btn btn-md btn-info">      
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('editok') }}" id="posteditform" method="post">
                        @csrf
                        <input type="hidden" id="edit_id" name="id" value="" class="form-control">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" id="edit_title" name="title" placeholder="Enter title Here.." value="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>My Post</label>
                                    <textarea row="10" type="text" name="post" id="edit_post" placeholder="Write Post Here.." class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="button" class="editbtnmodalclose btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" name="submit" id="editbtnsubmit" value="Submit" class="btn btn-md btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModaldetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span id="crossbtn" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <p id="view_id"></p>
                                <div class="card pt-3 pb-3 text-center">
                                    <h3 id="view_title"></h3>
                                    <p id="view_post"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <caption><h1 class="text-center">Infomation Table</h1></caption>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Title</td>
                            <td>Post</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody id="tbodycontent">
                        @foreach($Project4modelObj as $value)
                        <tr id="datarow_{{ $value->id }}">
                            <td style="width:50px;">{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->post }}</td>
                            <td style="font-size:14px; width:200px;">
                                <a data-id="{{ $value->id }}" href="{{ route('edit')}}?id={{ $value->id }}" type="button" class="btnedit btn btn-primary fas fa-edit" data-toggle="modal" data-target="#exampleModaledit" data-whatever="@getbootstrap"></a>
                                <!-- <a class="btn btn-primary fas fa-edit" href="{{ route('edit')}}?id={{ $value->id }}"></a> -->

                                <a data-id="{{ $value->id }}" class="btn btn-primary fas fa-trash-alt delet" href="{{ route('delete')}}?id={{ $value->id }}"></a> 

                                <!-- <a class="btn btn-primary far fa-eye" href="{{ route('detailview')}}?id={{ $value->id }}"></a> -->
                                <a data-id="{{ $value->id }}" href="{{ route('detailview')}}?id={{ $value->id }}" type="button" class="btnview btn btn-primary far fa-eye" data-toggle="modal" data-target="#exampleModaldetail" data-whatever="@getbootstrap"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("document").ready(function(){

        $("#btnsubmit").on("click", function(e){
            e.preventDefault();
            var form = $("#postinsertform");
            var url = "{{ route('postinsert') }}";
            var routeedit = "{{ route('edit')}}";
            var routedelete = "{{ route('delete')}}";
            var routedetailview = "{{ route('detailview')}}";
            var serializedData = form.serialize();
            $.ajax({
                url : url,
                type : "post",
                data : serializedData,
                beforeSend : function(bs){
                    $("#btnsubmit").val("Please Wait..");
                },
                success : function(sc){
                    var htmlval = '';
                    htmlval += '<tr id="datarow_'+sc.id+'"><td style="width:50px;">'+sc.id+'</td>';
                    htmlval += '<td>'+sc.title+'</td>';
                    htmlval += '<td>'+sc.post+'</td>';
                    htmlval += '<td style="font-size:14px; width:200px;">';
                    htmlval += '<a data-id="'+sc.id+'" class="btnedit btn btn-primary fas fa-edit" href="'+routeedit+'?id='+sc.id+'" data-toggle="modal" data-target="#exampleModaledit" data-whatever="@getbootstrap"></a>';
                    htmlval += '<a data-id="'+sc.id+'" class="btn btn-primary fas fa-trash-alt delet" href="'+routedelete+'?id='+sc.id+'"></a>';
                    htmlval += '<a data-id="'+sc.id+'" class="btnview btn btn-primary far fa-eye" href="'+routedetailview+'?id='+sc.id+'" data-toggle="modal" data-target="#exampleModaldetail" data-whatever="@getbootstrap"></a></td></tr>';
                    $("#tbodycontent").append(htmlval);
                    $("#title").val("");
                    $("#post").val("");
                    $("#btnsubmit").val("Submit");
                    $(".btnmodalclose").trigger("click");
                },
                error : function(err){
                    $("#title").val("");
                    $("#post").val("");
                    $("#btnsubmit").val("Submit");
                    $(".btnmodalclose").trigger("click");
                    alert("something Went wrong!!");
                },
            });
        });

        $("#tbodycontent").on('click', ".btnedit", function(e){
            var post_id = $(this).data('id');
            var url = "{{ route('detailview') }}?id="+post_id;
            $.ajax({
                url : url,
                type : "get",
                success : function(sc){
                    $("#edit_id").val(sc.id);
                    $("#edit_title").val(sc.title);
                    $("#edit_post").val(sc.post);
                },
                error : function(err){
                    alert("something went wrong!!");
                },
            });
        });

        $("#editbtnsubmit").on("click", function(e){
            e.preventDefault();
            var form = $("#posteditform");
            var url = "{{ route('editok') }}";
            var routeedit = "{{ route('edit')}}";
            var routedelete = "{{ route('delete')}}";
            var routedetailview = "{{ route('detailview')}}";
            var serializedData = form.serialize();
            $.ajax({
                url : url,
                type : "post",
                data : serializedData,
                beforeSend : function(bs){
                    $("#editbtnsubmit").val("Please Wait..");
                },
                success : function(sc){
                    var htmlval = '';
                    htmlval += '<td style="width:50px;">'+sc.id+'</td>';
                    htmlval += '<td>'+sc.title+'</td>';
                    htmlval += '<td>'+sc.post+'</td>';
                    htmlval += '<td style="font-size:14px; width:200px;">';
                    htmlval += '<a data-id="'+sc.id+'" class="btnedit btn btn-primary fas fa-edit" href="'+routeedit+'?id='+sc.id+'" data-toggle="modal" data-target="#exampleModaledit" data-whatever="@getbootstrap"></a>';
                    htmlval += '<a data-id="'+sc.id+'" class="btn btn-primary fas fa-trash-alt delet" href="'+routedelete+'?id='+sc.id+'"></a>';
                    htmlval += '<a data-id="'+sc.id+'" class="btnview btn btn-primary far fa-eye" href="'+routedetailview+'?id='+sc.id+'" data-toggle="modal" data-target="#exampleModaldetail" data-whatever="@getbootstrap"></a></td>';
                    $("#tbodycontent #datarow_"+sc.id).html(htmlval);
                    $("#edit_title").val("");
                    $("#edit_post").val("");
                    $("#editbtnsubmit").val("Submit");
                    $(".editbtnmodalclose").trigger("click");
                },
                error : function(err){
                    $("#edit_title").val("");
                    $("#edit_post").val("");
                    $("#editbtnsubmit").val("Submit");
                    $(".editbtnmodalclose").trigger("click");
                    alert("something Went wrong!!");
                },
            });
        });

        $("#tbodycontent").on("click", "a.delet", function(e){
            e.preventDefault();
            var conmas = confirm("Do you want to delete this item?");
            if( conmas === true){
                var url = $(this).attr("href");
                $.ajax({
                    url : url,
                    type : "get",
                    success : function(sc){
                        $("#datarow_"+sc.id).remove();
                    },
                    error : function(err){
                        alert("something went wrong!!");
                    },
                });
            }
        });

        $("#tbodycontent").on('click', ".btnview", function(e){
            var post_id = $(this).data('id');
            // console.log(post_id);
            var url = "{{ route('detailview') }}?id="+post_id;
            $.ajax({
                url : url,
                type : "get",
                success : function(sc){
                    $("#view_id").html("Post Id : "+sc.id);
                    $("#view_title").html("Title : "+sc.title);
                    $("#view_post").html("Post : "+sc.post);
                    $("#crossbtn").on("click", function(){
                        $("#view_id").val("");
                        $("#view_title").val("");
                        $("#view_post").val("");
                    });
                },
                error : function(err){
                    alert("something went wrong!!");
                },
            });
        });       
    });
</script>

@endsection


