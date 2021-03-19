@extends('layouts.backend')

@section('page_title', '| Tour')

@section('stylesheet')
    {{--  External CSS  --}}
    <style>
        td{
            padding-bottom: 5px !important;
            padding-top: 10px !important;
        }
        .priceValue{
            max-width: 30px;
            padding-top: 5px !important;
            padding-bottom: 2px;
        }
        .action{
            padding-top: 5px !important;
            max-width: 35px !important;
        }
        .priceValue input{
            border-color: #ffffff;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #fbfbfb;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <strong>Tour Package Registration</strong>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="{{route('admin.tour.create')}}" class="btn">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Heading</th>
                                    <th>City</th>
                                    <th>People</th>
                                    <th>Train From</th>
                                    <th>Train to</th>
                                    <th>Air From</th>
                                    <th>Air to</th>
                                    <th>Hotel</th>
                                    <th>Days</th>
                                    <th>Cost</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($touroffers as $key => $touroffer)
                                <tr>
                                    <td>{{ $touroffer->offerheading }}</td>
                                    <td>{{ $touroffer->vacationcity }}</td>
                                    <td>{{ $touroffer->offertourpeople }}</td>
                                    <td>{{ \App\Models\State\State::find($touroffer->trainfrom)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($touroffer->trainto)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($touroffer->flightfrom)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($touroffer->flightto)->name }}</td>
                                    <td>{{ \App\Models\Hotel\Hotel::find($touroffer->hotelname)->name }}</td>
                                    <td>{{ $touroffer->tourdays }}</td>
                                    <td>{{ $touroffer->tourcost }}</td>
                                    <td class="action">
                                        <a href="#" class="btn">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                    
                                        <a href="#" onclick="return confirm('Delete! Are you sure?')" class="btn">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection