<?php

namespace App\Http\Controllers\Cookbook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        $rs = \DB::select('select pow(cccc, 2) from test where id = 1');

        print_r($rs);


        return view('cookbook.config.index');
    }
}
