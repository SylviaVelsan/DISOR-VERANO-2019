<?php
	/**
	 * 
	 */
	class numeroPadovan{
		
	private $primerNumero;
    private $segundoNumero;
    private $tercerNumero;
    private $numeroActual;
    private $numeroVecesLlamado;
    private $valor;
    private $valorHexadecimal;
    private $valorBinario;

	function  __construct(){
        $this->valor = 0;
        $this->primerNumero = 1;
        $this->segundoNumero = 1;
        $this->tercerNumero = 1;
        $this->numeroVecesLlamado = 0;
        $this->numeroActual = 0;
     }
        
    public function avanzar(){
        if (($this->numeroVecesLlamado == 0) || ($this->numeroVecesLlamado == 1) || ($this->numeroVecesLlamado == 2)) {
            $this->numeroActual = $this->primerNumero;
        }
        if ($this->numeroVecesLlamado >= 3) {
            $this->numeroActual = $this->segundoNumero + $this->primerNumero;
            $this->primerNumero = $this->segundoNumero;
            $this->segundoNumero = $this->tercerNumero;
            $this->tercerNumero = $this->numeroActual;
        }

        $this->valor = $this->numeroActual;
        $this->numeroVecesLlamado ++;
    }

    public function retroceder(){
        if (($this->numeroVecesLlamado == 0) || ($this->numeroVecesLlamado == 1) || ($this->numeroVecesLlamado == 2)) {
            $this->numeroActual = $this->primerNumero;
        }
        if ($this->numeroVecesLlamado >= 3) {
            $this->numeroActual = $this->segundoNumero + $this->primerNumero;
            $this->primerNumero = $this->segundoNumero;
            $this->segundoNumero = $this->tercerNumero;
            $this->tercerNumero = $this->numeroActual;
        }

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