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
use App\Models\Treatment\Treatment;
use App\Models\Offer\Offer;
use Auth;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $treatmentoffer = Offer::find($id);
        

        return view('frontend.offers.treatment.index')
            ->withTreatmentoffer($treatmentoffer);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $states = State::all();
        $categories = TicketClass::all();
        $rooms = RoomCategory::all();
        $hotels = Hotel::all();
        $hospitals = Hospital::all();
        $ticketClasses = TicketClass::all();

        return view('frontend.offers.treatment.create')
            ->withStates($states)
            ->withRooms($rooms)
            ->withCategories($categories)
            ->withHotels($hotels)
            ->withHospitals($hospitals)
            ->withTicketClasses($ticketClasses);
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
             'birthday'  =>  'required|string',
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
 
         $treatment = new Treatment();
 
         $treatment->name=$request->name;
         $treatment->user_id=Auth::user()->id;
         $treatment->birthday=(string)$request->birthday;
         $treatment->email=$request->email;
         $treatment->mobile=$request->mobile;
         $treatment->passport_number=$request->passport_number;
         $treatment->blood_group=$request->blood_group;

         $treatment->hospital=$request->hospital_id;

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
    public function show()
    {
        $treatment=Treatment::where('user_id',Auth::user()->id)->get();
        return view('frontend.offers.treatment.show')->withTreatment($treatment);
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
