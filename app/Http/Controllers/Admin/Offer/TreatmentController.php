<?php

namespace App\Http\Controllers\Admin\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Travel\Travel;
use App\Models\State\State;
use App\Models\TicketClass\TicketClass;
use App\Models\Hotel\Hotel;
use App\Models\Hospital\Hospital;
use App\Models\Offer\Offer;
use App\Models\RoomCategory\RoomCategory;

class TreatmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatmentoffers = Offer::all();
        return view('admin.offers.treatment.index')->withTreatmentoffers($treatmentoffers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $ticketClasses = TicketClass::all();
        $hotels = Hotel::all();
        $hospitals = Hospital::all();
        $rooms = RoomCategory::all();

        return view('admin.offers.treatment.create')
            ->withStates($states)
            ->withTicketClasses($ticketClasses)
            ->withHotels($hotels)
            ->withHospitals($hospitals)
            ->withRooms($rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, array(
            'offerheading' => 'required',
            'banner' => 'required',
            'hospital' => 'required',
            'offertourpeople' => 'required',
            'hotelname' => 'required',
            'hotelroomtype' => 'required',
            'tourdays' => 'required',
            'tourcost' => 'required',
        ));
      

        $treatmentoffer = new Offer();
        $treatmentoffer->type ='treatment';
        $treatmentoffer->offerheading = $request->offerheading;
        $treatmentoffer->hospital = $request->hospital;
        $treatmentoffer->offertourpeople = $request->offertourpeople;
        $treatmentoffer->trainfrom = $request->trainfrom;
        $treatmentoffer->trainto = $request->trainto;
        $treatmentoffer->trainclass = $request->trainclass;
        $treatmentoffer->flightfrom = $request->flightfrom;
        $treatmentoffer->flightto = $request->flightto;
        $treatmentoffer->flightclass = $request->flightclass;
        $treatmentoffer->hotelname = $request->hotelname;
        $treatmentoffer->hotelroomtype = $request->hotelroomtype;
        $treatmentoffer->tourdays = $request->tourdays;
        $treatmentoffer->tourcost = $request->tourcost;

        if($request->hasFile('banner')){

            $this->validate($request, array(
                "banner" => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            ));

            $treatmentoffer->banner = $request->file('banner')->store('TreatmentBanner', 'public');
        }
        $treatmentoffer->save();

        return redirect()->route('admin.treatment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.offers.treatment.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
