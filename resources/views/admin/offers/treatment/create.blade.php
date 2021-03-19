@extends('layouts.backend')

@section('page_title', '| Treatment Offer')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form  action="{{ route('admin.treatment.store') }}" enctype="multipart/form-data"  method="POST">
            @csrf
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Treatment Offer</strong>
        
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
                                    <input type="file" id="banner" name="banner" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>Hospital and Department</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="from">Hospital</label>
                                    <select id="hospitaloffer" name="hospital" class="form-control">
                                        @foreach($hospitals as $hospital)
                                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
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
                                    <label for="trainfrom">Journey From</label>
                                    <select id="trainfrom" name="trainfrom" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="trainto">Journey To</label>
                                    <select id="trainto" name="trainto" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="trainclass">Ticket Class</label>
                                    <select id="trainclass" name="trainclass" class="form-control">
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
                                        <label for="flightfrom">Journey From</label>
                                        <select id="flightfrom" name="flightfrom" class="form-control">
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="flightto">Journey To</label>
                                        <select id="flightto" name="flightto" class="form-control">
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="flightclass">Ticket Class</label>
                                        <select id="flightclass" name="flightclass" class="form-control">
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
                                        <label for="hotelname">Hotel</label>
                                        <select id="hotelname" name="hotelname" class="form-control">
                                            @foreach($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hotelroomtype">Room Type</label>
                                        <select id="hotelroomtype" name="hotelroomtype" class="form-control">
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
                        <div class="card-header">
                            <strong>How Many Days?</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <lebel for="tourdays">How many days?</lebel>
                                        <input type="number" class="form-control" id="tourdays" name="tourdays" placeholder="3">
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
                                        <label for="tourcost" class="form-control-label">Price <sup>( Per Person )</sup></label>
                                        <input id="tourcost" name="tourcost" class="form-control" placeholder="1200">
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