<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class Repository
{
	protected function connectPortal($table)
	{
		#先用poserp測試之後再改
		return DB::connection('Portal')->table($table)->lock('WITH(NOLOCK)');
	}
}
