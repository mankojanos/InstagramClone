@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="png/user.png">
        </div>
        <div class="col-9 pt-5">
            <div><h1>ExampleUserName</h1></dv>
            <div class="d-flex">
                <div class="pr-4"><strong>51</strong> posts</div>
                <div class="pr-4"><strong>119</strong> folowers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Lorem ipsum</div>
            <div>Nunc libero felis, vehicula in metus quis, eleifend semper nibh. Nullam aliquet quis erat in auctor.</div>
            <div><a href="#">github.com/mankojanos</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
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
