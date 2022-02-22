@extends('layouts.master')

@section('content')
<div class=" container-style mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    @if ($clientsname == null)
        <h1>Add task</h1>
    @else
        <h1>Add task | {{ $clientsname }}</h1>
    @endif
    <form class="form-style" action="{{ route('saveItem') }}" method="post" accept-charset="UTF-8">
        {{ csrf_field() }}
        <label for="listItem">Task:</label>
        <br>
        <input class="form-input" type="text" name="listItem">
        <br>
        <label for="client">Client:</label>
        <br>
        <select class="form-select" name="client" id="client">
            @if ($clientsid != null)
                <option value="{{ $clientsname }}">{{ $clientsname }}</option>
            @else
                @foreach ($clients as $client)
                    <option value="{{ $client->name }}">{{ $client->name }}</option>
                @endforeach
            @endif
        </select>
        <br>
        <label for="due_date">Due date:</label>
        <br>
        <input class="form-input" type="text" name="due_date">
        <br>
        <label for="urgency">Urgency:</label>
        <br>
        <select class="form-select" name="urgency" id="urgency">
            <option value="High">High</option>
            <option value="Normal">Normal</option>
            <option value="Low">Low</option>
        </select>
        <br>
        <button class="btn-primary" type="submit">Confirm</button>
    </form>
</div>
@endsection