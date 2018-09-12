<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('js/app.js')}}" />
    <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <title>Laravel</title>

        
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                    <a class="navbar-brand text-light bg-dark" href="#">MyWebsite</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active text-light bg-dark" href="./">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link text-light bg-dark" href="./about">About</a>
                        <a class="nav-item nav-link text-light bg-dark" href="./service">Service</a>
                        
                      </div>
                    </div>
                  </nav>

                  
        <div class="container">
        @yield("content")
        </div>
        
    </body>
</html>
