@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-8 my-2">
        <div class="card align-items-stretch">
            <img src="{{ asset('images/posts/post-img.jpg') }}" class="card-img-top" alt="post-img" height="300px" style="object-fit:cover;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p>Dibuat Oleh : <a href="/posts?author={{ $post->user->name }}" class="text-decoration-none text-dark">{{ $post->user->name }}</a></p>
                <p class="text-white p-2" style="background-color:rgba(0, 0, 0, 0.6)"><a href="posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></p>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>
    </div>
</div>
@endsection