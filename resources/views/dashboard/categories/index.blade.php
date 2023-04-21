@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>
  <div class="col-lg-8">
    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
  </div>
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new Categories</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td style="width: 20%">
              <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"
                  class="align-text-bottom"></a>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning mx-1"><span
                  data-feather="edit" class="align-text-bottom"></a>
              <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="border-0 badge bg-danger" onclick="return confirm('Are you sure')"><span
                    data-feather="x-circle" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
