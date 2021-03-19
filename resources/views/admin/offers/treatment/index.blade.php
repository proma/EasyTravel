@extends('layouts.backend')

@section('page_title', '| Treatment')

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
                    <h3><strong>Treatment Package Registration</strong></h3>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="{{Route('admin.treatment.create')}}" class="btn">
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
                                    <th>People</th>
                                    <th>Hospital</th>
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
                                @foreach($treatmentoffers as $key => $treatmentoffer)
                                <tr>
                                    <td>{{ $treatmentoffer->offerheading }}</td>
                                    <td>{{ $treatmentoffer->offertourpeople }}</td>
                                    <td>{{ $treatmentoffer->hospital }}</td>
                                    <td>{{ \App\Models\State\State::find($treatmentoffer->trainfrom)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($treatmentoffer->trainto)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($treatmentoffer->flightfrom)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($treatmentoffer->flightto)->name }}</td>
                                    <td>{{ \App\Models\Hotel\Hotel::find($treatmentoffer->hotelname)->name }}</td>
                                    <td>{{ $treatmentoffer->tourdays }}</td>
                                    <td>{{ $treatmentoffer->tourcost }}</td>
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