<?php
	/**
	 * 
	 */
	class numeroCapicua
	{
		private $numeroActual;
		private $cociente;
		private $numeroInverso;
		private $esCapicua;

		function __construct(){
			$this->numeroCapicua = 0;
			$this->numeroInverso = 0;
			$this->esCapicua = "No es capicua";
		}

		public function numero_capicua($valorleido){
			$this->cociente = $valorleido;
			while ($this->cociente != 0){
				$resto = $this->cociente % 10;
				$this->numeroInverso = $this->numeroInverso * 10 + $resto;
				$this->cociente = (int)($this->cociente / 10);
			}
		if ($valorleido == $this->numeroInverso)
			$this->esCapicua = "Si es capicua";
			//echo "El n&uacute;mero $valorleido Es capic&uacute;a<br />";
		else
			$this->esCapicua = "No es capicua";
			//echo "El n&uacute;mero $valorleido NO es capic&uacute;a<br />";
		}

		public function devuelveValor(){
			return $this->esCapicua;
		}

		public function println(){
			echo "El numero: ".$this->devuelveValor()."";
		}
	}
?>