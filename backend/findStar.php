<?php
//Person对象
class Person
{
	var $position;
	var $height;
	var $weight;
	var $speed;
	var $bounce;
	
	function Person($p="PG", $h=160, $w=50, $s=15.0, $b=80){
		$this->position = $p;
		$this->height = $h;
		$this->weight = $w;
		$this->speed = $s;
		$this->bounce = $b;
	}
	
	function what_position(){
		return $this->position;
	}
	
	function sum(){
		return floor($this->height + $this->weight + 10*($this->speed) + $this->bounce);
	}
}

//匹配结果对象
class Result
{
	var $name;  //组合名称
	var $des;   //组合描述
	var $photo; //组合照片路径
	var $gif;   //组合动图路径
	
	function Result($n="GDP", $d="GDP", $p="./photo/default.jpg", $g="./gif/default.gif"){
		$this->name = $n;
		$this->des = $d;
		$this->photo = $p;
		$this->gif = $g;
	}
    
    function what_name(){
    	return $this->name;
    }
}


/**
	匹配球星结果的函数,共5个函数，参数个数不同，返回结果类型为Result
	findStar_1($person)    
	findStar_2($person1, $person2)
	findStar_3($person1, $person2, $person3)
	findStar_4($height, $weight, $speed, $bounce)
	findStar_5($height, $weight, $speed, $bounce)
*/
	/**
	  *匹配单个球星
	  *@param: Person
	  *@return param: Result; 
	*/
function findStar_1($person)
	{
		$position = $person->what_position();
		$sum = $person->sum();
		//默认：
		$name = "魔术师";
		$des = "神一样的传球";
		$photo = "./photo/johnson.jpg";
		$gif = "./gif/johnson.gif";
		//query the sql, get the Result
		
		//return the result
		$res = new Result($name, $des, $photo, $gif);
		return $res;
		
	}


	
	
	
	
	
?>