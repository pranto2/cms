<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ManageController extends Controller
{
    public function dashboard()
    {
    	return view('manage.dashboard');
    }
}
