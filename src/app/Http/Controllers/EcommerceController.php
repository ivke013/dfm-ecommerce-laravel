<?php

namespace DFM\ECommerce\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    //
    public function add($a, $b){
        $result =  $a + $b;

        return view('dfm::ecommerce:add', compact('result'));
    }

    public function subtract($a, $b){
        $result =  $a + $b;

        return view('ecommerce::test.add', compact('result'));
    }
}
