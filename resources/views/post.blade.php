@extends('layouts.app')
@section('title', 'post detail')
@section('content')
    <article class="my-4">
        <h5 class="my-0"><a href="/post/{{ $post->id }}" class="text-black">{{ $post->title }}</a></h5>
        <p class="my-0">By : {{ $post->author }}</p>
        <p class="my-0">{!! $post->body !!}</p>
    </article>
    <a href="/posts">Back to posts</a>
@endsection