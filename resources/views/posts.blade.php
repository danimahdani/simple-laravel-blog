@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    <h3 class="">Last Treads</h3>
    <div class="border-bottom mb-5">
        <h2>
                <a href="/posts/{{ $posts[0]->slug }}">
                    {{ $posts[0]->title }}
                </a>
        </h2>
        <h5>By:
            <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">
                {{ $posts[0]->author->name }}
            </a> in
            <a href="/categories/{{ $posts[0]->category->slug }}">
                {{ $posts[0]->category->name }}
            </a>
        </h5>
        <p>{{ $posts[0]->excerpt }}</p>
        <p class=""><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>

    @foreach ($posts->skip(1) as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <h5>By:
                <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}
                </a> in
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </h5>
            <p>{{ $post->excerpt }}</p>
            <p class=""><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        </article>
    @endforeach
@endsection
