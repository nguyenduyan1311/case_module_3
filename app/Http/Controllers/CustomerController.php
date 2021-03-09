<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function add(){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        return view('admin.customers.add_customer');
    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->customer_id = $request->input('customer_id');
        $customer->surname = $request->input('surname');
        $customer->middle_first_name = $request->input('middle_first_name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->tickets_number = $request->input('tickets_number');
        $customer->save();
        return redirect()->route('customers.list');
    }
    public function edit($id){
        if (!$this->userCan('view-page-admin')){
            abort(403);
        }
        $customer = Customer::findOrFail($id);
        return view('admin.customers.edit_customer',compact('customer'));
    }
    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->customer_id = $request->input('customer_id');
        $customer->surname = $request->input('surname');
        $customer->middle_first_name = $request->input('middle_first_name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->tickets_number = $request->input('tickets_number');
        $customer->save();
        return redirect()->route('customers.list');
    }
    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.list');
    }
}
