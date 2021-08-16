<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Washer;
use Illuminate\Http\Request;

class WasherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($truck_id)
    {
        //
        $washers = Washer::where('truck_id' ,$truck_id)->get();
        return view('truck.washers.index', compact('washers', 'truck_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($truck_id)
    {
        //
        return view('truck.washers.create', compact('truck_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($truck_id, Request $request)
    {
        $washer = request()->except('_token');
        Washer::create($washer + ['truck_id' => $truck_id]);
        return redirect()->route('truck.washers.index', $truck_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function show($truck_id, Washer $washer)
    {
        return view('truck.washers.show', compact('truck_id', 'washer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function edit($truck_id, Washer $washer)
    {
        return view('truck.washers.edit', compact('truck_id', 'washer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function update($truck_id, Request $request, Washer $washer)
    {
        $washer->update($request->all());
        return redirect()->route('truck.washers.index', $truck_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function destroy($truck_id, Washer $washer)
    {
        $washer->delete();
        return redirect()->route('truck.washers.index', $truck_id);
    }
}
