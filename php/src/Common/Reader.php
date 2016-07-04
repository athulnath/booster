<?php 
namespace Booster\Common;

class Reader {
	public static function getLine() {
		$_fp = fopen("php://stdin","r");
		return trim(fgets($_fp)); 		
	}
}
