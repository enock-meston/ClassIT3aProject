<?php



class Calculator{
	public $width;
	public $height;
	public $color;
	public $value;
	public $result;


	function __construct($a,$b,$c,$d){
		$this->height = $a;
		$this->width = $b;
		$this->color = $c;
		$this->value = $d;
	}


}

class Operation extends Calculator{
	function __construct(){
	}
	public function DisplayResult($val){
		
		return $this->value= $val;
}
public function addition(){
	
}

public function substraction(){
	
}

public function multiplacation(){
	
}

public function division(){
	
}

public function equalMethod(){
	
}

}

$one = new Calculator(2,5,"black",1);
$two = new Calculator(2,5,"gray",2);
$three = new Calculator(2,5,"gray",3);
// ================
$four = new Calculator(2,5,"black",4);
$five = new Calculator(2,5,"gray",5);
$six = new Calculator(2,5,"gray",6);
// ================
$seven = new Calculator(2,5,"black",7);
$eight = new Calculator(2,5,"gray",8);
$nine = new Calculator(2,5,"gray",9);
// ================
$zero = new Calculator(2,5,"black",0);
$point = new Calculator(2,5,"black",".");
// ================

$add = new Operation();


?>