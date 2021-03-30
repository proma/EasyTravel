@extends('layouts.frontend')

@section('page_title', '| TREATMENT')

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
                            <a href="{{route('treatment.create')}}" class="btn">
                                <button type="" class="btn btn-submit hvr-outline-out" id=""><strong>Make Your Cutomize Offer</strong></button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <div class="tour-details text-center">
                                {{-- <img src="{{ url(env('IMG_STORE', 'storage/').$touroffers->banner) }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."> --}}
                                
                                
                                <h1 class="title">{{$treatmentoffer->offerheading}}</h1>
                                <div class="details">
                                    {{-- <p>For Hospital: {{$treatmentoffer->hospital}}<br></p>  --}}
                                    <p>For Hospital: {{ optional(\App\Models\Hospital\Hospital::find($treatmentoffer->hospital))->name }}<br></p> 

                                    <p>Total People: {{$treatmentoffer->offertourpeople}}<br></p>

                                    <p>Train Journey: From- {{ optional(\App\Models\State\State::find($treatmentoffer->trainfrom))->name }} To {{ optional(\App\Models\State\State::find($treatmentoffer->trainto))->name }}<br></p>

                                    <p>Train Ticket Class: {{ optional(\App\Models\TicketClass\TicketClass::find($treatmentoffer->trainclass))->name }}<br>

                                    <p>Air Journey: From- {{ optional(\App\Models\State\State::find($treatmentoffer->flightfrom))->name }} To {{ optional(\App\Models\State\State::find($treatmentoffer->flightto))->name }}<br></p>

                                    <p>Air Ticket Class: {{ optional(\App\Models\TicketClass\TicketClass::find($treatmentoffer->flightclass))->name }}<br></p>

                                    <p>Hotel: {{ optional(\App\Models\Hotel\Hotel::find($treatmentoffer->hotelname))->name }}<br></p>

                                    <p>Hotel Room Type: {{ optional(\App\Models\RoomCategory\RoomCategory::find($treatmentoffer->hotelroomtype))->name }}<br></p>

                                    <p>Tour will be for: {{$treatmentoffer->tourdays}} days<br><br></p>

                                    <h3><strong> Cost: {{$treatmentoffer->tourcost}}TK</strong><br></h3>
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