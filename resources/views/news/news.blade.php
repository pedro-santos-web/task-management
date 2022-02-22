@extends('layouts.master')

@section('content')
<div class="container container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
@guest

    <h1>News</h1>

    @foreach ($news as $new)
        <div style="width: -webkit-fill-available; margin: 20px 40px; background-color: #1a202c; border-radius: 10px; padding: 20px;">
            <h3 style="margin: 0px; font-size: 30px;">{{ $new->title }}</h3>
            <p>{{ $new->text }}</p>
            <hr style="border: 1px solid #fff">
            <span>Data: {{ $new->day }}</span>
            <br>
            <span>Criado por: {{ $new->user }}</span>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {!! $news->links() !!}
    </div>

@else

    <h1>News</h1>

    @foreach ($news as $new)
    <div style="width: -webkit-fill-available; margin: 20px 40px; background-color: #1a202c; border-radius: 10px; padding: 20px;">
        <h3 style="margin: 0px; font-size: 30px;">{{ $new->title }}</h3>
        <p>{{ $new->text }}</p>
        <hr style="border: 1px solid #fff">
        <span>Data: {{ $new->day }}</span>
        <br>
        <span>Criado por: {{ $new->user }}</span>
        <br>
        <form action="{{ route('deleteNews', $new->id) }}" method="post">
            {{ csrf_field() }}
            <span>Apagar: </span>
            <button class="btn-delete" type="submit">❌</button>
        </form>
    </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {!! $news->links() !!}
    </div>
    
    <form action="{{ route('addNews') }}" method="get" style="display: flex; justify-content: center;">
        {{ csrf_field() }}
        <button class="btn-primary" type="submit">Add post</button>
    </form>

@endguest
</div>
@endsection