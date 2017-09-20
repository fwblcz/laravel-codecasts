<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel='stylesheet' href="/css/bootstrap.min.css" type='text/css' media='all'/>
        {{--<link rel='stylesheet' href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" type='text/css' media='all'/>--}}
        <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
        <!-- Styles -->
    </head>
    <body>

    <div class="container">

        <section class="content">

            <div class="pad group">

                @yield('content')

            </div>

        </section>

    </div>
    </body>
</html>
