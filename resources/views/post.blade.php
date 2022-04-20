<x-layout>
    <x-slot  name="content">
        <article>
            <h1>
                {{ $post->title}}
                <br>
            </h1>
            <div>
                {!!$post->body!!}
            </div>
        </article>
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>
