<?php

namespace Math;

class Number {
	static public function is_whole(float $num): bool{
		return fmod($num, 1) == 0.0;
	}
	
	static public function round_odd(float $n): int{
		$r = round($n);
		
		if($r % 2){
			return $r;
		}
		
		return $n - $r >= 0 ? $r + 1 : $r - 1;
	}
}