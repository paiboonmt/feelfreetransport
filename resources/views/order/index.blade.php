<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FeelFreeTransport</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/google-font.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    @include('navbar')

    {{-- @dump($data) --}}

    <div class="container-fluid">
        <div class="row p-1">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Confirm Booking</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('booking.store') }}" method="post">
                            @csrf
                            {{-- form to --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Form</label>
                                        <input type="text" class="form-control" name="from" readonly
                                            value="{{ $data['from'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" name="to" readonly
                                            value="{{ $data['to'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- journy  vehicle_type --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your journy</label>
                                        <input type="text" class="form-control" name="journy" readonly value="{{ $data['journy'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Vehicle type</label>
                                        <input type="text" class="form-control" name="vehicle_type" readonly value="{{ $data['vehicle_type'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- journy  vehicle_type --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Number of Vehicles</label>
                                        <input type="text" class="form-control" name="vehicle" readonly value="{{ $data['vehicle'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Number of Passengers</label>
                                        <input type="text" class="form-control" name="passengers" readonly value="{{ $data['passengers'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Hotel Name Hotel name in destination --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Hotel Name Hotel</label>
                                        <input type="text" class="form-control" name="hotel" readonly value="{{ $data['hotel'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Hotel name in destination</label>
                                        <input type="text" class="form-control" name="destination" readonly value="{{ $data['destination'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Required Pick-up date && Required Pick-up time --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Required Pick-up date</label>
                                        <input type="date" class="form-control" name="pick_up_date" readonly value="{{ $data['pick_up_date'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Required Pick-up time</label>
                                        <input type="time" class="form-control" name="pick_up_time" readonly value="{{ $data['pick_up_time'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Lead Passenger name --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Lead Passenger name</label>
                                        <input type="text" class="form-control" name="passenger_name" readonly value="{{ $data['passenger_name'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile Phone No.( With country code ) Email --}}
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Mobile Phone No.( With country code )</label>
                                        <input type="number" class="form-control" name="phone" readonly value="{{ $data['phone'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" readonly value="{{ $data['email'] }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Remark --}}
                            <div class="row">
                                <div class="col-md-12 col-sm-6 mb-3">
                                    <textarea name="remark" class="form-control" cols="30" rows="3">{{ $data['remark'] }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 mb-3">
                                    <button type="submit" class="btn btn-primary">Confirm Booking</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
