<?php
class Person{

	protected $first="Noor";
	private $last="Albardawil";
	private $age="21";

	public function owner(){
		$a=$this->first;
		return $a;
	}

}

class Pet extends Person{

	public function owner(){
		$a=$this->first;
		return $a;
	}
}