@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?tp=1&_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_ohc=3wbAvxggGKoAX8jySKC&edm=ABfd0MgAAAAA&ccb=7-4&oh=a604a2955e371f44bb7d605276d28db8&oe=60A82CDF&_nc_sid=7bff83" alt="" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1> {{ $user->username }}</h1> 
            </div>
            <div class="d-flex">
                <div class=pr-3><strong> 376 </strong> posts </div>
                <div class=pr-3><strong> 69.6k </strong> followers </div>
                <div class=pr-3><strong> 310 </strong> following </div>
            </div>
            <div class="pt-4 font-weight-bold"> freeCodeCamp.org</div>
            <div> We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit. </div>
            <div><a href="#"> www.freecodecamp.org </a> </div>
        </div>

    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-15/e35/176561193_225655929312942_561539998995527690_n.jpg?tp=1&_nc_ht=scontent-frt3-1.cdninstagram.com&_nc_cat=106&_nc_ohc=8OgI6KMVOVQAX8k3cJX&edm=AJBgZrYAAAAA&ccb=7-4&oh=3864998b33404ad0a24cc11528c16ee9&oe=60AB5300&_nc_sid=78c662&ig_cache_key=MjU1ODMwODg3Nzc1MTYxMzcyMQ%3D%3D.2-ccb7-4" alt="" class="w-100" height="370px">
        </div>
        <div class="col-4">
            <img src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-15/e35/176047112_911444749698369_4031989567270642530_n.jpg?tp=1&_nc_ht=scontent-frt3-1.cdninstagram.com&_nc_cat=109&_nc_ohc=lsgJUaev9lIAX9JWZrO&edm=AJBgZrYAAAAA&ccb=7-4&oh=86f3df77aba69f4e05bcb44c3eced2eb&oe=60A9CDE0&_nc_sid=78c662&ig_cache_key=MjU1Njg3MjUwOTk0MjkzMDU0NQ%3D%3D.2-ccb7-4" alt="" class="w-100" height="370px">
        </div>
        <div class="col-4">
            <img src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/e35/169635101_867959833760458_8524905489518580269_n.jpg?tp=1&_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=7zv4LfmH9RsAX-JkYCF&edm=AJBgZrYAAAAA&ccb=7-4&oh=82131051aae5ad620179d33b4a08bf94&oe=60ABA32E&_nc_sid=78c662&ig_cache_key=MjU0NjcyNDUwOTc2OTk3Mzc2MQ%3D%3D.2-ccb7-4" alt="" class="w-100" height="370px">
        </div>
    </div>
</div>
@endsection
