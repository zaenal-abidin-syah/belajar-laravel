@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 my-3">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span>
          Back to My Posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"
            class="align-text-bottom"></span> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure')"><span data-feather="x-circle"
              class="align-text-bottom"></span>Delete</button>
        </form>
        @if ($post->image)
          <div style="max-height: 350px;overflow:hidden">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
          </div>
        @else
          <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
            alt="{{ $post->category->name }}" class="img-fluid mt-3">
        @endif

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
      </div>
    </div>
  </div>
@endsection
