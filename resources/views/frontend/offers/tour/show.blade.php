@extends('layouts.frontend')

@section('page_title', '| HOME')

@section('stylesheet')
    {{--  External CSS  
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet"> --}}
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Your Tour Package Details</h1>
                            <p>Have a Tour With Us</p>
                        </div>                        
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
                {{-- <div class="col-md-4 offset-md-8">
                    <div class="row  animated bounceInLeft delay-2s">
                        <div class="col-md-2">
                            <div class="edit-button">
                                <button type="edit" class="btn btn-submit">Edit</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="create-button">
                                <button type="create" class="btn btn-submit">Registration</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12  animated bounceInRight delay-2s">
                    <div class="row">
                        @foreach($tour as $tor)
                        <div class="col-md-12">
                            <div class="tourdetails_info">
                                <p class="user_name">
                                    <b>Name: </b>
                                <span class="user_input_name">{{ $tor->name }}</span>
                                </p>
                                <p class="user_birthday">
                                    <b>Birthday: </b>
                                    <span class="user_input_birthday">{{ $tor->birthday }}</span>
                                </p>
                                <p class="user_email">
                                    <b>Email: </b>
                                    <span class="user_input_email">{{ $tor->email }}</span>
                                </p>
                                <p class="user_mobileno">
                                    <b>Mobile No: </b>
                                    <span class="user_input_mobileno">{{ $tor->mobile }}</span>
                                </p>
                                <p class="user_bloodgroup">
                                    <b>Blood Group: </b>
                                    <span class="user_input_bloodgroup">{{ $tor->blood_group }}</span>
                                </p>
                                <p class="user_presentaddress">
                                    <b>Present Address: </b>
                                    <span class="user_input_presentaddress">{{ $tor->present_address }}</span>
                                </p>
                                <p class="user_personnumber">
                                    <b>No of Traveler: </b>
                                    <span class="user_input_personnumber">{{ $tor->traveler_number }}</span>
                                </p>
                                <p class="user_passportno">
                                    <b>Passport No: </b>
                                    <span class="user_input_passportno">{{ $tor->passport_number }}</span>
                                </p>
                                <p class="user_travelfrom">
                                    <b>Travel From: </b>
                                    <span class="user_input_travelfrom">{{ \App\Models\State\State::find($tor->from)->name }}</span>
                                </p>
                                <p class="user_travelto">
                                    <b>Travel To: </b>
                                    <span class="user_input_travelto">{{ \App\Models\State\State::find($tor->to)->name }}</span>
                                </p>
                                <p class="user_airticketno">
                                    <b>How many air ticket?: </b>
                                    <span class="user_input_airticketno">{{ $tor->at_number }}></span>
                                </p>
                                <p class="user_airticketclass">
                                    <b>Air Ticket Class: </b>
                                    <span class="user_input_airticketclass">{{ \App\Models\TicketClass\TicketClass::find(4)->name }}</span>
                                </p>
                                <p class="user_trainticketno">
                                    <b>How many train ticket?: </b>
                                    <span class="user_input_trainticketno">{{ $tor->tt_number }}</span>
                                </p>
                                <p class="user_trainticketclass">
                                    <b>Train Ticket Class: </b>
                                    <span class="user_input_trainticketclass">{{ App\Models\TicketClass\TicketClass::find(3)->name }}</span>
                                </p>
                                <p class="user_hotelroomselect">
                                    <b>Selected Room: </b>
                                    <span class="user_input_hotelroomselect">{{ $tor->roomtype }}</span>
                                </p>
                                <p class="user_hotelroomnumber">
                                    <b>Room No : </b>
                                    <span class="user_input_hotelroomselect">{{ $tor->needed_room }}</span>
                                </p>
                                <p class="user_whichhotel">
                                    <b>Which Hotel?: </b>
                                    <span class="user_input_whichhotel">{{ \App\Models\Hotel\Hotel::find($tor->hotel_id)->name }}</span>
                                </p>
                                <p class="user_hotelcheckin">
                                    <b>Hotel Check In: </b>
                                    <span class="user_input_hotelcheckin">{{ $tor->check_in }}</span>
                                </p>
                                <p class="user_hotelcheckout">
                                    <b>Hotel Check Out: </b>
                                    <span class="user_input_hotelcheckout">{{ $tor->check_out }}</span>
                                </p>
                                <p class="user_totalcosting">
                                    <b>Total Cost: </b>
                                    <span class="user_totalcosting_amount">{{ $tor->at_number*5500 + $tor->tt_number*1120 }}</span>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="final-next-button text-center">
                            <a href="{{Route('info')}}"><button type="submit" class="btn btn-submit hvr-outline-out">Next</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
