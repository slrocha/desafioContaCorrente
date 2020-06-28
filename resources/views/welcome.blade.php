<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
        
    </head>
    <body>            
        <div id="app">
            <header>
            <center><h1> Banco Capgemini</h1></center>   
            </header>
            <div class="container">
                <div class="justify-content-center">
                    <router-view></router-view>   
                </div>          
            </div>
        </div>
    </body>
   <script type="text/javascript" src="{{elixir('js/app.js')}}"></script>
</html>
