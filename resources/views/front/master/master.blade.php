<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraDev - @yield('title')</title>
    <meta name="description" content="Ambiente de Teste.">
    <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url(mix('front/assets/css/vendor.css')) }}" />
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/style.css')) }}" />
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/icofont.css')) }}" />
    
    </head>

    <body>
        <div class="main-wrapper">

            @include('front.includes.header')

                @yield('content')

            @include('front.includes.footer')
        

            <a class="scroll-to-top style-5" href="">
                <i class="icofont-arrow-up"></i>
            </a>
        </div>

        <script src="{{ url(mix('front/assets/js/vendor.js')) }}"></script>
        <script src="{{ url(mix('front/assets/js/main.js')) }}"></script>
    </body>
</html>

<!-- Obra de Arte -->