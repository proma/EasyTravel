<?php

namespace App\Http\Controllers\Admin\Hospital;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Hospital\Hospital;
use App\Models\State\State;

class HospitalController extends Controller
{
    private $hospital;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->hospital = new Hospital();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = $this->hospital->all();
        $states = State::all();
        return view('admin.hospitals.index')
                ->withHospitals($hospitals )
                ->withStates($states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospitals.create');
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
            'name' => 'required|string',
            ));
        $hospital = new Hospital();

        $hospital->name = $request->name;
        $hospital->user_id = auth()->user()->id;
        $hospital->state_id = $request->state_id;
        $hospital->save();

        return redirect()->route('admin.hospitals.index');
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
        $hospital = $this->hospital->find($id);
        $states = State::all();

        return view('admin.packages.hospital.edit')
                ->withHospital($hospital)
                ->withStates($states);
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
        $this->validate($request,array(
            'name' => 'required|string',
            ));

        $hospital = $this->hospital->find($id);

        $hospital->name = $request->name;
        $hospital->state_id = $request->state_id;

        $hospital->save();

        return redirect()->route('admin.hospital.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = $this->hospital->find($id);
        $hospital->delete();

        return redirect()->back();
    }
}
