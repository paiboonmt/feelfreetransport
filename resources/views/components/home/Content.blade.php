<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 ms-auto">
            <form action="{{ route('order.index') }}" method="post">
                @csrf

                {{-- คำอธิบาย --}}
                <div class="row">
                    <div class="col-md-12 col-sm-12 hidden">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus earum labore at amet totam
                            dolorem ex nulla quae. Nulla, reiciendis corporis. Atque distinctio omnis autem architecto
                            debitis, magnam voluptate officiis alias maiores dolor soluta ipsam voluptas sit nemo
                            delectus
                            facere laboriosam ducimus doloremque non nulla accusantium veniam. Ratione, delectus nobis?
                        </p>
                        <hr>
                        <p>
                            <span style="color: rgb(8, 196, 233);">BOOKING NOW</span>
                        </p>
                    </div>
                </div>

                {{-- จากไหน ไป ที่ไหน --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Form </label>
                            <select name="from" class="form-control">
                                {{-- <option value="" disabled selected>-- Choose --</option> --}}
                                <option value="Phuket Airport">Phuket-Airport</option>
                                <option value="Ao Por / Point Yamu">Ao Por / Point Yamu</option>
                                <option value="Bang Rong Pier">Bang Rong Pier</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>To</label>
                            <select name="to" class="form-control">
                                {{-- <option value="" disabled selected>-- Choose --</option> --}}
                                <option value="Phuket Airport">Phuket-Airport</option>
                                <option value="Ao Por / Point Yamu">Ao Por / Point Yamu</option>
                                <option value="Bang Rong Pier">Bang Rong Pier</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- journy Vehicle_type --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Pleases Select Your journy</label>
                            <select name="journy" class="form-control">
                                {{-- <option value="" disabled selected>-- Choose --</option> --}}
                                <option value="One Way">One Way</option>
                                <option value="Round Trip">Round Trip</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Pleaese Select Vehicle type</label>
                            <select name="vehicle_type" class="form-control">
                                {{-- <option value="" disabled selected>-- Choose --</option> --}}
                                <option value="Standard Car - 3 pax">Standard Car - 3 pax</option>
                                <option value="Luxury SUV - 4 pax">Luxury SUV - 4 pax</option>
                                <option value="Standart Minibus - 8 pax">Standart Minibus - 8 pax</option>
                                <option value="Family Van - 8 pax">Family Van - 8 pax</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- vehicle Passengers --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Number of Vehicles</label>
                            <select name="vehicle" class="form-control">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Number of Passengers</label>
                            <select name="passengers" class="form-control">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Hotel Destionation --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Hotel Name</label>
                            <input type="text" name="hotel" class="form-control" value="Patong Hotel" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Hotel name in destination</label>
                            <input type="text" name="destination" value="Patong" class="form-control" required>
                        </div>
                    </div>
                </div>

                {{-- Required Pick-up date Required Pick-up time --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Required Pick-up date</label>
                            <input type="date" name="pick_up_date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Required Pick-up time</label>
                            <input type="time" name="pick_up_time" value="{{ \Carbon\Carbon::now()->format('H:i') }}" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Lead Passenger name</label>
                            <input type="text" name="passenger_name" value="DevTiger" class="form-control" required>
                        </div>
                    </div>
                </div>

                {{-- Mobile Phone Email --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Mobile Phone No.( With country code )</label>
                            <input type="number" name="phone" value="0952566992" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="Dev@local.com" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-6 mb-3">
                        <textarea name="remark" class="form-control" placeholder="Remark" cols="30" rows="3">Lorem ipsum dolor sit amet.</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-6 mb-3">
                        <button class="btn btn-primary form-control">Confirm Booking</button>
                    </div>
                </div>

            </form>
            <hr>
        </div>
        {{-- ภาพ --}}
        <div class="col-md-4 ms-auto ">
            <div class="row mb-3">
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3> Our Vehicles </h3>
                            <p>(All have Air-Conditioning )</p>
                        </div>
                        <div class="card-body">
                            <div>
                                <img src="{{ asset('images/car/suv1.png') }}" class="d-block w-100 h-100">
                            </div>
                        </div>
                        <div class="card-footer">
                            <p class="text-center">Izuzu Mux 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3> Our Vehicles </h3>
                            <p>(All have Air-Conditioning )</p>
                        </div>
                        <div class="card-body">
                            <div>
                                <img src="{{ asset('images/car/Minibus1.jpg') }}" class="d-block w-100 h-100">
                            </div>
                        </div>
                        <div class="card-footer">
                            <p class="text-center">Minibus Standart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
