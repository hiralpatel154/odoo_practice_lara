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
        
        // Collection
        $markup = Markup::where('cid',$cid)->get();
        
        // Array - convert collection into array
        // $markup = Markup::where('cid',$cid)->get()->toArray();
        /****
         array:4 [▼ // app\Http\Controllers\CustomerController.php:21
            0 => array:7 [▼
                "id" => 3
                "cid" => 1
                "food_type" => "OilFree"
                "from_price" => "100.00"
                "to_price" => "200.00"
                "created_at" => null
                "updated_at" => null
            ]
            1 => array:7 [▼
                "id" => 4
                "cid" => 1
                "food_type" => "Oilly"
                "from_price" => "120.00"
                "to_price" => "150.00"
                "created_at" => null
                "updated_at" => null
            ]
            2 => array:7 [▼
                "id" => 6
                "cid" => 1
                "food_type" => "OilFree"
                "from_price" => "50.00"
                "to_price" => "150.00"
                "created_at" => null
                "updated_at" => null
            ]
            3 => array:7 [▼
                "id" => 8
                "cid" => 1
                "food_type" => "OilFree"
                "from_price" => "550.00"
                "to_price" => "5150.00"
                "created_at" => "2024-07-20T04:17:36.000000Z"
                "updated_at" => "2024-07-20T04:17:36.000000Z"
            ]
        ]
         */

        dd($markup);

        $queries = DB::getQueryLog(); // Get query log
        // Log or dd the queries to inspect
        // dd($queries);
    
        return view('markup',['markups'=>$markup,'customer' => $customer]);

        /** find() vs where() in laravel
            Single Record: Use find($id) when you know you need only one record by its primary key. 
            ** Eloquent ORM method: find($id) -> Best for straightforward CRUD operations and relationships. Ideal for most use cases where you work with individual records or simple queries.

            Multiple Records: Use where('field', $value)->get() when you need multiple records that match a certain condition.
            ** Eloquent Query Builder method: where('field', $value)->get() -> Best for complex queries that require fine-grained control over the SQL being generated. Useful for advanced scenarios like complex joins, subqueries, or raw expressions.
         * **/
    }
}
