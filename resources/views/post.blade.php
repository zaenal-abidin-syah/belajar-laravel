@extends('layouts.main')
@section('container')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mb-5">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <p><a href="posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        @if ($post->image)
          <div style="max-height: 350px;overflow:hidden">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
          </div>
        @else
          <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
            alt="{{ $post->category->name }}" class="img-fluid">
        @endif
        {{-- <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
          alt="{{ $post->category->name }}" class="img-fluid"> --}}
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

        <a href="/posts" class="mt-3 d-block">Kembali</a>
      </div>
    </div>
  </div>
@endsection
