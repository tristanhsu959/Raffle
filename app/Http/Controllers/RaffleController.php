<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\RaffleService;

class RaffleController extends Controller
{
	private $_service;
    
	public function __construct(RaffleService $raffleService)
	{
		$this->_service = $raffleService;
	}
	
	/* 獎項
	 *
	 */
	public function prizes()
	{
		$response['prizes'] = $this->_service->getPrize(); #取獎項
		return view('raffle.prizes', $response);
	}
	
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
