<x-layout>
    <x-slot  name="content">
        <article>
            <h1>
                {{ $user->name}}
                <br>
            </h1>
            <p>
                <a href="#">{{$user->email }}</a>
            </p>
            <div>
                {{$user->phone_number}}
            </div>
        </article>
        <a href="/users">Go Back</a>
    </x-slot>
</x-layout>
