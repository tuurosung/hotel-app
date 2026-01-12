<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
    <!-- remix icon font css  -->



    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>


    <style media="all">
        @font-face {
            font-family: 'Avante';
            font-weight: 700;
            src: url('{{ asset("font/Avante/ITCAvantGardePro-Bold.otf") }}');
        }

        @font-face {
            font-family: 'Avante';
            font-weight: 600;
            src: url('{{ asset("font/Avante/ITCAvantGardePro-Demi.otf") }}');
        }

        @font-face {
            font-family: 'Avante';
            font-weight: 500;
            src: url('{{ asset("font/Avante/ITCAvantGardePro-Md.otf") }}');
        }

        @font-face {
            font-family: 'Avante';
            font-weight: 400;
            src: url('{{ asset("font/Avante/ITCAvantGardePro-Bk.otf") }}');
        }

        @font-face {
            font-family: 'Avante';
            font-weight: 300;
            src: url('{{ asset("font/Avante/ITCAvantGardePro-XLt.otf") }}');
        }

        body {
            font-family: 'Avante', sans-serif !important;
        }
    </style>

    <link
        href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
