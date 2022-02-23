@extends('layouts.master')

@section('content')
<div class="container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <h1>Create new note</h1>
    <form action="{{ route('saveNote') }}" method="post" accept-charset="UTF-8" class="form-style">
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="title">
        <br>
        <label for="text">Note:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="note">
        <br>
        <button class="btn-primary" type="submit">Confirm</button>
    </form>
</div>
@endsection