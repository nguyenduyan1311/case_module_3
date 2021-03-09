<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //
    public function index(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $flights = Flight::all();
        return view('admin.flights.flights_list',compact('flights'));
    }
    public function add(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        return view('admin.flights.add_flight');
    }
    public function store(Request $request){
        $flight = new Flight();
        $flight->flight_id = $request->input('flight_id');
        $flight->airline = $request->input('airline');
        $flight->airplane = $request->input('airplane');
        $flight->starting_place = $request->input('starting_place');
        $flight->destination_place = $request->input('destination_place');
        $flight->starting_date = $request->input('starting_date');
        $flight->scheduled_time = $request->input('scheduled_time');
        $flight->estimated_time = $request->input('estimated_time');
        $flight->save();
        return redirect()->route('flights.list');
    }
    public function edit($id){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $flight = Flight::findOrFail($id);
        return view('admin.flights.edit_flight',compact('flight'));
    }
    public function update(Request $request, $id){
        $flight = Flight::findOrFail($id);
        $flight->flight_id = $request->input('flight_id');
        $flight->airline = $request->input('airline');
        $flight->airplane = $request->input('airplane');
        $flight->starting_place = $request->input('starting_place');
        $flight->destination_place = $request->input('destination_place');
        $flight->starting_date = $request->input('starting_date');
        $flight->scheduled_time = $request->input('scheduled_time');
        $flight->estimated_time = $request->input('estimated_time');
        $flight->save();
        return redirect()->route('flights.list');
    }
    public function destroy($id){
        $flight = Flight::findOrFail($id);
        $flight->delete();
        return redirect()->route('flights.list');
    }
}
