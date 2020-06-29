<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
        
    </head>
    <body>         
        <div class="container">
            <div id="crud" class="row">
                <div class="col-xs-12">
                    <h1 class="page-header">Banco Capgemini</h1>
                        @yield('content')
        </div>
    </body>
   <script type="text/javascript" src="{{elixir('js/app.js')}}"></script>
</html>
