@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center mb-4">All Posts</h1>

        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p>{{ Str::limit($post->body, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500">Read more</a>
            </div>
        @endforeach
    </div>
@endsection