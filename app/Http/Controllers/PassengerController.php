<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Passenger;
use App\Models\Customer;

class PassengerController extends Controller
{
    public function index(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $passengers = Passenger::all();
        $customers = Customer::all();
        return view('admin.passengers.passengers_list',compact('passengers','customers'));
    }
    public function add(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $customers = Customer::all();
        $countries = Country::all();
        return view('admin.passengers.add_passenger',compact('customers','countries'));
    }
    public function store(Request $request){
        $passenger = new Passenger();
        $passenger->passenger_id = $request->input('passenger_id');
        $passenger->surname = $request->input('surname');
        $passenger->middle_first_name = $request->input('middle_first_name');
        $passenger->gender = $request->input('gender');
        $passenger->birthday = $request->input('birthday');
        $passenger->country = $request->input('country');
        $passenger->customer_name = $request->input('customer_name');
        $passenger->save();
        return redirect()->route('passengers.list');
    }
    public function edit($id){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $passenger = Passenger::findOrFail($id);
        $customers = Customer::all();
        return view('admin.passengers.edit_passenger',compact('passenger','customers'));
    }
    public function update(Request $request, $id){
        $passenger = Passenger::findOrFail($id);
        $passenger->passenger_id = $request->input('passenger_id');
        $passenger->surname = $request->input('surname');
        $passenger->middle_first_name = $request->input('middle_first_name');
        $passenger->gender = $request->input('gender');
        $passenger->birthday = $request->input('birthday');
        $passenger->country = $request->input('country');
        $passenger->customer_name = $request->input('customer_name');
        $passenger->save();
        return redirect()->route('passengers.list');
    }
    public function destroy($id){
        $passenger = Passenger::findOrFail($id);
        $passenger->delete();
        return redirect()->route('passengers.list');
    }
}
