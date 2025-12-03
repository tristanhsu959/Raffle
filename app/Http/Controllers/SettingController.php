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
	
	// public function home2()
	// {
		// $returnData['signInCount'] = $this->_service->getSignInCount();
		// $returnData['prize'] = $this->_service->getPrize(); #取獎項
		
		// return view('home', $returnData);
	// }
	
	// /* 得獎者清單
	 // *
	 // */
	// public function getWinnerList()
	// {
		// return view('winnerList');
	// }

	// /* 抽獎執行頁
	 // *
	 // */
	// public function raffle()
	// {
		// return view('raffle');
	// }
}
