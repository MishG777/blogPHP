@extends('layout.layout')
@section('content')
    <link href="/CSS/style.css" rel="stylesheet">
    <div class="bg-gray-800  text-white">
        @if (Route::has('Login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{route('logout')}}"
                       onclick="preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{route('logout')}}" method="GET" >
                        {{csrf_field()}}
                    </form>

                @else
                    <a href="{{ route('Login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
            </div>
        @endif
    </div>
    <div>
        <div class="bg-none text-white mx-10">
            <div>
                <a>სახელი: {{$my_info->name}}</a>
                <a>იმეილი: {{$my_info->email}}</a>
            </div>
            @foreach($my_info->posts as $post)
                <div class="mt-10">
                    <a>პოსტის სახელი: {{$post->title}}</a>
                    <a>პოსტის ტექსტი: {{$post->text}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
