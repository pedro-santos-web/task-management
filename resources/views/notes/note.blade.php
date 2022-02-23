@extends('layouts.master')

@section('content')
<div class="container container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

    <h1>Note</h1>

    <div style="width: -webkit-fill-available; margin: 20px 40px; background-color: #1a202c; border-radius: 10px; padding: 20px;">
        <h3 style="margin: 0px; font-size: 30px;">{{ $notes->title }}</h3>
        <p>{{ $notes->note }}</p>
        <hr style="border: 1px solid #fff">
        <br>
        <div class="notes-bottom">
            <form action="{{ route('deleteNote', $notes->id) }}" method="post">
                {{ csrf_field() }}
                <button class="btn-delete" type="submit">❌</button>
            </form>
        </div>
    </div>

</div>
@endsection