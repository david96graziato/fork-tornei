<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- Include SEO --}}
    @yield('seo')

    <title>@yield('title') | {{ config('app.name') }} - @yield('seo-title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('icons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('icons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ url('icons/manifest.json') }}">
    <link rel="mask-icon" href="{{ url('icons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('icons/favicon.ico') }}">
    <meta name="msapplication-config" content="{{ url('icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    {{-- Include Styles CSS --}}
    @yield('css')
    
  </head>

  <body>
    @yield('body-start')
    @section('master')
    @show
    @section('navbar-top')
    @show
    @section('content')
    @show
    @section('general-footer')
    @show
    {{-- Include Scripts --}}
    @yield('scripts')

    @yield('body-end')
  </body>

</html>
