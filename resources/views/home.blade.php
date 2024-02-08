@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.googleusercontent.com/ytc/AIf8zZTDkajQxPa4sjDOW-c3er1szXkSAO-H9TiF4-8u_Q=s176-c-k-c0x00ffffff-no-rj"
                class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>617</strong> posts</div>
                <div class="pe-5"><strong>157K</strong> followers</div>
                <div class="pe-5"><strong>409</strong> following</div>
            </div>
            <div class="fw-bold pt-4">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1593626242377-14fcff197583?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTQ0fHxvbmxpbmV8ZW58MHx8MHx8fDA%3D"
                class="w-100">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fG9ubGluZXxlbnwwfHwwfHx8MA%3D%3D"
                class="w-100">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8b25saW5lfGVufDB8fDB8fHww"
                class="w-100">
        </div>
    </div>
</div>
@endsection