<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class SuperadminController extends Controller
{
    public function index()
	{
		
		return view('admin/admin');
	}

	public function addIncubator()
	{
		
		return view('admin/superadmin/incubator/add');
	}

	public function dashboard()
	{
		
		return view('admin/superadmin/dashboard/dashboard');
	}
}
