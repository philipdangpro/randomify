/***************
RANDOMIFY : randomify.js is a library full of useful functions to generate random actions or data, enjoy bitches !
***************/

/***************
BOOLEAN FUNCTIONS
***************/

function rndBool(){//
		return !!Math.round(Math.random());		
}

/***************
NUMBER FUNCTIONS
***************/

function rnd(min, max){//
	if (max>=min){
		return min + Math.floor(Math.random() * (max - min + 1));		
	} else {
		return false
	}
}

function rndFloat(decimalLength){ //maximum decimalLength is 16, if over return(false)
	if (decimalLength<=16){
		return Math.floor(Math.random()*Math.pow(10,decimalLength))/Math.pow(10,decimalLength)
	} else {
		return false
	}
}

/***************
STRING FUNCTIONS
***************/

var abcLowercaseArr = "abcdefghijklmnopqrstuvwxyz";
var abcUppercaseArr = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var digitsArr = "0123456789";
var specialCharsArr = "?/~`!@$%^&*+=}{|:;,><" + "\\\[\] \"\'";
var charArr = abcLowercaseArr + abcUppercaseArr + digitsArr + specialCharsArr
var hexArr = "0123456789ABCDEF";

function rndLowercase(){
	return abcLowercaseArr[rnd(0,25)]
}

function rndUppercase(){
	return abcUppercaseArr[rnd(0,9)]	
}

function rndDigitsArr(){
	return rnd(0,9)
}

function rndSpecialChar(){
	return specialCharsArr[rnd(0,25)]
}

function rndChar(){
	return charArr[rnd(0,88)]
}

function rndHex(){
	return hexArr[rnd(0,15)]
}

function rndStr(length){
	if (length>=0){
		str = ""
		for(var i = 0; i < length; i++){
			str+=rndChar()
		}
		return str
	} else {
		return false
	}
}

/***************
COLOR FUNCTIONS
***************/

function rndRgb(){
	return "(" + rnd(0,256) + "," + rnd(0,256) + "," + rnd(0,256) + ")" 
}

function rndRgba(){
	return "(" + rnd(0,256) + "," + rnd(0,256) + "," + rnd(0,256) + "," + rndFloat(1) + ")" 
}

function rndHexColor(){
	return "#" + rndHex() + rndHex() + rndHex() + rndHex() + rndHex() + rndHex()
}

/***************
ARRAY FUNCTIONS
***************/

function rndItem(arr){
	return arr[rnd(0,arr.length-1)]	
}

function shuffle(arr){
	var shuffledArr = []
	for (var i = 0, c = arr.length; i < c; i++){
		shuffledArr.push(
			arr.splice(rnd(0,c-i-1), 1)[0]
		);
	}
	return shuffledArr
}

























