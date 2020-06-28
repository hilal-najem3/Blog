<!DOCTYPE html>
<html lang="en">
     <head>
          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <title>{{ config('app.name', 'Laravel') }}</title>

          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=Edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          
          @include('layouts.includes.styles')
     </head>
     <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
          <!-- PRE LOADER -->
          <section class="preloader">
               <div class="spinner">
                    <span class="spinner-rotate"></span>
               </div>
          </section>

          @include('layouts.includes.nav')

          @yield('content')

          @include('layouts.includes.footer')

          @include('layouts.includes.scripts')
     </body>
</html>