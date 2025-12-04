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
	
	/* 顯示抽獎獎項View
	 *
	 */
	public function prizes()
	{
		#取抽獎執行狀態
		$response['raffleStatus'] 	= $this->_service->getRaffleStatus();
		$response['prizes'] 		= $this->_service->getPrizes(); #取獎項
		list($response['seniorEmployees'] ,$response['juniorEmployees']) = $this->_service->getRegisterEmployees();
		
		return view('raffle.prizes', $response);
	}
	
	/* 預備抽獎執行頁
	 *
	 */
	public function prepareDrawing(Request $request, $configKey)
	{
		#取抽獎執行狀態
		$response['raffleStatus'] 	= $this->_service->getRaffleStatus();
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
		
		if($request->ajax())
		{
			$configKey = $request->input('configKey');
			$response['data'] = $this->_service->startDrawing($configKey);
			$response['status'] = TRUE;
			
			return response()->json($response);
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
