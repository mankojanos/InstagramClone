@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="../png/user.png">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>51</strong> posts</div>
                <div class="pr-4"><strong>119</strong> folowers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)
        
        <div class="col-4">
            <img src="/storage/ {{ $post->image }}" class="w-100">
        </div>

        @endforeach

        <div class="col-4">
            <img src="https://dummyimage.com/300" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://dummyimage.com/300" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://dummyimage.com/300" class="w-100">
        </div>

    </div>

</div>
@endsection
