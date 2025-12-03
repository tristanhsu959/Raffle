<?php

namespace App\Services;

use App\Repositories\RaffleRepository;
use Illuminate\Support\Arr;

class SettingService
{
	private $_repository;
    
	public function __construct(RaffleRepository $raffleRepository)
	{
		$this->_repository = $raffleRepository;
	}
	
	public function createFake()
	{
		$this->_repository->createFakePool('pool5years', 100);
		$this->_repository->createFakePool('poolyear', 300);
	}
}
