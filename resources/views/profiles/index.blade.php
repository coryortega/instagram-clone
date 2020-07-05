@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://media-exp1.licdn.com/dms/image/C5603AQGNLCklHbm9Sw/profile-displayphoto-shrink_200_200/0?e=1599696000&v=beta&t=rP-y5eXGfcPaRuRWc-rPv177TgJk6xoYprdRTwoQu1w" class="rounded-circle"/>
        </div>
        <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>200</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/e35/c94.0.559.559a/99420587_129326572100379_5555056403099701638_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=103&_nc_ohc=fPFkgUbfinwAX8d44wq&oh=8d7856ac572f88a7cf92d004c8eebb08&oe=5F2C28F1" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/e35/c94.0.559.559a/99420587_129326572100379_5555056403099701638_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=103&_nc_ohc=fPFkgUbfinwAX8d44wq&oh=8d7856ac572f88a7cf92d004c8eebb08&oe=5F2C28F1" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/e35/c94.0.559.559a/99420587_129326572100379_5555056403099701638_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=103&_nc_ohc=fPFkgUbfinwAX8d44wq&oh=8d7856ac572f88a7cf92d004c8eebb08&oe=5F2C28F1" class="w-100"/>
        </div>
    </div>
</div>
@endsection
