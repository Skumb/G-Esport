<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIAppliController extends Controller
{

	public function __construct()
	{
    }
    
    public function connect(Request $request)
    {
        return $request->all();
    }

}