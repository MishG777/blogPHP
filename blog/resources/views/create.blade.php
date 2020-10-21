@extends('layout.layout')
@section('content')
    <div class="box box-primary">
        <div class="cox-header with-border">
            <h3 class="box-title">create post</h3>
        </div>
{{--        @if($errors->any())                            --}}{{-- please fill out this fields daawers creates dros(titleze)--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                {{$error}}--}}
{{--                <li>{{$error}}</li>    --}}{{--title field is required--}}
{{--            @endforeach--}}

{{--        @endif--}}
        <form method="post" enctype="multipart/form-data" action="{{route('posts.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post title</label>
                    <input type="Name" class="form-control @error('title') is-invalid @enderror" placeholder="Name" name="title" >
{{--                    <p class="text-danger">{{$errors->first('title')}}</p>--}}
                    @error('title')
                    <p class="text-danger">{{$errors->first('title')}} </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post body</label>
                    <input type="Name" class="form-control @error('body') is-invalid @enderror" placeholder="Name" name="body" >
                    @error('body')
                    <p class="text-danger">{{$errors->first('body')}} </p>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">likes</label>
                    <input type="Name" class="form-control @error('likes') is-invalid @enderror" placeholder="Name" name="likes">
                     @error('likes')
                     <p class="text-danger">{{$errors->first('likes')}} </p>
                     @enderror
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection


