<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Markup;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $cust = Customer::all();
        return view('index',['customers'=>$cust]);
    }
    public function markup(){
        $markup = Markup::all();
        return view('markup',['markups'=>$markup]);
    }
}
