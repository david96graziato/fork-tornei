{{--

Include CSS - EasyTemplate by Sindria Inc.

--}}

@section('css')
{{-- Include Static Styles CSS --}}
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
<link href="{{ asset('css/general-footer.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

{{-- Include Dynamic Styles CSS --}}
@yield('dynamic-styles')

{{-- Include Dynamic Fonts --}}
@yield('dynamic-fonts')
@endsection

