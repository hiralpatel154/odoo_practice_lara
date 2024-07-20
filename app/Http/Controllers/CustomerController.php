<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $cust = Customer::all();
        return view('index',['customers'=>$cust]);
    }
}
