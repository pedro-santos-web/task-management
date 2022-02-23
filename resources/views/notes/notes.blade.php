@extends('layouts.master')

@section('content')
<div class="container container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

    <h1>Notes</h1>

    @foreach ($notes as $note)
        <div style="width: -webkit-fill-available; margin: 20px 40px; background-color: #1a202c; border-radius: 10px; padding: 20px;">
            <h3 style="margin: 0px; font-size: 30px;">{{ $note->title }}</h3>
            <p>{{ $note->note }}</p>
            <hr style="border: 1px solid #fff">
            <br>
            <div class="notes-bottom">
                <form action="{{ route('note', $note->id) }}" method="get">
                    {{ csrf_field() }}
                    <button class="btn-delete" style="color: #fff;" type="submit">Ver</button>
                </form>
                <form action="{{ route('deleteNote', $note->id) }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn-delete" type="submit">❌</button>
                </form>
            </div>
        </div>
    @endforeach
    
    <form action="{{ route('addNotes') }}" method="get" style="display: flex; justify-content: center;">
        {{ csrf_field() }}
        <button class="btn-primary" type="submit">Add note</button>
    </form>

</div>
@endsection