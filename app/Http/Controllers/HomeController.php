<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showPageGuest()

    {

        if (!$this->userCan('view-page-guest')) {

            abort(403);

        }

        return view("guest.search_flight");

    }


    public function showPageAdmin()

    {

        if (!$this->userCan('view-page-admin')) {

            abort(403);

        }
        $customers = Customer::all();
        return view('admin.customers.customers_list',compact('customers'));

    }
}
