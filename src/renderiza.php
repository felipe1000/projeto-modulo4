<?php

class Renderiza{

	public function __construct(Imput $imput){

		$this->imput = $imput;

	} 
	public function Render($cont){

		$campo= $this->imput->Imput($cont);

		echo "<form action='renderiza_submit' method='post'>";
		echo "'{$campo}'";
		echo "<button class='btn'>Enviar</button>";
		echo "</form>";
	}
}
?>