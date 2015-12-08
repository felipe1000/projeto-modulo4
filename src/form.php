<?php

namespace src;

use InterfaceInput;

class Form{

	public function __construct(InterfaceInput $InterfaceInput){

		$this->Campo = $InterfaceInput;
		
	}
	public function Render(){

		echo "<br>".$this->Campo->Input()."<br>";	
	
	}
}
?>