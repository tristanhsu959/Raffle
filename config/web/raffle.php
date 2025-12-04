<?php

return [
	
	#獎項(Key與獎項對應)
	'prizes' => [
	
		'1' => [
			'key' 			=> 25001,
			'title' 		=> '頭獎',
			'description' 	=> '招牌煎餃10000顆',
			'quantity' 		=> 5,
			'yearLimit' 	=> 5,
			'pool' 			=> 'pool5years',
		],
		'2' => [
			'key' 			=> 25002,
			'title' 		=> '二獎',
			'description' 	=> '招牌煎餃5000顆',
			'quantity' 		=> 5,
			'yearLimit' 	=> 5,
			'pool' 			=> 'pool5years',
		],
		'3' => [	
			'key' 			=> 25003,
			'title' 		=> '三獎',
			'description' 	=> '招牌煎餃3000顆',
			'quantity' 		=> 5,
			'yearLimit' 	=> 5,
			'pool' 			=> 'pool5years',
		],
		'4' => [
			'key' 			=> 25004,
			'title' 		=> '四獎',
			'description'	=> '招牌煎餃2000顆',
			'quantity' 		=> 10,
			'yearLimit' 	=> 1,
			'pool' 			=> 'poolyear',
		],
		'5' => [
			'key' 			=> 25005,
			'title' 		=> '五獎',
			'description' 	=> '招牌煎餃1000顆',
			'quantity' 		=> 20,
			'yearLimit' 	=> 1,
			'pool' 			=> 'poolyear',
		],
		'6' => [
			'key' 			=> 25006,
			'title' 		=> '六獎',
			'description' 	=> '招牌煎餃500顆',
			'quantity' 		=> 100,
			'yearLimit'	 	=> 1,
			'pool' 			=> 'poolyear',
		],
		'7' => [
			'key' 			=> 25007,
			'title' 		=> '七獎',
			'description' 	=> '招牌煎餃200顆',
			'quantity' 		=> 50,
			'yearLimit'	 	=> 1,
			'pool' 			=> 'poolyear',
		],
		'8' => [
			'key' 			=> 25008,
			'title' 		=> '八獎',
			'description' 	=> '招牌煎餃100顆',
			'quantity' 		=> 50,
			'yearLimit'	 	=> 1,
			'pool' 			=> 'poolyear',
		],
		'9' => [
			'key' 			=> 25009,
			'title' 		=> '九獎',
			'description' 	=> '招牌煎餃200顆',
			'quantity' 		=> 50,
			'yearLimit'	 	=> 1,
			'pool' 			=> 'poolyear',
		],
		'10' => [
			'key' 			=> 25010,
			'title' 		=> '十獎',
			'description' 	=> '招牌煎餃100顆',
			'quantity' 		=> 50,
			'yearLimit'	 	=> 1,
			'pool' 			=> 'poolyear',
		],
	],
	
	#洗牌次數
    'shuffle_times' => [1, 2, 3, 4, 5],
    
];
