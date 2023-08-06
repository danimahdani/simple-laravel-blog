
@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
        <h5>By. Budi Serentak in
            <a href="/categories/{{ $post->category->slug }}">

                {{ $post->category->name }}
            </a>
        </h5>
        {!! $post->body !!}

        <a href="/posts">Back to the post</a>
    </article>
@endsection
