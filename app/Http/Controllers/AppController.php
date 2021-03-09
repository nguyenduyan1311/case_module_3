<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function searchFlight(Request $request){
        if (!$this->userCan('view-page-guest')){
            abort(403);
        }
        $ticket_type = $request->input('ticket_type');
        $seat_class = $request->input('seat_class');
        $starting_airport = $request->input('starting_airport');
        $destination_airport = $request->input('destination_airport');
        $starting_date = $request->input('starting_date');
        $flights = DB::table('flights')->where('starting_airport',$starting_airport)->where('destination_airport',$destination_airport)->where('starting_date',$starting_date)->get();
        return view('guest.fullsearch',compact('flights','ticket_type','seat_class'));
    }
    public function pageFullSearch(){
        if (!$this->userCan('view-page-guest')){
            abort(403);
        }
        $flights = Flight::all();
        return view('guest.fullsearch',compact('flights'));
    }
    public function pagePrebooking(Request $request){
        if (!$this->userCan('view-page-guest')){
            abort(403);
        }
        $passengers_number = $request->input('passengers_number');
        return view('guest.prebooking',compact('passengers_number'));
    }
}
