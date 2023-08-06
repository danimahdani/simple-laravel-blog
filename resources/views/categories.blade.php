@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>


    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{ $category->slug }}">
                    <h1 class="">
                        {{ $category->name }}
                    </h1>
                </a>
            </li>
        @endforeach

    </ul>
@endsection
