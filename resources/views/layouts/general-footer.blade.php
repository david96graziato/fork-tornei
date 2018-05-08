{{--

General-Footer EasyTemplate by Sindria Inc.

--}}


@section('general-footer')

<footer id="general-footer" class="fixed-bottom">
<p class="signature">&copy; <?php echo date('Y'); ?> - <a class="signature" title="{{ config('app.name') }}" href="{{ url('/') }}">{{ config('app.name') }}</a> All rights reserved | Designed by <a class="signature" title="Sindria Inc." href="https://sindria.org">Sindria Inc.</a> | <a class="signature" title="{{ config('app.name') }} Login Backend" href="{{ url('/') }}/admin">Login Backend</a></p>
</footer>
@endsection

