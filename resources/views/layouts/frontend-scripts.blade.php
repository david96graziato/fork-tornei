{{--

Include Scripts - EasyTemplate by Sindria Inc.

--}}

@section('scripts')
{{-- Include Static Scripts --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
 $(function(){ 
     var navMain = $(".navbar-collapse"); // avoid dependency on #id
     // "a:not([data-toggle])" - to avoid issues caused
     // when you have dropdown inside navbar
     navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
     });
 });
</script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}

{{-- Include Dynamic Scripts --}}
@yield('dynamic-scripts')
@endsection

