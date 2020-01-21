<html>
    <head>
        <title> My Favorite Movies </title>
    </head>
    <body>
        @foreach ($movies as $movie)
            <li>
                {{ $movie->name }} ({{ $movie->released }}), {{ date("Y")-($movie->released) }} year(s) ago
            </li>
        @endforeach
        <a href={{ url('/logout') }}>logout</a>
    </body>
</html>