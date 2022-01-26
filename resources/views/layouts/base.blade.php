<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ticketsystem</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Ticketsystem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if( request()->is('test') ) active @endif" href="{{route('test')}}">Testroute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if( request()->is('test2') ) active @endif" href="{{route('test2')}}">Testroute2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if( request()->is('events') ) active @endif" href="{{route('events')}}">Events</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
</body>
</html>
