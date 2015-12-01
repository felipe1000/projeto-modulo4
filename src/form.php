<?php

namespace src;

use InterfaceImput;

class Form{

	public function __construct(InterfaceImput $InterfaceImput){

		$this->Campo = $InterfaceImput;
		
	}
	public function Render(){

		echo "<br>".$this->Campo->Imput().": <input type='text'name=".$this->Campo->Imput()."><br>";	
	
	}
}
?>