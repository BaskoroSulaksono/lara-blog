@extends('layouts.main')

@section('container')
<div class="row">
    <p class="fs-2 m-2">{{ $title }}</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search By Title and Body">
                    <button class="btn btn-outline-secondary text-primary" type="submit" id="button-addon2" style="background-color:#cdb4db">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($data->count())
        @foreach ($data as $post)
            <div class="col-md-4 my-2">
                <div class="card h-100 align-items-stretch">
                    <p class="position-absolute text-white p-2" style="background-color:rgba(0, 0, 0, 0.6)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></p>
                    <img src="{{ asset('images/posts/post-img.jpg') }}" class="card-img-top" alt="post-img" height="300px" style="object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>Dibuat Oleh : <a href="/posts?author={{ $post->user->name }}" class="text-decoration-none text-dark">{{ $post->user->name }}</a></p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                    <div class="mx-3 my-2 d-flex justify-content-end">
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="fs-2">No Post found</p>
    @endif

    {{ $data->links() }}
</div>
@endsection