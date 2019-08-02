<?php
	/**
	 * 
	 */
	class numeroUlam{
		private $primerNumero;
		private $segundoNumero;
		private $numeroActual;
		private $valor;
		private $numeroVecesLlamado;
		
		function __construct(){
			$this->primerNumero = 1;
			$this->segundoNumero = 2;
			$this->numeroActual = 0;
			$this->valor = 0;
			$this->numeroVecesLlamado = 0;
		}

		public function numero_Ulam($numero){
				if ($numero%2 == 0) {
					$numero = $numero/2;
					$this->numeroActual = $numero;
					return $this->numeroActual;
				}else{
					$numero = $numero*3;
					$numero = $numero+1;
					$this->numeroActual = $numero;
					return $this->numeroActual;
				}
			
		}

		public function avanzar(){
			$this->numeroActual = $this->numero_Ulam($this->numeroVecesLlamado);
			$this->valor = $this->numeroActual;
        	$this->numeroVecesLlamado ++;	
		}

		public function retroceder(){
			$this->numeroActual = $this->numero_Ulam($this->numeroVecesLlamado);
			$this->valor = $this->numeroActual;
        	$this->numeroVecesLlamado --;	
		}

		public function devuelveValor(){
			return $this->valor;
		}

		public function devuelveValorBinario(){
	        $this->valorBinario = decbin($this->valor); 
	        return $this->valorBinario;
	    }

	    public function devuelveValorHexadecimal(){
	        $this->valorHexadecimal = dechex($this->valor); 
	        return $this->valorHexadecimal;
	    }

		public function println(){
			echo "Valor num: ".$this->devuelveValor()."<br>";
	        echo "Valor bin: ".$this->devuelveValorBinario()."<br>";
	        echo "Valor hex: ".$this->devuelveValorHexadecimal()."<br>";
		}
		
	}
?>