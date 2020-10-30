<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User HomePage</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        @csrf
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>


    <div class="main-content">
        @yield('content')

        <div class = "container" id = "app">
            <new-contacts></new-contacts>
        </div>

    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</div>
</body>
</html>
