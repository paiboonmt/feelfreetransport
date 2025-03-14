<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us - FeelFreeTransport</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/google-font.css') }}">
    <style>
        .about-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .about-section h1 {
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .about-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .about-section .team-member {
            margin-bottom: 30px;
        }
        .about-section .team-member img {
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .about-section .team-member h5 {
            font-size: 20px;
            margin-bottom: 5px;
        }
        .about-section .team-member p {
            font-size: 16px;
            color: #6c757d;
        }
    </style>
</head>

<body>
    @include('navbar')
 
    <div class="container mt-3 mb-5 about-section">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <h1>About Us</h1>
                <p class="p-1">FeelFreeTransport is a leading transportation company dedicated to providing top-notch services to our customers. Our mission is to offer reliable, safe, and affordable transportation solutions that meet the diverse needs of our clients.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center team-member">
                <img src="{{ asset('images/logo/tum.jpg') }}" alt="Team Member 1" class="img-fluid" width="150">
                <h5>John Doe</h5>
                <p>Developer</p>
                {{-- <p>CEO & Founder</p> --}}
            </div>
            <div class="col-md-4 text-center team-member">
                <img src="{{ asset('images/logo/nong.jpg') }}" alt="Team Member 2" class="img-fluid" width="150">
                <h5>Jane Smith</h5>
                <p>CEO & Founder</p>
                <p>Chief Operating Officer</p>
            </div>
            <div class="col-md-4 text-center team-member">
                <img src="{{ asset('images/logo/eng.jpg') }}" alt="Team Member 3" class="img-fluid" width="150">
                <h5>Mike Johnson</h5>
                <p>CEO & Founder</p>
                <p>Head of Customer Service</p>
            </div>
        </div>
    </div>

    @include('components.home.Footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>