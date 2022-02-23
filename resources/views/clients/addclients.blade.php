@extends('layouts.master')

@section('content')
<div class="container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <h1>Add client</h1>
    <form action="{{ route('saveClient') }}" method="post" accept-charset="UTF-8" class="form-style">
        {{ csrf_field() }}
        <label for="client">Name:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="client">
        <br>
        <label for="phone">Phone:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="phone">
        <br>
        <label for="email">Email:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="email" name="email" required autofocus autocomplete="email">
        <br>
        <label for="address">Address:</label>
        <br>
        <input class="form-input" style="border-radius: 5px; padding: 5px; margin: 5px;" type="text" name="address">
        <br>
        <button class="btn-primary" type="submit">Confirm</button>
    </form>
</div>
@endsection