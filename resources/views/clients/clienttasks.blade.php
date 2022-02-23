@extends('layouts.master')

@section('content')
<div class="container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <h1>Client | {{ $client }}</h1>

    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Due date</th>
                <th>Urgency</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listItems as $listItem)
                <tr>
                    <td>{{ $listItem->name }}</td>
                    <td>{{ $listItem->due_date }}</td>
                    @if ($listItem->urgency == 'High')
                        <td style="color: red;">
                            {{ $listItem->urgency }}
                        </td>
                    @elseif ($listItem->urgency == 'Normal')
                        <td style="color: white;">
                            {{ $listItem->urgency }}
                        </td>
                    @elseif ($listItem->urgency == 'Low')
                        <td style="color: green;">
                            {{ $listItem->urgency }}
                        </td>
                    @endif
                    <td>
                        <form action="{{ route('deleteItem', $listItem->id) }}" method="post" style="display: flex; justify-content: center;">
                            {{ csrf_field() }}
                            <button class="btn-delete" type="submit">❌</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('addTaskClient', $clientid) }}" method="post" style="display: flex; justify-content: center;">
        {{ csrf_field() }}
        <button class="btn-primary" type="submit">Add new task</button>
    </form>

</div>
@endsection