<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Offer\Offer;


class OffersController extends Controller
{
    public function index(){
        $offers= Offer::all();
        return view('frontend.offers.index')->withOffers($offers);
    }
}
