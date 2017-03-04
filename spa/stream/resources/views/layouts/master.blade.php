<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css">
    </head>
    <body>
        <div id="app">
            @include('layouts.header')         
            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
            </section>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
