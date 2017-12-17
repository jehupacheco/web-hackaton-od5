<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>AconsejaTEC | @yield('title')</title>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <style>
        .indicator {
          background-color: #9c27b0 !important;
        }
      </style>
      @stack('stylesheets')
  </head>

  <body>
    <header>
      @include('layout.navbar')
    </header>
    <main>
      @yield('container')
    </main>

    {{--  Footer  --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
      $(function(){
        $(".button-collapse.top-nav").sideNav();

        $.each($('.rateYo-rating'), function(index, element) {
          $(element).rateYo({
              rating: $(element).data('rating'),
              starWidth: "20px",
          });
        });

        $('select').material_select();
      });
    </script>
    @stack('scripts')
  </body>
</html>
