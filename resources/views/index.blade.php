<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FeelFreeTransport</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/google-font.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
    @include('navbar')
    @include('components.home.Carousel')



    {{-- <div class="container-fluid">
        <div class="row p-1">
            <div class="col-md-5" style="background-color: rgb(7, 161, 143); color: white; border-radius: 5px;">
                <h1 class="text-center">Feelfree Transport</h1>
                <div class="text-center">
                    <p>Feelfree Transport is a car rental company that offers</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, unde?
                    </p>
                </div>
            </div>
            <div class="col-md-5" style="background-color: rgb(7, 161, 143); color: white; border-radius: 5px;">
                <h1 class="text-center">Feelfree Transport</h1>
                <div class="text-center">
                    <p>Feelfree Transport is a car rental company that offers</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, unde?
                    </p>
                </div>
            </div>
        </div>
    </div> --}}

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
