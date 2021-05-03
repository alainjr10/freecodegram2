@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?tp=1&_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_ohc=3wbAvxggGKoAX8jySKC&edm=ABfd0MgAAAAA&ccb=7-4&oh=a604a2955e371f44bb7d605276d28db8&oe=60A82CDF&_nc_sid=7bff83" alt="" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1> {{ $user->username }}</h1> 
                <a href="/p/create">Add New Post</a>
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile </a>
            @endcan
            
            <div class="d-flex">
                <div class=pr-3><strong> {{ $user->posts()->count() }} </strong> posts </div>
                <div class=pr-3><strong> 69.6k </strong> followers </div>
                <div class=pr-3><strong> 310 </strong> following </div>
            </div>
            <div class="pt-4 font-weight-bold"> {{ $user->profile->title }}</div>
            <div> {{ $user->profile->description }} </div>
            <div><a href="#"> {{ $user->profile->url }} </a> </div>
        </div>

    </div>

    <div class="row pt-5">

        @foreach ($user->posts as $post )
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100" height="370px">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
