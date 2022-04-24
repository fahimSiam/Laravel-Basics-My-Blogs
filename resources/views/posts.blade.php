{{--@extends('components.layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')

@endsection--}}

<x-layout>
<x-slot name="content">
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
                <br>
            </h1>
            <p>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a>
            </p>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach
        <a href="/">Go Back</a>
</x-slot>
</x-layout>
