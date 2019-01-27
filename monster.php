<?php 

	class Monster {
	private $name = 'Default';
	private $lastname = 'Default';
	private $color = 'Default';
	private $age = 0;
	private $strenght;
	private $life;
	private $type;

	
	function __construct($color,$name,$strenght,$life, $type){
		$this ->color = $color;
		$this ->name = $name;
		$this ->strenght = $strenght;
		$this ->life = $life;
		$this ->type = $type;

	}

	function _get_name(){
	$this -> name;
	}
	function _set_name(){
	
	}
}

	$monster1= new Monster();
	$monster1 -> set_name = "Bodol";
	$monster1 -> get_lastname = "Bodol";
	$monster2= new monster();
	$monster2 -> get_age= 23;
	$monster2 -> get_color = 'blue';
	var_dump($monster1, $monster2);




?>