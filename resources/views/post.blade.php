@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}
                    in <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="...">
                <article class="my-3 fs-5">
                    <!-- untuk eksekusi tag html -->
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
