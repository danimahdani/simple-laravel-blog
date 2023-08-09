@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


      @if ($posts->count())
        <h3 class="">Last Treads</h3>
        <div class="border-bottom mb-5">
            <h2>
                <a href="/posts/{{ $posts[0]->slug }}">
                    {{ $posts[0]->title }}
                </a>
            </h2>
            <h5>By:
                <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{ $posts[0]->author->name }}
                </a> in
                <a href="/posts?category={{ $posts[0]->category->slug }}">
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
                    <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}
                    </a> in
                    <a href="/posts?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </h5>
                <p>{{ $post->excerpt }}</p>
                <p class=""><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
            </article>
        @endforeach
    @else
        <p class="text-center">No Post</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
