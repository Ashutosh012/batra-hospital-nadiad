<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Batra Hospital Nadiad</title>

    <!-- <link rel="icon" type="image/jpg" href="assets/images/Favicon.html"> -->

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- GOOGLE FONTS CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&amp;family=Open+Sans:wght@300;400&amp;family=Roboto+Slab:wght@400;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.css') }}">

    <!-- SLICK CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">

    <!-- FANCY BOX CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <!-- WOW CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- toaster -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body class="body-fixed">

    <!-- PRELOAD START -->
    <div class="page-loader">
        <div class="loader-img">
            <img width="150" height="150" src="{{ asset('assets/images/loader.gif') }}" alt="loader">
        </div>
    </div>
    <!-- PRELOAD END -->

    @yield('header')

    @yield('bloglist')

    @yield('footer')

</body>
</html>