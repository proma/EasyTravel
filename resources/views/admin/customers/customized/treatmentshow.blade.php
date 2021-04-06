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
                        {{-- @foreach($customizedtreatmentoffers as $customizedtraveloffer) --}}
                        <div class="col-md-6">
                            <div class="tourdetails_info">
                                <p class="user_name">
                                    <b>Name: </b>
                                    <span class="user_input_name">{{ $customizedtreatmentoffers->name }}</span>
                                </p>
                                <p class="user_birthday">
                                    <b>Birthday: </b>
                                    <span class="user_input_birthday">{{ $customizedtreatmentoffers->birthday }}</span>
                                </p>
                                <p class="user_email">
                                    <b>Email: </b>
                                    <span class="user_input_email">{{ $customizedtreatmentoffers->email }}</span>
                                </p>
                                <p class="user_mobileno">
                                    <b>Mobile No: </b>
                                    <span class="user_input_mobileno">{{ $customizedtreatmentoffers->mobile }}</span>
                                </p>
                                <p class="user_bloodgroup">
                                    <b>Blood Group: </b>
                                    <span class="user_input_bloodgroup">{{ $customizedtreatmentoffers->blood_group }}</span>
                                </p>
                                <p class="user_presentaddress">
                                    <b>Present Address: </b>
                                    <span class="user_input_presentaddress">{{ $customizedtreatmentoffers->present_address }}</span>
                                </p>
                                <p class="user_personnumber">
                                    <b>No of Traveler: </b>
                                    <span class="user_input_personnumber">{{ $customizedtreatmentoffers->traveler_number }}</span>
                                </p>
                                <p class="user_passportno">
                                    <b>Passport No: </b>
                                    <span class="user_input_passportno">{{ $customizedtreatmentoffers->passport_number }}</span>
                                </p>
                                <p class="user_travelfrom">
                                    <b>Travel From: </b>
                                    <span class="user_input_travelfrom">{{ \App\Models\State\State::find($customizedtreatmentoffers->from)->name }}</span>
                                </p>
                                <p class="user_travelto">
                                    <b>Travel To: </b>
                                    <span class="user_input_travelto">{{ \App\Models\State\State::find($customizedtreatmentoffers->to)->name }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tourdetails_info">
                                <p class="user_airticketno">
                                    <b>How many air ticket?: </b>
                                    <span class="user_input_airticketno">{{ $customizedtreatmentoffers->at_number }}</span>
                                </p>
                                <p class="user_airticketclass">
                                    <b>Air Ticket Class: </b>
                                    <span class="user_input_airticketclass">{{ \App\Models\TicketClass\TicketClass::find(4)->name }}</span>
                                </p>
                                <p class="user_trainticketno">
                                    <b>How many train ticket?: </b>
                                    <span class="user_input_trainticketno">{{ $customizedtreatmentoffers->tt_number }}</span>
                                </p>
                                <p class="user_trainticketclass">
                                    <b>Train Ticket Class: </b>
                                    <span class="user_input_trainticketclass">{{ App\Models\TicketClass\TicketClass::find(3)->name }}</span>
                                </p>
                                <p class="user_hotelroomselect">
                                    <b>Selected Room: </b>
                                    <span class="user_input_hotelroomselect">{{ $customizedtreatmentoffers->roomtype }}</span>
                                </p>
                                <p class="user_hotelroomnumber">
                                    <b>Room No : </b>
                                    <span class="user_input_hotelroomselect">{{ $customizedtreatmentoffers->needed_room }}</span>
                                </p>
                                <p class="user_whichhotel">
                                    <b>Which Hotel?: </b>
                                    <span class="user_input_whichhotel">{{ \App\Models\Hotel\Hotel::find($customizedtreatmentoffers->hotel_id)->name }}</span>
                                </p>
                                <p class="user_hotelcheckin">
                                    <b>Hotel Check In: </b>
                                    <span class="user_input_hotelcheckin">{{ $customizedtreatmentoffers->check_in }}</span>
                                </p>
                                <p class="user_hotelcheckout">
                                    <b>Hotel Check Out: </b>
                                    <span class="user_input_hotelcheckout">{{ $customizedtreatmentoffers->check_out }}</span>
                                </p>
                                <p class="user_totalcosting">
                                    <b>Total Cost: </b>
                                    <span class="user_totalcosting_amount">{{ $customizedtreatmentoffers->at_number*5500 + $customizedtreatmentoffers->tt_number*1120 }}</span>
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
