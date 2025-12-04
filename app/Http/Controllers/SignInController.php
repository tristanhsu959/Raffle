<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SignInController extends Controller
{
	private $_service;
    
	public function __construct()
	{
		//$this->_service = $raffleService;
	}
	
	/* 目前沒用 */
	public function index()
	{
		return view('api.signin');
	}
}
