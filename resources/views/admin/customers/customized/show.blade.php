@extends('layouts.backend')


@section('page_title', '| CUSTOM OFFER DETAILS')

@section('stylesheet')
    {{--  External CSS  
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet"> --}}
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="sun">
             <div class="container">
                <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="title">Package Details</h1>
                            <p>Have a Tour With Us</p>
                        </div> 
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    {{-- Tour Registration Page --}}
    <section class="tourdetails">
        <div class="container">
            <div class="row tourdetailsrow">
                <div class="col-md-12  animated bounceInRight delay-2s">
                    <div class="row text-center">
                        {{-- @foreach($customizedtraveloffers as $customizedtraveloffer) --}}
                        <div class="col-md-6">
                            <div class="tourdetails_info">
                                <p class="user_name">
                                    <b>Name: </b>
                                    <span class="user_input_name">{{ $customizedtraveloffers->name }}</span>
                                </p>
                                <p class="user_birthday">
                                    <b>Birthday: </b>
                                    <span class="user_input_birthday">{{ $customizedtraveloffers->birthday }}</span>
                                </p>
                                <p class="user_email">
                                    <b>Email: </b>
                                    <span class="user_input_email">{{ $customizedtraveloffers->email }}</span>
                                </p>
                                <p class="user_mobileno">
                                    <b>Mobile No: </b>
                                    <span class="user_input_mobileno">{{ $customizedtraveloffers->mobile }}</span>
                                </p>
                                <p class="user_bloodgroup">
                                    <b>Blood Group: </b>
                                    <span class="user_input_bloodgroup">{{ $customizedtraveloffers->blood_group }}</span>
                                </p>
                                <p class="user_presentaddress">
                                    <b>Present Address: </b>
                                    <span class="user_input_presentaddress">{{ $customizedtraveloffers->present_address }}</span>
                                </p>
                                <p class="user_personnumber">
                                    <b>No of Traveler: </b>
                                    <span class="user_input_personnumber">{{ $customizedtraveloffers->traveler_number }}</span>
                                </p>
                                <p class="user_passportno">
                                    <b>Passport No: </b>
                                    <span class="user_input_passportno">{{ $customizedtraveloffers->passport_number }}</span>
                                </p>
                                <p class="user_travelfrom">
                                    <b>Travel From: </b>
                                    <span class="user_input_travelfrom">{{ \App\Models\State\State::find($customizedtraveloffers->from)->name }}</span>
                                </p>
                                <p class="user_travelto">
                                    <b>Travel To: </b>
                                    <span class="user_input_travelto">{{ \App\Models\State\State::find($customizedtraveloffers->to)->name }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tourdetails_info">
                                <p class="user_airticketno">
                                    <b>How many air ticket?: </b>
                                    <span class="user_input_airticketno">{{ $customizedtraveloffers->at_number }}</span>
                                </p>
                                <p class="user_airticketclass">
                                    <b>Air Ticket Class: </b>
                                    <span class="user_input_airticketclass">{{ \App\Models\TicketClass\TicketClass::find(4)->name }}</span>
                                </p>
                                <p class="user_trainticketno">
                                    <b>How many train ticket?: </b>
                                    <span class="user_input_trainticketno">{{ $customizedtraveloffers->tt_number }}</span>
                                </p>
                                <p class="user_trainticketclass">
                                    <b>Train Ticket Class: </b>
                                    <span class="user_input_trainticketclass">{{ App\Models\TicketClass\TicketClass::find(3)->name }}</span>
                                </p>
                                <p class="user_hotelroomselect">
                                    <b>Selected Room: </b>
                                    <span class="user_input_hotelroomselect">{{ $customizedtraveloffers->roomtype }}</span>
                                </p>
                                <p class="user_hotelroomnumber">
                                    <b>Room No : </b>
                                    <span class="user_input_hotelroomselect">{{ $customizedtraveloffers->needed_room }}</span>
                                </p>
                                <p class="user_whichhotel">
                                    <b>Which Hotel?: </b>
                                    <span class="user_input_whichhotel">{{ \App\Models\Hotel\Hotel::find($customizedtraveloffers->hotel_id)->name }}</span>
                                </p>
                                <p class="user_hotelcheckin">
                                    <b>Hotel Check In: </b>
                                    <span class="user_input_hotelcheckin">{{ $customizedtraveloffers->check_in }}</span>
                                </p>
                                <p class="user_hotelcheckout">
                                    <b>Hotel Check Out: </b>
                                    <span class="user_input_hotelcheckout">{{ $customizedtraveloffers->check_out }}</span>
                                </p>
                                <p class="user_totalcosting">
                                    <b>Total Cost: </b>
                                    <span class="user_totalcosting_amount">{{ $customizedtraveloffers->at_number*5500 + $customizedtraveloffers->tt_number*1120 }}</span>
                                </p>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="final-next-button text-center">
                            <a href="www.gmail.com"><button type="submit" class="btn btn-info btn-submit hvr-outline-out">Send Email</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
