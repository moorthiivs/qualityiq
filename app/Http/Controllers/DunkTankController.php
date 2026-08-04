<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class DunkTankController extends Controller
{
    public function listModals(Request $request)  
    {
         return view('models');
    }

    public function dunktank(Request $request)  
    {
         return view('dunktank');
    }
}
