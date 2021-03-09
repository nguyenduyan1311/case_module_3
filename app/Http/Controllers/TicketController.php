<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Customer;
use App\Models\Flight;

class TicketController extends Controller
{
    public function index(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $tickets = Ticket::all();
        $customers = Customer::all();
        $flights = Flight::all();
        $passengers = Passenger::all();
        return view('admin.tickets.tickets_list',compact('tickets','customers','flights','passengers'));
    }
    public function add(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $customers = Customer::all();
        $flights = Flight::all();
        $passengers = Passenger::all();
        return view('admin.tickets.add_ticket',compact('customers','flights','passengers'));
    }
    public function store(Request $request){
        $ticket = new Ticket();
        $ticket->ticket_id = $request->input('ticket_id');
        $ticket->ticket_type = $request->input('ticket_type');
        $ticket->seat_class = $request->input('seat_class');
        $ticket->price = $request->input('price');
        $ticket->status = $request->input('status');
        $ticket->customer_name = $request->input('customer_name');
        $ticket->passenger_name = $request->input('passenger_name');
        $ticket->flight_code = $request->input('flight_code');
        $ticket->save();
        return redirect()->route('tickets.list');
    }
    public function edit($id){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $ticket = Ticket::findOrFail($id);
        $customers = Customer::all();
        $flights = Flight::all();
        $passengers = Passenger::all();
        return view('admin.tickets.edit_ticket',compact('ticket','customers','flights','passengers'));
    }
    public function update(Request $request, $id){
        $ticket = Ticket::findOrFail($id);
        $ticket->ticket_type = $request->input('ticket_type');
        $ticket->seat_class = $request->input('seat_class');
        $ticket->price = $request->input('price');
        $ticket->status = $request->input('status');
        $ticket->customer_name = $request->input('customer_name');
        $ticket->passenger_name = $request->input('passenger_name');
        $ticket->flight_code = $request->input('flight_code');
        $ticket->save();
        return redirect()->route('tickets.list');
    }
    public function destroy($id){
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        return redirect()->route('tickets.list');
    }
}
