<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Count</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Nunito', sans-serif;
                background-color: pink;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-size: 8rem;
                font-style: italic;
                color: rebeccapurple;
            }
        </style>
    </head>
    <body class="antialiased">
        {{ $count }}
    </body>
</html>
