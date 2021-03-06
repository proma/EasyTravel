@extends('layouts.backend')

@section('page_title', '| AIRS')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.hotelcost.store') }}" method="POST">
            @csrf
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Generate New Price</strong>
        
                        <div class="card-actions">
                            <a onclick="history.back()" class="btn">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Journey To</label>
                                    <select id="to" name="hotel_id" class="form-control">
                                        @foreach($hotels as $hotel)
                                        <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tclass_id">Ticket Class</label>
                                    <select id="tclass_id" name="room_cat_id" class="form-control">
                                        @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price" class="form-control-label">Price <sup>( Per Person )</sup></label>
                                    <input id="price" name="cost" class="form-control" placeholder="1200">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <button class="btn btn-outline-dark btn-sm float-right" type="submit">Add To List</button>
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