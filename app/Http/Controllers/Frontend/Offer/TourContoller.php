<?php

namespace App\Http\Controllers\Frontend\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\State\State;

use App\Models\TicketClass\TicketClass;
use App\Models\RoomCategory\RoomCategory;
use App\Models\Hotel\Hotel;
use App\Models\HotelCost\HotelCost;
use App\Models\Air\Air;
use App\Models\Train\Train;
use App\Models\Travel\Travel;
use Auth;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        $categories = TicketClass::all();
        $rooms = RoomCategory::all();
        $hotels = Hotel::all();

        return view('frontend.offers.tour.index')
            ->withStates($states)
            ->withCategories($categories)
            ->withRooms($rooms)
            ->withHotels($hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'  =>  'required|string',
            'birthday'  =>  'required',
            'email'  =>  'required|string',
            'mobile'  =>  'required|string',
            'passport_number'  =>  'required|string',
            'blood_group'  =>  'required|string',
            'traveler_number'  =>  'required|integer',
            'from'  =>  'required',
            'to'  =>  'required',
            'present_address'  =>  'required|string'
        ));

        $tour = new Travel();

        $tour->name=$request->name;
        $tour->user_id=Auth::user()->id;

        $tour->birthday=(string)$request->birthday;
        $tour->email=$request->email;
        $tour->mobile=$request->mobile;
        $tour->passport_number=$request->passport_number;
        $tour->blood_group=$request->blood_group;
        $tour->traveler_number=$request->traveler_number;
        $tour->from=$request->from;
        $tour->to=$request->to;
        $tour->at_number=$request->at_number;
        $tour->at_class=$request->at_class;
        $tour->tt_number=$request->tt_number;
        $tour->tt_class=(int)$request->tt_class;
        $tour->roomtype=$request->roomtype;
        $tour->hotel_id=$request->hotel_id;
        $tour->needed_room=$request->needed_room;
        $tour->check_in=(string)$request->check_in;
        $tour->check_out=(string)$request->check_out;
        $tour->present_address=$request->present_address;
        $tour->save();

        return redirect()->Route('tour.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tour=Travel::where('user_id',Auth::user()->id)->get();
        return view('frontend.offers.tour.show')->withTour($tour);
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

    public function airSelection($from, $to){
        $ticketClasses = Air::with(['roomcategory'])->where('from', $from)->where('to', $to)->get();

        return response()->json($ticketClasses);
    }

    public function trainSelection($from, $to){
        $ticketClasses = Train::where('from', $from)->where('to', $to)->get();

        return response()->json($ticketClasses);
    }
    public function hotelSelection($id){
        $data = HotelCost::where('room_cat_id', $id)->get();

        return response()->json($data);
    }
    public function gethotel($id){
        $data = Hotel::find($id);
        return response()->json($data);
    }
}
