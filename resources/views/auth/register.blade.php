@extends('layouts.master')

@section('content')
<div class="container-style mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="my-card">
                <h1>{{ __('Register') }}</h1>

                <div class="card-body">
                    <form class="form-style" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-12 col-form-label text-center">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>
                                @error('name')
                                    <br>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-12 col-form-label text-center">{{ __('Email Address') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <br>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-12 col-form-label text-center">{{ __('Password') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <br>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-12 col-form-label text-center">{{ __('Confirm Password') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
