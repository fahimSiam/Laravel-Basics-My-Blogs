
<x-layout>
    <x-slot name="content">
       {{-- @foreach($users as $user)--}}
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
       {{-- @endforeach--}}
    </x-slot>
</x-layout>


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
