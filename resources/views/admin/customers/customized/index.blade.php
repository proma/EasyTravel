@extends('layouts.backend')

@section('page_title', '| CUSTOMIZED OFFER REGISTRATION')

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
                    <strong>Customer Registration for Tour Offers</strong>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="#" class="btn">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th class="action">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customizedtraveloffers as $customizedtraveloffer)
                                <tr>
                                    <td>{{$customizedtraveloffer->name}}</td>
                                    <td>{{$customizedtraveloffer->email}}</td>
                                    <td>{{$customizedtraveloffer->mobile}}</td>
                                    <td>
                                        <a href="{{Route('customizedoffer.show', ['id' => $customizedtraveloffer->id])}}">Show Details</a>    
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <strong>Customer Registration for Treatment Offers</strong>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="#" class="btn">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th class="action">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customizedtreatmentoffers as $customizedtreatmentoffer)
                                <tr>
                                    <td>{{$customizedtreatmentoffer->name}}</td>
                                    <td>{{$customizedtreatmentoffer->email}}</td>
                                    <td>{{$customizedtreatmentoffer->mobile}}</td>
                                    <td>
                                        <a href="{{Route('customizedoffer.treatmentshow', ['id' => $customizedtreatmentoffer->id])}}">Show Details</a>    
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