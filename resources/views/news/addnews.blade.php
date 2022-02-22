@extends('layouts.master')

@section('content')
<div class="container-style mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <h1>Create new post</h1>
    <form action="{{ route('saveNews') }}" method="post" accept-charset="UTF-8" class="form-style">
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="title">
        <br>
        <label for="text">Text:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="text">
        <br>
        <label for="day">Day:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="day">
        <br>
        <button class="btn-primary" type="submit">Confirm</button>
    </form>
</div>
@endsection