
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
            in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <img src="https://picsum.photos/1200/400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
            

            <p><a href="/posts" class="d-block mt-3">Back to post</a></p>
        </div>
    </div>
</div>




@endsection


   