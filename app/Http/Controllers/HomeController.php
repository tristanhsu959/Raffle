<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\HomeService;

class HomeController extends Controller
{
	private $_service;
    
	public function __construct(HomeService $homeService)
	{
		$this->_service = $homeService;
	}
	
	public function index()
	{
		return view('home.index');
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
