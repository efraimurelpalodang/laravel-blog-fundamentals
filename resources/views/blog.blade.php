@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <h1>Halaman Posts</h1>
    <div class="row gap-3 align-items-start mt-5">
        @foreach ($posts as $post)
            <div class="card col-sm-4">
                <div class="card-header">
                    <h1 class="fs-5">
                        <a href="/post/{{ $post->id }}" class="text-black text-decoration-none">{{ $post->title }}</a>
                    </h1>
                </div>
                <div class="card-body">
                    <figure>
                        <blockquote class="blockquote">
                            <a href="/post/{{ $post->id }}" class="text-black text-decoration-none">{{ $post->excerpt }}</a>
                        </blockquote>
                        <figcaption class="blockquote-footer mt-2">
                            By : <cite title="Source Title">{{ $post->author }}</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endforeach

    </div>
@endsection
