@extends('layouts.frontend')

@section('page_title', '| HOME')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Your Costing</h1>
                        <p>Pay by those methods</p>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-body">
                       <ul class="">
                        <li class="-group-item">By Bikash : 01782701216</li>
                        <li class="-group-item">By DBBL Act : 323456545645</li>
                        <li class="-group-item">Contact with phone or email</li>
                        </ul>
                    </div> -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Payment Sector</th>
                                <th scope="col">A/C No.</th>      
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bikash</td>
                                <td>01782701216</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>DBBL A/C</td>
                                <td>5456454</td>
                            </tr>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Others</td>
                                <td>Phone or Email</td>
                            </tr>
                        </tbody>
                    </table>
                    
                  </div>
            </div>
        </div>
    </div>
</section>
    
    
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection