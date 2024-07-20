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
    public function markup(Request $request){
        $cid = $request->query('id');
        $markup = Markup::all()->where('cid',$cid);

        $customer = Customer::find($cid);
        return view('markup',['markups'=>$markup,'customer' => $customer]);
    }
}
