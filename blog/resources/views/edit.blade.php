@extends('layout.layout')
@section('content')
    <div class="box box-primary bg-gray-900">
        <div class="cox-header with-border">
            <h3 class="box-title">Posts</h3>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('post.update', $post->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post title</label>
                    <input type="Nano" class="form-control" placeholder="Nano" name="title" value="{{old('title', $post->title)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <input type="Nano" class="form-control" placeholder="Nano" name="Body" value="{{old('body', $post->body)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Likes</label>
                    <input type="Nano" class="form-control" placeholder="Nano" name="Name" value="{{old('likes', $post->likes)}}">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
