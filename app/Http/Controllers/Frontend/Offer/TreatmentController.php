<?php

namespace App\Http\Controllers\Frontend\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\State\State;
use App\Models\Doctor\Doctor;
use App\Models\Hospital\Hospital;

use App\Models\TicketClass\TicketClass;
use App\Models\RoomCategory\RoomCategory;
use App\Models\Hotel\Hotel;
use App\Models\HotelCost\HotelCost;
use App\Models\Air\Air;
use App\Models\Train\Train;
use App\Models\Travel\Travel;
use Auth;

class TreatmentController extends Controller
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
        $hospitals = Hospital::all();
        $doctors = Doctor::all();

        return view('frontend.offers.treatment.index')
            ->withStates($states)
            ->withCategories($categories)
            ->withRooms($rooms)
            ->withHotels($hotels)
            ->withHospitals($hospitals)
            ->withDoctors($doctors);
        
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
             'at_number'  =>  'integer',
             'at_class'  =>  'string',
             'tt_number'  =>  'integer',
             'tt_class'  =>  'integer',
             'roomtype'  =>  'integer',
             'hotel_id'  =>  'integer',
             'needed_room'  =>  'integer',
             'present_address'  =>  'required|string'
         ));
 
         $treatment = new Travel();
 
         $treatment->name=$request->name;
         $treatment->user_id=Auth::user()->id;
         $treatment->birthday=(string)$request->birthday;
         $treatment->email=$request->email;
         $treatment->mobile=$request->mobile;
         $treatment->passport_number=$request->passport_number;
         $treatment->blood_group=$request->blood_group;


         $treatment->state=$request->state;
         $treatment->hospital=$request->hospital;
         $treatment->department=$request->department;
         $treatment->doctor=$request->doctor;


         $treatment->traveler_number=$request->traveler_number;
         $treatment->from=$request->from;
         $treatment->to=$request->to;
         $treatment->at_number=$request->at_number;
         $treatment->tt_number=$request->tt_number;
         $treatment->tt_class=$request->tt_class;
         $treatment->roomtype=$request->roomtype;
         $treatment->hotel_id=$request->hotel_id;
         $treatment->needed_room=$request->needed_room;
         $treatment->check_in=(string)$request->check_in;
         $treatment->check_out=(string)$request->check_out;
         $treatment->present_address=$request->present_address;
 
         $treatment->save();
 
         return redirect()->Route('treatment.show');
     }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
