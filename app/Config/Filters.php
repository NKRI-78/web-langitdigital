<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	public $aliases = [
		'isLoggedIn' => \App\Filters\isLoggedIn::class,
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
	];

	public $globals = [
		'after'  => [
			'toolbar',
		],
	];

	public $methods = [];

	public $filters = [
		'isLoggedIn' => [
			'before' => [
				// '/',
				'init',
				// 'user/dashboard',
				// 'user/product',
				// 'user/order',
				'admin/dashboard',
				'admin/banner',
				'admin/event',
				'admin/news',
				'admin/member',
				'admin/broadcast',
				'admin/reportOrder/status/pending',
				'admin/reportOrder/status/confirmed',
				'admin/reportOrder/status/packing',
				'admin/reportOrder/status/shipping',
				'admin/reportOrder/status/delivered',
				'admin/reportOrder/status/cancelled',
				'admin/studentNew',
				'admin/studentGeneration',
				'admin/studentGeneration/student/(:num)',
				'admin/mediaSosial',
				'admin/testimoni',
				'admin/caption',
				'admin/brosur',
				'admin/partnership',
				'admin/absensi',
				'admin/nilai',
				'admin/modul',
				'admin/absensi/studentNotAttendance/(:num)'
			],
			'after'  => [
				'/',	
				'auth/login'
			]
		],
	];
}
