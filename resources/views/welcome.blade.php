<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crochet Art Shop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            a {
                text-decoration: none;
            }
            .card {
                width: 500px;
                height: 300px;
                background-color: beige;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
                margin: 20px auto;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="card">
            <a href="{{route('item-export')}}">Item Export</a>
            <a href="{{route('artist-export')}}">Artist Export</a>
        </div>
        <div class="card">
            <form action="{{route('item-import')}}" method="POST" enctype="multipart/form-data">
                <input type="file" value="Item Import">
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
