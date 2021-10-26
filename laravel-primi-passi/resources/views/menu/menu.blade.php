<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <style>
            body {
                text-align: center;
            }

            ul {
                display: flex;
                justify-content: center;
                list-style: none;
            }

            li {
                margin: 20px;
            }

            a {
                text-decoration: none;
            }
            
        </style>
        <h1>Menu</h1>
       <ul>
           <li><a href="/">{{$nome1}}</a></li>
           <li><a href="{{route('home')}}">{{$nome2}}</a></li>
       </ul>
    </body>
</html>
