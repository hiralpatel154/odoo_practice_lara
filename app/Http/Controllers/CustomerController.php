<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Markup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $cust = Customer::all();
        return view('index',['customers'=>$cust]);
    }
    public function markup(Request $request){
        DB::enableQueryLog();

        $cid = $request->query('id');
        $customer = Customer::find($cid);
        $markup = Markup::where('cid',$cid)->get();

        $queries = DB::getQueryLog(); // Get query log
        // Log or dd the queries to inspect
        // dd($queries);
    
        return view('markup',['markups'=>$markup,'customer' => $customer]);

        /** find() vs where() in laravel
            Single Record: Use find($id) when you know you need only one record by its primary key.
            
            Multiple Records: Use where('field', $value)->get() when you need multiple records that match a certain condition.
         * **/
    }
}
