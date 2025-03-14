<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us - FeelFreeTransport</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/google-font.css') }}">
    <style>
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .contact-info p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .contact-info i {
            color: #007bff;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    @include('navbar')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="text-transform: uppercase">Contact Us</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 mx-auto contact-info">
                <h2>FeelFree Transport</h2>
                <p>FeelFree Transport is committed to providing exceptional customer service. If you have any questions or concerns, please do not hesitate to contact us. Our team is here to assist you with any inquiries you may have, and we will do our best to address your needs in a timely and professional manner. Thank you for choosing FeelFree Transport for your transportation needs.</p>
                <h2>General Inquiries</h2>
                <p><i class="fas fa-envelope"></i>Email: info@feelfreetransport.com</p>
                <p><i class="fas fa-phone"></i>Phone: +1 (555) 123-4567</p>
                <p><i class="fas fa-map-marker-alt"></i>Address: 123 Main Street, Anytown, USA</p>
                <h2>Customer Service</h2>
                <p><i class="fas fa-envelope"></i>Email: support@feelfreetransport.com</p>
                <p><i class="fas fa-phone"></i>Phone: +1 (555) 987-6543</p>
                <p><i class="fas fa-map-marker-alt"></i>Address: 123 Main Street, Anytown, USA</p>
            </div>
        </div>
    </div>


    @include('components.home.Footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>