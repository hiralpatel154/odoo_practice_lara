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
        $customerJson = $request->query('data');
        $customerData = json_decode(urldecode($customerJson), true);
        $cid = $customerData['id'];
        $markup = Markup::all()->where('cid',$cid);
        return view('markup',['markups'=>$markup,'customer' => $customerData]);
    }
}
