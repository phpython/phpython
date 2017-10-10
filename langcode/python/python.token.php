<?php

class lang_python_token {
	
	public $row;
	public $col;
	public $len;
	
	public $name;	
	public $value;
	
	public function __construct($row,$col,$name,$value=null,$len=0) {
		$this->row = $row;
		$this->col = $col;		
		$this->len = $len;
		$this->name = $name;
		$this->value = $value;
	}
	
	public function getValue() {
		if (is_object($this->value)) {
			return $this->value->name;
		} else {
			return $this->value;
		}
		
	}
}