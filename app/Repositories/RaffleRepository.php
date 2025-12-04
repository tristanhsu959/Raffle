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
	
	/* 更新Winner data
	 * @params string
	 * @params array
	 * @params string
	 * @return array
	 */
	public function setWinners($poolTable, $winnerIds, $prizeNo)
	{
		#build update data
		$data = ['PrizeNo' => $prizeNo, 'UpdateAt' => now()->format('Y-m-d H:i:s')];
		
		$db = $this->connectRaffle($poolTable);
		$db->whereIn('Id', $winnerIds)
			->update($data);
		
		return TRUE;
	}
	
	/* 取Winner data
	 * @params string
	 * @params string
	 * @return array
	 */
	public function getWinnerInfo($poolTable, $prizeNo)
	{
		$db = $this->connectRaffle($poolTable);
		$result = $db->select('EmployeeNo', 'Name', 'Department')
					->where('PrizeNo', '=', $prizeNo)
					->get()->toArray();
		
		return $result;
	}
	
	/* 取Winner status
	 * @params string
	 * @params string
	 * @return array
	 */
	public function getRaffleStatus()
	{
		$db = $this->connectRaffle('pool5years');
		$senior = $db->select('PrizeNo')
					->where('PrizeNo', '!=', 0)
					->groupBy('PrizeNo')
					->get();
		
		$db = $this->connectRaffle('poolyear');
		$junior = $db->select('PrizeNo')
					->where('PrizeNo', '!=', 0)
					->groupBy('PrizeNo')
					->get();
		
		$result = $senior->merge($junior);
		
		return $result->pluck('PrizeNo')->toArray();
	}
	
	/** ====================================
	/* Fake Data For Testing
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
		$fakeName = ['黃名林', '陸初鳳', '周月清', '蔣一冬', '陳江舟', '邵明皓', '尤江琪', '詹晤鶴', '盧倫昊', '趙揚琴', '嚴弘鈞', '朱元杉', '許瑞雅', '連國杭', '鄒信業', '施易連', '張杭眾', '林榮鋅', '薛歌洋', '陸川遙', '馮先羽', '邱安折', '陳華蓓', '林丞蓁', '馮聰蒨', '楊夕爾', '詹夢採', '劉亦家', '黎楠洋', '程業理', '方常斯', '黃琦蕾', '丁娜希', '林城悟', '鄭晶肇', '邱一煜', '嚴威超', '趙萬辛', '胡瑜軒', '石凡宇', '楊煥眉', '朱文森', '戴詩雪', '洪以翊', '賴乾禹', '楊彌維', '施全明', '陳耿舟', '張丹靄', '陳書理', '林鈞雙', '張利越', '周倩思', '陳叢濤', '方先恩', '張騏錦', '王依楷', '羅瀟瑋', '王雷鋅', '王俠材', '楊宜靄', '蔣源育', '蔡嘉筱', '劉洪瑗', '郭斯瀟', '汪升韋', '蔡冬柯', '陳榕鷺', '郭吉少', '唐娟賢', '薛慶靄', '黃初昀', '楊俊玉', '卓凱景', '連南蓉', '馬宣珊', '唐亦愛', '張晏萍', '蘇曼芝', '楊尹鳳', '鄭一瑩', '卓亦睿', '錢昭湘', '郭晨月', '洪瑛茜', '李召材', '賴舒雪', '蔡宥沫', '邵婭捷', '程彥詠', '黃昌水', '梁勝千', '金于苡', '連翊菲', '姜旭豐', '許然言', '涂方鑫', '許康鬆', '孫勁淳', '許利珮'];
		$data = [];
		$nameKey = 0;
		
		for($i = 1; $i <= $count; $i++)
		{
			$name = Arr::random($fakeName);
			
			$item = [];
			$item['EmployeeNo'] = sprintf('T2025%03d', $i);
			$item['Name'] 		= $name;
			$item['Department'] = sprintf('%03d部門', $i);
			$item['CreateAt'] 	= now()->format('Y-m-d H:i:s');
			$item['UpdateAt'] 	= $item['CreateAt'];
			
			$data[] = $item;
		}
		
		return $data;
	}
}
