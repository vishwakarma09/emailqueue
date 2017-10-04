<?php 

namespace EmailQueue;

/**
* Class cron of EmailQueue package
*/
class Cron
{
	
	function __construct()
	{
		
	}

	public function index()
	{
		echo "cron running";
	}

	public static function world()
	{
		return 'Hello World, Composer!';
	}

}