@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8 mb-3">
            <a href="/dashboard/posts" class="btn btn-lg badge bg-info mb-4"> <i class="bi bi-arrow-left"></i></a>
            <a href="" class="btn btn-lg badge bg-warning mb-4"> <i class="bi bi-pencil"></i></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are u Sure?')"><i class="bi bi-trash3"></i></button>
                </form>
            <h2>{{ $post->title }}</h2>

            @if($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" alt="" class="mb-4">
            @else
            <img src="https://source.unsplash.com/random/500x400/?{{ $post->category->name }}" alt="" class="mb-4">
            @endif
            

            <div class="my-3 fs-5">
                {!! $post->body !!}
            </div>
        
        
        </div>
    </div>
</div>
@endsection