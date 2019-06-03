<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content='{{csrf_token()}}''>
        <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Fonts -->



    </head>
    <body >
     <div id="app">
         <div class="row">
             <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                 <a class="navbar-brand">Brand</a>
                 <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div id="my-nav" class="collapse navbar-collapse">
                     <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                             <router-link to="/example"class="nav-link" >Example <span class="sr-only">(current)</span></router-link>
                         </li>
                         <li class="nav-item">
                             <router-link to="/sample" class="nav-link "  >Sample</a>
                         </li>
                     </ul>
                 </div>
             </nav>
         </div>
         <router-view></router-view>
     </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
