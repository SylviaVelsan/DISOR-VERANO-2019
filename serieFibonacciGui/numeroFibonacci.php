<?php
	/**
	 * 
	 */
	class numeroFibonacci{
		
	private $terminoAnterior;
    private $terminoActual;
    private $numeroVecesActualizado;
    private $valor;
    private $valorHexadecimal;
    private $valorBinario;

	function  __construct(){
        $this->valor = 0;
        $this->numeroVecesActualizado = 0;
        $this->terminoAnterior =0;
        $this->terminoActual = 0;
     }
        
    public function avanzar(){
        if($this->numeroVecesActualizado ==0){
            $this->terminoAnterior = 0;
            $this->terminoActual = 1;
        }
        if($this->numeroVecesActualizado == 1){
            $this->terminoAnterior = 1;
            $this->terminoActual = 1;
        }
        if($this->numeroVecesActualizado >= 2){
            $respaldoTerminoAnterior = $this->terminoAnterior;
            $this->terminoAnterior = $this->terminoActual;
            $this->terminoActual = $this->terminoAnterior + $respaldoTerminoAnterior;
        }
        $this->valor = $this->terminoActual;
        $this->numeroVecesActualizado ++;
    }

    public function retroceder(){
        if($this->numeroVecesActualizado ==0){
            $this->terminoAnterior = 0;
            $this->terminoActual = 1;
        }
        if($this->numeroVecesActualizado == 1){
            $this->terminoAnterior = 1;
            $this->terminoActual = 1;
        }
        if($this->numeroVecesActualizado >= 2){
            $respaldoTerminoAnterior = $this->terminoAnterior;
            $this->terminoAnterior = $this->terminoActual;
            $this->terminoActual = $this->terminoAnterior + $respaldoTerminoAnterior;
        }
        $this->valor = $this->terminoActual;
        $this->numeroVecesActualizado --;
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