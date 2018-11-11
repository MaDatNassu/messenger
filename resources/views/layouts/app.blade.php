<!doctype html>
<html lang="fr">
    @include('partials.head')

    <body>

      @include('partials.header')

      <div class="main">

        @yield('content')

      </div>

    </body>

    @include('partials.foot')
</html>
