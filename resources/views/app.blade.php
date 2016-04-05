  <!DOCTYPE html>
  <html @yield('html-class')>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ elixir('css/all.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ elixir('css/app.css') }}" media="screen,projection" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    @yield('content')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="/js/jquery.min.js"></script>
      <script type="text/javascript" src="/js/materialize.min.js"></script>
      <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </body>
  </html>
