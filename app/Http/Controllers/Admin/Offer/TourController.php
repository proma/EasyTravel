<?php

namespace App\Http\Controllers\Admin\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Travel\Travel;
use App\Models\State\State;
use App\Models\TicketClass\TicketClass;
use App\Models\Hotel\Hotel;
use App\Models\Offer\Offer;
use App\Models\RoomCategory\RoomCategory;

class TourController extends Controller
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
        $touroffers = Offer::all();
        return view('admin.offers.tour.index')->withTouroffers($touroffers);
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
        $rooms = RoomCategory::all();
        
        return view('admin.offers.tour.create')
            ->withStates($states)
            ->withTicketClasses($ticketClasses)
            ->withHotels($hotels)
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
        $this->validate($request,array(
            'offerheading' => 'required',
            'banner' => 'required',
            'vacationcity' => 'required',
            'offertourpeople' => 'required',
            'hotelname' => 'required',
            'hotelroomtype' => 'required',
            'touristspot' => 'required',
            'tourdays' => 'required',
            'tourcost' => 'required',
        ));

        $touroffer = new Offer();
        $touroffer->type ='tour';
        $touroffer->offerheading = $request->offerheading;
        $touroffer->vacationcity = $request->vacationcity;
        $touroffer->offertourpeople = $request->offertourpeople;
        $touroffer->trainfrom = $request->trainfrom;
        $touroffer->trainto = $request->trainto;
        $touroffer->trainclass = $request->trainclass;
        $touroffer->flightfrom = $request->flightfrom;
        $touroffer->flightto = $request->flightto;
        $touroffer->flightclass = $request->flightclass;
        $touroffer->hotelname = $request->hotelname;
        $touroffer->hotelroomtype = $request->hotelroomtype;
        $touroffer->touristspot = $request->touristspot;
        $touroffer->tourfood = $request->tourfood;
        $touroffer->tourdays = $request->tourdays;
        $touroffer->tourcost = $request->tourcost;

        if($request->hasFile('banner')){

            $this->validate($request, array(
                "banner" => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            ));
            $touroffer->banner = $request->file('banner')->store('TourBanner', 'public');
        }
        $touroffer->save();

        return redirect()->route('admin.tour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.offers.tour.show');
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
