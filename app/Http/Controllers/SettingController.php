<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\SettingService;

class SettingController extends Controller
{
	private $_service;
    
	public function __construct(SettingService $serviceService)
	{
		$this->_service = $serviceService;
	}
	
	public function index()
	{
		return view('setting.setting');
	}
	
	public function start()
	{
		$this->_service->createFake();
		return view('setting.setting');
	}
}
