@extends('layouts.backend')

@section('page_title', '| Tour Offer')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tour.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Tour Offer</strong>
        
                        <div class="card-actions">
                            <a onclick="history.back()" class="btn">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="card">   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="from">Offer Heading</label>
                                    <input type="text" id="offerheading" name="offerheading" class="form-control" placeholder="Platinum">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="from">Banner</label>
                                    <input type="file" id="offerbanner" name="banner" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="from">Vacation City</label>
                                    <select id="vacationcity" name="vacationcity" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>How many people?</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <lebel for="offertourpeople">Offer for how many people?</lebel>
                                    <input type="number" class="form-control" name="offertourpeople" id="offertourpeople" placeholder="3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Train</strong>
                    </div>    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Journey From</label>
                                    <select id="from" name="trainfrom" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Journey To</label>
                                    <select id="to" name="trainto" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tclass_id">Ticket Class</label>
                                    <select id="tclass_id" name="trainclass" class="form-control">
                                        @foreach($ticketClasses as $ticketClass)
                                        <option value="{{ $ticketClass->id }}">{{ $ticketClass->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Flight</strong>
                    </div> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Journey From</label>
                                    <select id="from" name="flightfrom" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Journey To</label>
                                    <select id="to" name="flightto" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tclass_id">Ticket Class</label>
                                    <select id="tclass_id" name="flightclass" class="form-control">
                                        @foreach($ticketClasses as $ticketClass)
                                        <option value="{{ $ticketClass->id }}">{{ $ticketClass->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Hotel</strong>
                    </div> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Hotel</label>
                                    <select id="to" name="hotelname" class="form-control">
                                        @foreach($hotels as $hotel)
                                        <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tclass_id">Room Type</label>
                                    <select id="tclass_id" name="hotelroomtype" class="form-control">
                                        @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Tourist Spot and Food System</strong>
                    </div> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Places</label>
                                    <textarea name="touristspot" id="touristspot" cols="60" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tourfood">Food system</label>
                                    <textarea name="tourfood" id="tourfood" cols="60" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>How Many Days?</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <lebel for="tourdays">Timeperiod</lebel>
                                    <input type="number" name="tourdays" class="form-control" id="tourdays" placeholder="3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>Total Cost</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price" class="form-control-label">Price <sup>( Per Person )</sup></label>
                                    <input id="price" name="tourcost" class="form-control" placeholder="1200">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="card-footer bg-light">
                        <button class="btn btn-default" type="submit">Add To List</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection