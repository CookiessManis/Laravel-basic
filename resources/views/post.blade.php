@extends("template.main");

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>By. Hafiz.rrhp in <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> </p>  <a href="/posts?category=">{{ $post->category->name }}</a> <br>

            @if($post->image)
            <div style="max-height: 300px; overflow: hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" alt="" class="mb-4">
            </div>
            @else
            <img src="https://source.unsplash.com/random/500x400/?{{ $post->category->name }}" alt="" class="mb-4">
            @endif
            <div class="my-3 fs-5">
                {!! $post->body !!}
            </div>
        
        
        <a href="/posts">Back To blog</a>
        </div>
    </div>
</div>
    

@endsection
