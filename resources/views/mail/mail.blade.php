
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Details</title>
</head>

<body>
    <h1>Booking Details</h1>
    <p>From: {{ $bookingData['from'] }}</p>
    <p>To: {{ $bookingData['to'] }}</p>
    <p>Journy: {{ $bookingData['journy'] }}</p>
    <p>Vehicle Type: {{ $bookingData['vehicle_type'] }}</p>
    <p>Vehicle: {{ $bookingData['vehicle'] }}</p>
    <p>Passengers: {{ $bookingData['passengers'] }}</p>
    <p>Hotel: {{ $bookingData['hotel'] }}</p>
    <p>Destination: {{ $bookingData['destination'] }}</p>
    <p>Pick Up Date: {{ $bookingData['pick_up_date'] }}</p>
    <p>Pick Up Time: {{ $bookingData['pick_up_time'] }}</p>
    <p>Passenger Name: {{ $bookingData['passenger_name'] }}</p>
    <p>Phone: {{ $bookingData['phone'] }}</p>
    <p>Email: {{ $bookingData['email'] }}</p>
    <p>Remark: {{ $bookingData['remark'] }}</p>
</body>

</html>

