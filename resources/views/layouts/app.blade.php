<html>
  <head>
    @hasSection('page-title')
    <title>{{ config('app.name') }} - @yield('page-title')</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}" />
  </head>
  <body>
    <header>
      @include('common.site-header')
    </header>

    <section>
      @yield('content')
    </section>

    <footer>
      @include('common.site-footer')
    </footer>
  </body>
</html>
