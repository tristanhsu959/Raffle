<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

#End of Year Party
class PartyRepository extends Repository
{
	
	public function __construct()
	{
		
	}
	
	/* 已簽到人數
	 *
	 */
	public function getSignInCount()
	{
		$result = $this->connectPortal('AnnualParty')
				->where('Remark', 'Check')
				->count();
		
		return $result;
	}
	
	/* 已簽到清單
	 *
	 */
	public function getSignInList()
	{
		$result = $this->connectPortal('AnnualParty')
				->select('Category', 'Department', 'BadgeNo', 'EmpName', 'EmpIDNo as EmpId', 'ChkTm as SignInTime', 'Remark')
				->orderBy('Category')
				->get()
				->toArray();
		
		return $result;
	}
}
