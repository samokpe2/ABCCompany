<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommisionController extends Controller
{
    //

    public function index(Request $request)
    {
        
        
        
        return view('commissions');
    }

    public function top_earners(Request $request){

        return view('top_earners')->with("top_earners", Commissionordersreport::get_top_sales(100));
    }
}
