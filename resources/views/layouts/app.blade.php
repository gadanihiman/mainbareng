<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Main Bareng') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>

    @include('_includes.nav.main')

    <div id="app">
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('_includes.notifications.toast')
    @yield('scripts')

    {{-- for right menu mobile version javascript --}}
    <script type="text/javascript">
    const adminRightButton = document.getElementById('admin-right-button')

    adminRightButton.onclick = function () {
      this.classList.toggle('is-active');
      document.getElementById('admin-right-menu').classList.toggle('is-active');
    }

    </script>

</body>
</html>
