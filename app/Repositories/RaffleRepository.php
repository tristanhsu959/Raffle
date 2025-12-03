<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class RaffleRepository extends Repository
{
	const POOL5YEARS= 'pool5years';
	const POOLYEAR 	= 'poolyear';
	
	public function __construct()
	{
		
	}
	
	/* 取1年5年年資Pool
	 * @params boolean
	 * @return int
	 */
	public function getRegisterEmployees($isFiveYears = FALSE)
	{
		$table = $isFiveYears ? self::POOL5YEARS : self::POOLYEAR;
		$db = $this->connectRaffle($table);
		return $db->count();
	}
	
	/* 取有效人數
	 * @params string
	 * @return array
	 */
	public function getValidEmployeesId($poolTable)
	{
		#PrizeNo = 0, 未抽中的人
		$db = $this->connectRaffle($poolTable);
		$result = $db->select('Id')
					->where('PrizeNo', '=', 0)
					->get();
		
		return $result->pluck('Id')->toArray();
	}
	
	
	
	/** ====================================
	/* For Testing
	 *
	 */
	public function createFakePool($table, $count)
	{
		$data = $this->_buildFakeData($count);
		
		$db = $this->connectRaffle($table);
		return $db->insert($data);
	}
	
	private function _buildFakeData($count)
	{
		$data = [];
		for($i = 1; $i <= $count; $i++)
		{
			$item = [];
			$item['EmployeeNo'] = sprintf('T2025%03d', $i);
			$item['Name'] 		= sprintf('蔣%03d', $i);
			$item['Department'] = sprintf('%03d部門', $i);
			$item['CreateAt'] 	= now()->format('Y-m-d H:i:s');
			$item['UpdateAt'] 	= $item['CreateAt'];
			
			$data[] = $item;
		}
		
		return $data;
	}
}
