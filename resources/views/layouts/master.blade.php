<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="/assets/bootstrap-5.1/bootstrap.min.css"/>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container-style {
                min-width: 600px;
                color: white;
                background-color: rgba(45,55,72,var(--bg-opacity));
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .form-style {
                border-radius: 15px;
                padding: 15px;
                text-align: center;
            }
            .form-input {
                border-radius: 5px;
                padding: 5px;
                margin: 5px;
            }
            .form-select {
                border-radius: 5px;
                padding: 5px;
                margin: 5px;
                width: 95%;
            }
            .btn-primary {
                cursor: pointer;
                border-radius: 5px;
                padding: 10px 25px;
                margin: 10px;
                background-color: rgb(239, 59, 45);
                color: #fff;
                transition: 0.7s;
            }
            .btn-primary:hover {
                background-color: rgb(194, 47, 36);
            }
            .btn-delete {
                background-color: transparent;
                border: none;
                margin-left: 5px;
                cursor: pointer;
                transition: 0.7s;
            }
            .btn-delete:hover {
                -webkit-transform: scale(1.1);
                transform: scale(1.5);
            }
            .btn-back {
                cursor: pointer;
                border-radius: 5px;
                padding: 5px;
                margin: 0px 10px;
                background-color: #6b7280;
                color: #ffffff;
                transition: 0.7s;
            }
            .btn-back:hover {
                background-color: #4a5568;
            }
            table {
                margin-bottom: 30px;
            }
            th, td {
                border-bottom: 1px solid white;
                padding: 15px;
            }
            .my-card {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            div .navbar-nav {
                flex-direction: row;
                padding: 10px;
            }
            .pagination .page-item {
                border-radius: 5px;
            }
            .pagination .page-item .page-link {
                color: #fff;
                background-color: #1a202c;
                border-color: #1a202c;
                margin-right: 5px;
                margin-left: 5px;
                border: 5px;
            }
            .pagination .page-item.active .page-link {
                color: #fff;
                background-color: #040507;
                border-color: #040507;
                margin-right: 5px;
                margin-left: 5px;
                border: 5px;
            }
            .pagination .page-item.disabled .page-link {
                color: #fff;
                background-color: #293143;
                border-color: #293143;
                margin-right: 5px;
                margin-left: 5px;
                border: 5px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div style="position: absolute; width: 100%; z-index: 10; background-color: #1a202c; display: flex; flex-direction: row; justify-content: space-between;" class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <a href="{{ url()->previous() }}" style="font-weight: 700; color: #fff; font-size: 25px;"><</a>
                <span style="font-weight: 700; color: #fff; font-size: 25px; margin-left: 30px; margin-right: 30px;">|</span>
                <a href="{{ route('tasks') }}" style="font-weight: 700; color: #fff; font-size: 25px;">Tasks</a>
                <span style="font-weight: 700; color: #fff; font-size: 25px; margin-left: 30px; margin-right: 30px;">|</span>
                <a href="{{ route('clients') }}" style="font-weight: 700; color: #fff; font-size: 25px;">Clients</a>
                <span style="font-weight: 700; color: #fff; font-size: 25px; margin-left: 30px; margin-right: 30px;">|</span>
                <a href="{{ route('news') }}" style="font-weight: 700; color: #fff; font-size: 25px;">News</a>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto" style="display: flex; margin-right: 40px; list-style: none; align-items: center;">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 700; color: #fff; font-size: 25px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    <span style="font-weight: 700; color: #fff; font-size: 25px; margin-left: 30px; margin-right: 30px;">|</span>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 700; color: #fff; font-size: 25px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" style="font-weight: 700; color: #fff; font-size: 25px;">{{ Auth::user()->name }}</a>
                    </li>
                    <span style="font-weight: 700; color: #fff; font-size: 25px; margin-left: 30px; margin-right: 30px;">|</span>
                    <li class="nav-item">
                            <a style="font-weight: 700; color: #fff; font-size: 25px;" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="min-height: 100vh;">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-gray-100 dark:bg-gray-900">

                @yield('content')

            </div>
        </div>

        <footer style="width: 100%; padding-top: 30px; padding-bottom: 30px; background-color: #1a202c; border-top: 1px solid #ffffff;">
            <p style="color: #fff; width: 100%; text-align: center;">Copyright © {{ date('Y') }}</p>
        </footer>

        <script src="/assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="/assets/bootstrap-5.1/bootstrap.bundle.min.js"></script>
    </body>
</html>