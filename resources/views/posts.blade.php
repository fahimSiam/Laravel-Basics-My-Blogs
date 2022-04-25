{{--@extends('components.layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')

@endsection--}}

<x-layout>
    @include ('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts"/>
        @else
            <p class="text-center">No Posts yet.</p>
        @endif
    </main>
    {{--<x-slot name="content">
        @foreach($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                    <br>
                </h1>
                <p>
                    By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a>
                </p>
                <div>
                    {{$post->excerpt}}
                </div>
            </article>
        @endforeach
            <a href="/">Go Back</a>
    </x-slot>--}}
</x-layout>
