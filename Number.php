<?php

namespace Math;

class Number {
	static public function is_whole(float $num): bool{
		return fmod($num, 1) == 0.0;
	}
}