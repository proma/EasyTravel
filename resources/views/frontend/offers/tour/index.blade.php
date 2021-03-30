@extends('layouts.frontend')

@section('page_title', '| TOUR')

@section('stylesheet')
    {{--  External CSS  --}}
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet"> 
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-md-12 custom-tour-button text-right">
                            <a href="{{route('tour.create')}}" class="btn">
                                <button type="" class="btn btn-submit hvr-outline-out" id=""><strong>Make Your Cutomize Offer</strong></button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <div class="tour-details text-center">
                                {{-- <img src="{{ url(env('IMG_STORE', 'storage/').$touroffers->banner) }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."> --}}
                                
                                
                                <h1 class="title">{{$offer->offerheading}}</h1>
                                <div class="details">
                                    <p>Vacation City: {{ optional(\App\Models\State\State::find($offer->vacationcity))->name }}<br></p> 

                                    <p>Total People: {{$offer->offertourpeople}}<br></p>

                                    <p>Train Journey: From- {{ optional(\App\Models\State\State::find($offer->trainfrom))->name }} To {{ optional(\App\Models\State\State::find($offer->trainto))->name }}<br></p>

                                    <p>Train Ticket Class: {{ optional(\App\Models\TicketClass\TicketClass::find($offer->trainclass))->name }}<br>

                                    <p>Air Journey: From- {{ optional(\App\Models\State\State::find($offer->flightfrom))->name }} To {{ optional(\App\Models\State\State::find($offer->flightto))->name }}<br></p>

                                    <p>Air Ticket Class: {{ optional(\App\Models\TicketClass\TicketClass::find($offer->flightclass))->name }}<br></p>

                                    <p>Hotel: {{ optional(\App\Models\Hotel\Hotel::find($offer->hotelname))->name }}<br></p>

                                    <p>Hotel Room Type: {{ optional(\App\Models\RoomCategory\RoomCategory::find($offer->hotelroomtype))->name }}<br></p>

                                    <p>Tourist Spots to show: {{$offer->touristspot}}<br></p>

                                    <p>Food that will offer during the tour: {{$offer->tourfood}}<br></p>

                                    <p>Tour will be for: {{$offer->tourdays}} days<br><br></p>

                                    <h3><strong> Cost: {{$offer->tourcost}}TK</strong><br></h3>
                                </div>
                            </div>
                        </div>   
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-submit hvr-outline-out" id="submit"><strong>Buy this Offer</strong></button>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
@endsection