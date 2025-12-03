<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\RaffleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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
		$response['prizes'] 		= $this->_service->getPrizes(); #取獎項
		list($response['seniorEmployees'] ,$response['juniorEmployees']) = $this->_service->getRegisterEmployees();
		
		return view('raffle.prizes', $response);
	}
	
	/* 抽獎執行頁
	 *
	 */
	public function prepareDrawing(Request $request, $configKey)
	{
		$response['prizeSetting']	= $this->_service->getPrizeSetting($configKey);
		return view('raffle.drawing', $response);
	}
	
	/* 執行抽獎
	 *
	 */
	public function startDrawing(Request $request)
	{
		$response['status'] = FALSE;
		$response['msg'] 	= '';
		$response['data'] 	= '';
		
		if(!$request->ajax())
		{
			//response['prizeSetting']	= $this->_service->getPrizeSetting($configKey);
			return view('raffle.drawing', $response);
		}
		else
		{
			$response['msg'] = 'Access denied';
			return response()->json($response);
		}
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
