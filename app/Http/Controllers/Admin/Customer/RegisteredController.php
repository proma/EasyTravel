<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Offer\Offer;
use App\Models\Travel\Travel;
use App\Models\Treatment\Treatment;

class RegisteredController extends Controller
{
    private $registered;
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
        $registeredoffer = Offer::all();
        $customizedtraveloffer = Travel::all();
        $customizedtreatmentoffer = Treatment::all();
        return view('admin.customers.registered.index')
                ->withRegisteredoffer($registeredoffer )
                ->withCustomizedtraveloffer($customizedtraveloffer)
                ->withCustomizedtreatmentoffer($customizedtreatmentoffer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        /*$hospital = $this->hospital->find($id);
        $states = State::all();

        return view('admin.packages.hospital.edit')
                ->withHospital($hospital)
                ->withStates($states);*/
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
        /*$this->validate($request,array(
            'name' => 'required|string',
            ));

        $hospital = $this->hospital->find($id);

        $hospital->name = $request->name;
        $hospital->state_id = $request->state_id;

        $hospital->save();

        return redirect()->route('admin.hospital.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$hospital = $this->hospital->find($id);
        $hospital->delete();

        return redirect()->back();*/
    }
}
