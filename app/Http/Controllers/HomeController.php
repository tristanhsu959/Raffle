<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\RaffleService;

class HomeController extends Controller
{
	private $_service;
    
	public function __construct(RaffleService $raffleService)
	{
		$this->_service = $raffleService;
	}
	
	public function index()
	{
		$returnData['signInCount'] = $this->_service->getSignInCount();
		$returnData['prize'] = $this->_service->getPrize(); #取獎項
		
		return view('home', $returnData);
	}
	
	/* 得獎者清單
	 *
	 */
	public function getWinnerList()
	{
		return view('winnerList');
	}

	/* 抽獎執行頁
	 *
	 */
	public function raffle()
	{
		return view('raffle');
	}
}
