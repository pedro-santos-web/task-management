@extends('layouts.master')

@section('content')
<div class="container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <h1>{{ Auth::user()->name }}</h1>

</div>
@endsection