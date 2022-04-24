{{--

<x-layout>
    <x-slot name="content">
       --}}
{{-- @foreach($users as $user)--}}{{--

            <table>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Phone Number</th>
                @foreach($users as $user)
                    <tr>
                        <td >{{ $user->name }}</td>

                        <td>{{ $user->email }}</td>

                        <td>{{ $user->phone_number }}</td>
                    </tr>
                @endforeach
            </table>
       --}}
{{-- @endforeach--}}{{--

    </x-slot>
</x-layout>


--}}
{{--
<article>
    <h1>
        <a href="/posts/{{$user->id}}">
            {{$user->name}}
        </a>
        <br>
    </h1>
    <p>
        <a href="#">{{$user->email }}</a>
    </p>
    <div>
        {{$user->phone_number}}
    </div>
</article>
--}}
<x-layout>
    <x-slot name="content">
<table class="table table-bordered table-hover">
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    </thead>
    <tbody>
    @if ($users->count() == 0)
        <tr>
            <td colspan="5">No users to display.</td>
        </tr>
    @endif

    @foreach ($users as $user)
        <tr>
            <td><a href="/users/{{$user->id}}">
                    {{$user->name}}
                </a></td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->phone_number }}</td>
            <td>
                <a class="btn btn-sm btn-success" href="#">Edit</a>  {{--{{ action('ProductsController@edit', ['id' => $user->id]) }}--}}

                <form style="display:inline-block" action="#" method="POST">  {{--{{ action('ProductsController@destroy', ['id' => $user->id]) }}--}}
                    @method('DELETE')
                    @csrf
                   {{-- <button class="btn btn-sm btn-danger"> Delete</button>--}}
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
       {{-- {!! $users->appends(['sort' => 'email'])->links() !!}--}}
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
{{--{{ $users->links() }}--}}

<p>
    Displaying {{$users->count()}} of {{ $users->total() }} user(s).
</p>
</x-slot>
</x-layout>
