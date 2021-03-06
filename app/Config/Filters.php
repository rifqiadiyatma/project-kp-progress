<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'FilterAuth' => \App\Filters\FilterAuth::class,
		'admin' => \App\Filters\Admin::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			// 'honeypot',
			// 'csrf',
			'FilterAuth'=> ['except' =>[
				'auth','auth/*','/',
			]]
		],
		'after'  => [
			'toolbar',
			// 'honeypot',
			'FilterAuth'=> ['except' =>[
				'home', 'home/*',
				'pilar', 'pilar/*',
				'dokumen', 'dokumen/*',
				'user', 'user/*',
				'profile', 'profile/*',
				'periode', 'periode/*',
				'panduan','panduan/*',
				'masterfile', 'masterfile/*'
			]],
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [
		'admin' => [
			'before' => [
				'user','user/*',
				'dokumen/verifikasi/*',
				'periode','periode/*',
				'masterfile','masterfile/*'
			]
		]
	];
}
