<?php

/***************
RANDOMIFY : randomify.php is a library full of useful functions to generate random actions or data, enjoy bitches !
IMP : 
	- it would be cool if everything was an object or something like that
	- create a n-dimensional shuffled matrix
***************/

/***************
BOOLEAN FUNCTIONS
***************/

function rndBool(){
	return mt_rand(0,1) == 1;
}

/***************
NUMBER FUNCTIONS
***************/

//function rnd(min, max){} already exists in php. The function is called : mt_rand(min, max)

/** author : https://twitter.com/ivankrisdotcom
 * Generate Float Random Number
 *
 * @param float $min min value
 * @param float $max max value
 * @param int $round : number of decimal digits. default value equals 0
 * @return float Random float value
 */
function rndFloat($min, $max, $round=0){
    //validate input
    if ($min > $max) { $min=$max; $max=$min; }
        else { $min=$min; $max=$max; }
    $float = $min + mt_rand() / mt_getrandmax() * ($max - $min);
    if($round > 0)
        $float = round($float,$round);
    return $float;
}

/***************
STRING FUNCTIONS
***************/

function rndLowercase(){
	return chr(mt_rand(97,122));
}

function rndUppercase(){
	return chr(mt_rand(65,90));
}

function rndDigitsArr(){
	return chr(mt_rand(48,57));
}

function rndSpecialChar(){
	//build an array with all the special characters of the ascii list
	$specialCharArr = [];
	for ($i=32; $i <= 47 ; $i++) { 
		array_push($specialCharArr, chr($i));
	}	
	for ($i=58; $i <= 64 ; $i++) { 
		array_push($specialCharArr, chr($i));
	}
	for ($i=91; $i <= 96 ; $i++) { 
		array_push($specialCharArr, chr($i));
	}
	for ($i=123; $i <= 126 ; $i++) { 
		array_push($specialCharArr, chr($i));
	}	
	return $specialCharArr[array_rand($specialCharArr)];
}

function rndChar(){
	return chr(mt_rand(32,126));
}

function rndHex(){
	//build the array in two times
	$hexArr = [];
	for ($i=48; $i <= 57 ; $i++) { 
		array_push($hexArr, chr($i));
	}	
	for ($i=65; $i <= 70 ; $i++) { 
		array_push($hexArr, chr($i));
	}
	return $hexArr[array_rand($hexArr)];
}

function rndStr($length){
	if ($length>=0){
		$str = "";
		for($i = 0; $i < $length; $i++){
			$str.=rndChar();
		}
		return $str;
	} else {
		return false;
	}
}

/***************
COLOR FUNCTIONS
***************/

function rndRgb(){
	return "(" . mt_rand(0,255) . "," . mt_rand(0,255) . "," . mt_rand(0,255) . ")";
}

function rndRgba(){
	return "(" . mt_rand(0,255) . "," . mt_rand(0,255) . "," . mt_rand(0,255) . "," . rndFloat(0,1,1) . ")"; 
}

function rndHexColor(){
	return "#" . rndHex() . rndHex() . rndHex() . rndHex() . rndHex() . rndHex();
}

/***************
ARRAY FUNCTIONS
***************/

function rndItem($arr){
	return $arr[array_rand($arr)];
}

//a shuffle array function already exists in PHP. The function is called shuffle : bool shuffle ( array &$array )