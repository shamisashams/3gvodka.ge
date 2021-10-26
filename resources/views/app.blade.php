<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if(count($allSeoData)>2)
        <title>{{ $allSeoData['title'] }}</title>
        <meta name="description" content="{{ $allSeoData['description'] }}"/>
        <meta name="keywords" content="{{ $allSeoData['keywords'] }}">

        <meta property="og:title" content="{{ $allSeoData['og_title'] }}">
        <meta property="og:description" content="{{ $allSeoData['og_description'] }}">
        <meta property="og:image" content="{{ $allSeoData['image'] }}">
        <meta property="og:url" content="{{ request()->fullUrl() }}">
        <meta property="og:type" content="page">
        {!! $allSeoData['scripts'] !!}
    @endif
    @routes
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="{{asset('landing_resources/css/style.css')}}" />
    <script src="{{asset('landing_resources/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('landing_resources/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('landing_resources/js/slick.min.js')}}"></script>
    <script src="{{asset('landing_resources/js/general.js')}}"></script>
    <script src="{{asset('landing_resources/js/slide.js')}}"></script>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>3G</title>
</head>
<body>
@inertia

{{--<script--}}
{{--    type="text/javascript"--}}
{{--    src="https://code.jquery.com/jquery-1.11.0.min.js"--}}
{{--></script>--}}
{{--<script--}}
{{--    type="text/javascript"--}}
{{--    src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"--}}
{{--></script>--}}
{{--<script--}}
{{--    type="text/javascript"--}}
{{--    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"--}}
{{--></script>--}}

</body>
</html>
