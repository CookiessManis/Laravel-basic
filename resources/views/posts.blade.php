@extends('template/main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>


{{ $posts->links() }}

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
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>


@if ($posts->count())

<div class="card mb-5">

  @if($posts[0]->image)
  <div style="max-height: 300px; overflow:hidden;">
    <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
  </div>
  @else
    <img src="https://source.unsplash.com/random/1200x400/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}">
    @endif
    <div class="card-header">
      Featured
    </div>
    <div class="card-body text-center">
      <h5 class="card-title">
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">
        {{ $posts[0]->title }}</h5>
        </a>
        
        <p>By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a><small> 3 mins ago </small> </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more..</a>
    </div>
    <div class="card-footer text-muted">
        {{ $posts[0]->created_at->diffForHumans() }}
    </div>
  </div>

 

  <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $item)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-4 py-2 text-white " style="background-color: rgba(0, 0, 0, 0.614)"><a href="/posts?category={{ $item->category->slug }}" class="text-decoration-none text-light">{{ $item->category->name }}</a></div>
              
                @if($item->image)
                <img src="{{ asset('storage/'.$item->image) }}" alt="">
                @else
                <img src="https://source.unsplash.com/random/500x500/?{{ $item->category->name }}" alt="">
                @endif
                <div class="card-body">
                  <p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">
                      {{ $item->title }}
                    </a>
                  </p>
                    <h5>By. <a href="/posts?author={{ $item->author->username }}">{{ $item->author->name }}</a> in <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a><br> <small>{{ $item->created_at->diffForHumans() }} </small></h5>
                    <p class="card-text">{{ $item->excerpt }}</p>
                  <a href="/posts/{{ $item->slug }}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
  </div>

  @else 
  <p class="text-center fs-4">No Post Found.</p>
  @endif 

    

@endsection
