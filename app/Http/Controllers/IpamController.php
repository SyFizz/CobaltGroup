<?php

namespace App\Http\Controllers;

class IpamController extends Controller
{

    public function index()
    {
        $subnavigation = true;
        return view('ipam.index')->with($subnavigation);
    }

}
