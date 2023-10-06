<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function all_customer(){
        $customers = Customer::orderBy('id', 'Desc')->get();

        return response()->json([
            'customers' => $customers
        ], 200);
    }
}
