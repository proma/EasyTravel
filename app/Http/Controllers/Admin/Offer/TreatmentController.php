<?php

namespace App\Http\Controllers\Admin\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.offers.treatment.index');
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
            'treatmentWhichPlace'  =>  'string',
            'treatmentHospital'  =>  'required|string',
            'treatmentMedicalDepartment'  =>  'required|integer',
            'treatmentPreferableDoctor'  =>  'required|string',
            'from'  =>  'required|string',
            'to'  =>  'required|string',

            'at_number'  =>  'integer',
            'at_class'  =>  'string',
            'tt_number'  =>  'integer',
            'tt_class'  =>  'string',
            'roomtype'  =>  'string',
            'hotel_id'  =>  'integer',
            'needed_room'  =>  'integer',
            'check_in'  =>  'required',
            'check_out'  =>  'required',
            'present_address'  =>  'required|string'
        ));
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
