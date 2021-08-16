<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\washer;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['trucks'] = Truck::paginate(5); 
        return view('truck.index', $datos);
        // return view('truck.washer');
    }

    public function washer()
    {
        return view('truck.washer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('truck.create');
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
        // $truck = request()->all();
        $truck = request()->except('_token');
        Truck::insert($truck);
        return redirect('truck');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $truck = Truck::findOrfail($id);
        $washersCount = washer::where('truck_id', '=', $id)->count();
        $washersVal = washer::where('truck_id', $id)->sum('value');
        $washersWeight = washer::where('truck_id', $id)->sum('weight');
        return view('truck.edit', compact('truck'))->with('cantidad' ,$washersCount)->with('valor' ,$washersVal)->with('peso', $washersWeight);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosTruck = request()->except('_token', '_method');
        Truck::where('id', '=', $id)->update($datosTruck);

        $truck = Truck::findOrfail($id);
        // return view('truck.edit', compact('truck'));
        return redirect('truck');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Truck::destroy($id);
        return redirect('truck');
    }
}
