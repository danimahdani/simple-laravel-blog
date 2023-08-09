@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
        <h5>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
            in
            <a href="/posts?category={{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </h5>
        {!! $post->body !!}

        <a href="/posts">Back to the post</a>
    </article>
@endsection
