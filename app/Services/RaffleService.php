<?php

namespace App\Services;

use App\Repositories\RaffleRepository;
use Illuminate\Support\Arr;
use Log;

class RaffleService
{
	#須與config相同
	private $_repository;
    
	public function __construct(RaffleRepository $raffleRepository)
	{
		$this->_repository = $raffleRepository;
	}
	
	/* 取獎項
	 * @param
	 * @return int 
	 */
	public function getPrizes()
	{
		return config('web.raffle.prizes');
	}
	
	/* 取抽獎人數
	 * @param
	 * @return int
	 */
	public function getRegisterEmployees()
	{
		$result['pool5Years'] = $this->_repository->getRegisterEmployees(TRUE);
		$result['poolYear'] = $this->_repository->getRegisterEmployees();
		
		return Arr::flatten($result);
	}
	
	/* 取抽獎人數
	 * @param
	 * @return int
	 */
	public function getPrizeSetting($configKey)
	{
		$config = $this->getPrizes();
		$setting = data_get($config, $configKey, []);
		$setting['configKey'] = $configKey;
		
		return $setting;
	}
	
	/* 要考慮一次抽多人的狀況
	 * @param int
	 * @return array
	 */
	public function startDrawing($configKey)
	{
		try
		{
			$winnerIds = [];
			$winnerInfo = [];
			$config = $this->getPrizeSetting($configKey);
			
			#1.取相關設定
			$prizeNo 	= $config['key'];
			$poolTable 	= $config['pool'];
			$quantity 	= $config['quantity']; #名額
			
			#2.取抽獎人數(Id即可)
			$employees = $this->_repository->getValidEmployeesId($poolTable);
			
			#3.隨取抽獎
			list($employees, $winnerIds) = $this->_drawingWinner($employees, $quantity);
			
			#4.Update DB
			$this->_repository->setWinners($poolTable, $winnerIds, $prizeNo);
			
			#5.Get Winner Info
			$winnerInfo = $this->_repository->getWinnerInfo($poolTable, $prizeNo);
			
			return $winnerInfo;
		}
		catch(Exception $e)
		{
			Log::error($e->getMessage(), [ __class__, __function__]);
			return FALSE;
		}
	}
	
	private function _drawingWinner($employees, $quantity)
	{
		$winnerIds = [];
		
		for($i = 0; $i < $quantity; $i++)
		{
			#1 打亂
			$employees = $this->_shuffleEmployees($employees);
			
			#2 取隨機Key值, 非Id
			$winnerKey = $this->_getWinnerKey($employees);
			
			#3 取出Id
			$winnerIds[] = $employees[$winnerKey];
			
			#4 刪除已得獎者Key
			$employees = Arr::except($employees, $winnerKey);
		}
		
		#這兩個都要回傳更新
		return [$employees, $winnerIds];
	}
	
	private function _shuffleEmployees($employees)
	{
		#Get shuffle times from random function
		$times = Arr::random(config('web.raffle.shuffle_times'));
		
		for($i = 0; $i < $times; $i++)
		{
			$employees = Arr::shuffle($employees);
		}
		
		return $employees;
	}
	
	private function _getWinnerKey($data)
	{
		$keys = array_keys($data);
		$keys = Arr::shuffle($keys);
		$winnerKey = Arr::random($keys);
		
		return $winnerKey;
	}
}
