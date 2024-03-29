<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Martl&Co.KG</title>
        <link rel="icon" type="image/x-icon" href="assets/LOGO_Martl&Co.KG.svg">
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- bootstrap script -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <!-- icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!-- main logic -->
        <script defer type="text/javascript" src="{{asset('js/main.js')}}"></script>
        <!-- custom main stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
       <!-- dialog logic -->
       <script defer type="text/javascript" src="{{asset('js/dialog.js')}}"></script>
    </head>
    <body>
        @include('header')
        @yield('content')
        @include('footer')
        <dialog id="dialog">
            @include('contact')
        </dialog>
    </body>
</html>
