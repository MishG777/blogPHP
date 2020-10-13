@extends('layout.layout')
@section('content')
    <div class="box box-primary">
        <div class="cox-header with-border">
            <h3 class="box-title">create post</h3>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('posts.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post title</label>
                    <input type="Name" class="form-control" placeholder="Name" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post body</label>
                    <input type="Name" class="form-control" placeholder="Name" name="body">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">likes</label>
                    <input type="Name" class="form-control" placeholder="Name" name="likes">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection


