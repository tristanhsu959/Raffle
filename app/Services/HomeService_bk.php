<?php

namespace App\Services;

use App\Repositories\RaffleRepository;
use Illuminate\Support\Arr;

class HomeService
{
	private $_repository;
    
	public function __construct(RaffleRepository $raffleRepository)
	{
		$this->_repository = $raffleRepository;
	}
	
	// /* 取獎項
	 // * 
	 // */
	// public function getPrize()
	// {
		// return config('web.raffle.prize');
	// }
	
	// /* 取抽獎人數
	 // * 
	 // */
	// public function getSignInCount()
	// {
		// return $this->_repository->getSignInCount();
	// }
	
	// /* 要考慮一次抽多人的狀況
	 // * $awardCount	int	default = 1
	 // */
	// public function execute($awardCount = 10)
	// {
		// $winnerList = [];
		
		// #Step1 最後是固定人數(怎麼記錄排除已得獎者???)
		// $employees = $this->getSignInEmployees();
		
		// for($i = 0; $i < $awardCount; $i++)
		// {
			// #Step2
			// $employees = $this->shuffleData($employees);
			
			// #Step3
			// $winnerKey = $this->getWinnerKey($employees);
			
			// $winnerList[] = $employees[$winnerKey];
			
			// #remove winner
			// $employees = Arr::except($employees, $winnerKey);
		// }
		
		// return $winnerList;
	// }
	
	// /* Lottery Step Function */
	// private function getSignInEmployees()
	// {
		// #Collection array
		// $employees = $this->_repository->getSignInList();
		
		// return $employees;
	// }
	
	// private function shuffleData($data)
	// {
		// #Get shuffle times from random function
		// $times = Arr::random(config('web.lottery.shuffle_times'));
		
		// for($i = 0; $i < $times; $i++)
		// {
			// $data = Arr::shuffle($data);
		// }
		
		// return $data;
	// }
	
	// private function getWinnerKey($data)
	// {
		// $keys = array_keys($data);
		// $keys = Arr::shuffle($keys);
		// $winnerKey = Arr::random($keys);
		
		// return $winnerKey;
	// }
}
