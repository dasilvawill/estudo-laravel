<!DOCTYPE html>

<html>
    <head>
        <title> Index </title>
    </head>
    <body>
        <h1>All Users</h1>
        <ul>
            @foreach($users as $user)
                <li> {{ $user }} </li>
            @endforeach
        </ul>
    </body>
</html>

