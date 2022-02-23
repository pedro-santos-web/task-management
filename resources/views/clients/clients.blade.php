@extends('layouts.master')

@section('content')
<div class="container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <h1>Clients</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td><a href="{{ route('clientTasks', $client->id) }}">{{ $client->name }}</a></td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>
                        <form action="{{ route('deleteClient', $client->id) }}" method="post" style="display: flex; justify-content: center;">
                            {{ csrf_field() }}
                            <button class="btn-delete" type="submit">❌</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('addClient') }}">
        <button class="btn-primary" type="submit">Add new client</button>
    </a>
</div>
@endsection