<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FeelFreeTransport</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/google-font.css') }}">
</head>

<body>
    @include('navbar')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="text-transform: uppercase"> Vehiclerental </h1>
            </div>
            <hr>
            <div class="col-md-12">
               
                <div class="faq-content mt-4">
                    <h2>FAQ - FeelFree Transport</h2>
                    <ol>
                        <li>
                            <strong>What is FeelFree Transport?</strong>
                            <p>FeelFree Transport is a professional transportation service specializing in customer
                                transfers. We provide safe, comfortable, and reliable rides to and from various
                                locations, including airports, hotels, businesses, and personal destinations.</p>
                        </li>
                        <li>
                            <strong>What types of transportation services do you offer?</strong>
                            <p>We offer a wide range of services, including:</p>
                            <ul>
                                <li>Airport transfers</li>
                                <li>Business and corporate transportation</li>
                                <li>Hotel and resort transfers</li>
                                <li>Private car hire</li>
                                <li>City tours and sightseeing trips</li>
                            </ul>
                        </li>
                        <li>
                            <strong>How do I book a ride?</strong>
                            <p>Booking a ride with us is simple. You can:</p>
                            <ul>
                                <li>Visit our website and book online</li>
                                <li>Call our customer service hotline</li>
                                <li>Use our mobile app (if available)</li>
                                <li>Send us an email with your transportation details</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Do you provide airport pick-up and drop-off services?</strong>
                            <p>Yes, we provide reliable airport transfers. Our drivers will track your flight schedule
                                to ensure timely pick-up and drop-off, making your journey smooth and stress-free.</p>
                        </li>
                        <li>
                            <strong>Are your drivers professional and licensed?</strong>
                            <p>Absolutely! All our drivers are professionally trained, fully licensed, and experienced
                                to provide you with the safest and most comfortable ride possible.</p>
                        </li>
                        <li>
                            <strong>What type of vehicles do you use?</strong>
                            <p>Our fleet includes a variety of vehicles to suit your needs, such as:</p>
                            <ul>
                                <li>Sedans for individual travelers or small groups</li>
                                <li>SUVs for extra comfort and luggage space</li>
                                <li>Vans for larger groups and families</li>
                                <li>Luxury vehicles for VIP services</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Can I request a specific vehicle?</strong>
                            <p>Yes, you can request a specific type of vehicle when booking. We will do our best to
                                accommodate your preferences based on availability.</p>
                        </li>
                        <li>
                            <strong>How much does the service cost?</strong>
                            <p>Our pricing depends on factors such as distance, vehicle type, and additional services.
                                You can check our website for estimated rates or contact us directly for a quote.</p>
                        </li>
                        <li>
                            <strong>What payment methods do you accept?</strong>
                            <p>We accept various payment methods, including:</p>
                            <ul>
                                <li>Credit/debit cards</li>
                                <li>Online payments</li>
                                <li>Cash payments (in selected locations)</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Can I cancel or modify my booking?</strong>
                            <p>Yes, you can cancel or modify your booking. However, please check our cancellation policy
                                for details on refunds and rescheduling.</p>
                        </li>
                        <li>
                            <strong>Do you offer services for corporate or business clients?</strong>
                            <p>Yes, we provide corporate transportation solutions tailored to business needs, including
                                employee transfers, executive rides, and event transportation.</p>
                        </li>
                        <li>
                            <strong>How can I contact FeelFree Transport for more information?</strong>
                            <p>You can reach us via:</p>
                            <ul>
                                <li>Phone: [Your Contact Number]</li>
                                <li>Email: [Your Email Address]</li>
                                <li>Website: [Your Website URL]</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
