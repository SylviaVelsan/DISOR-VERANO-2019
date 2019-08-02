	<?php
	include 'Input.php';
	include 'textArea.php';
	include 'numeroFibonacci.php';
	include 'numeroPadovan.php';
	include 'numeroUlam.php';
	include 'numeroEnLetras.php';
	include 'numeroCapicua.php';
	/**
	 * 
	 */
	class pantallaPrincipal
	{
		private $numeroFibonacci;
		private $numeroEnLetras;
		private $Input;
		private $agregarBotonIncrementar;
		private $agregarBotonDecrementar;
		private $agregarTextAreaBinariosFibonacci;
		private $agregarTextAreaHexadecimalFibonacci;
		private $agregarTextAreaNumeroLetrasFibonacci;
		private $valueTextAreaBinariosFibonacci;
		private $valueTextAreaHexadecimalFibonacci;
		private $valueTextAreaNumeroLetrasFibonacci;
		private $numeroCapicuaFibonacci;
		private $numeroPadovan;
		private $agregarTextAreaBinariosPadovan;
		private $agregarTextAreaHexadecimalPadovan;
		private $agregarTextAreaNumeroLetrasPadovan;
		private $valueTextAreaBinariosPadovan;
		private $valueTextAreaHexadecimalPadovan;
		private $valueTextAreaNumeroLetrasPadovan;
		private $numeroCapicuaPadovan;
		private $numeroUlam;
		private $agregarTextAreaBinariosUlam;
		private $agregarTextAreaHexadecimalUlam;
		private $agregarTextAreaNumeroLetrasUlam;
		private $valueTextAreaBinariosUlam;
		private $valueTextAreaHexadecimalUlam;
		private $valueTextAreaNumeroLetrasUlam;
		private $numeroCapicuaUlam;

		function __construct(){
			$this->Input = new Input();
			$this->textArea = new textArea();
			$this->numeroFibonacci = new numeroFibonacci();
			$this->numeroEnLetras = new numeroEnLetras();
			$this->numeroPadovan = new numeroPadovan();
			$this->numeroUlam = new numeroUlam();
			$this->numeroCapicua = new numeroCapicua();
			$this->construirFormularioFibonacci();
			$this->construirFormularioPadovan();
			$this->construirFormularioUlam();
			$this->println();
		}

		public function construirFormularioFibonacci(){
			$agregarBotonIncrementar = $this->Input->addInput("submit","botonIncrementarNumeroFibonacci","botonIncrementarNumeroFibonacci","Incrementar",$this->incrementar());
			$this->agregarBotonIncrementar = $agregarBotonIncrementar;

			$agregarBotonDecrementar = $this->Input->addInput("submit","botonDecrementarNumeroFibonacci","botonDecrementarNumeroFibonacci","Decrementar",$this->decrementar());
			$this->agregarBotonDecrementar = $agregarBotonDecrementar;
	
			$agregarTextAreaBinariosFibonacci = $this->textArea->addTextArea("txtMostrarFibonacciBinario",20, 1, "Numero fibonacci en binario",$this->valueTextAreaBinariosFibonacci);
			$this->agregarTextAreaBinariosFibonacci = $agregarTextAreaBinariosFibonacci;

			$agregarTextAreaHexadecimalFibonacci = $this->textArea->addTextArea("txtMostrarFibonacciHexadecimal",20, 1, "Numero fibonacci en hexadecimal",$this->valueTextAreaHexadecimalFibonacci);
			$this->agregarTextAreaHexadecimalFibonacci = $agregarTextAreaHexadecimalFibonacci;

			$agregarTextAreaNumeroLetrasFibonacci = $this->textArea->addTextArea("txtMostrarFibonacciEnLetras",20, 1, "Numero fibonacci en letras",$this->valueTextAreaNumeroLetrasFibonacci);
			$this->agregarTextAreaNumeroLetrasFibonacci = $agregarTextAreaNumeroLetrasFibonacci;
			$this->numeroCapicuaFibonacci = $this->numeroCapicua->numero_capicua($this->numeroFibonacci->devuelveValor());

			$this->numeroCapicuaFibonacci = $this->numeroCapicua->devuelveValor($this->numeroCapicuaFibonacci);

		}


		public function construirFormularioPadovan(){
			$agregarTextAreaBinariosPadovan = $this->textArea->addTextArea("txtMostrarPadovanBinario",20, 1, "Numero padovan en binario",$this->valueTextAreaBinariosPadovan);
			$this->agregarTextAreaBinariosPadovan = $agregarTextAreaBinariosPadovan;

			$agregarTextAreaHexadecimalPadovan = $this->textArea->addTextArea("txtMostrarPadovanHexadecimal",20, 1, "Numero padovan en hexadecimal",$this->valueTextAreaHexadecimalPadovan);
			$this->agregarTextAreaHexadecimalPadovan = $agregarTextAreaHexadecimalPadovan;

			$agregarTextAreaNumeroLetrasPadovan = $this->textArea->addTextArea("txtMostrarPadovanEnLetras",20, 1, "Numero padovan en letras",$this->valueTextAreaNumeroLetrasPadovan);
			$this->agregarTextAreaNumeroLetrasPadovan = $agregarTextAreaNumeroLetrasPadovan;
			$this->numeroCapicuaPadovan = $this->numeroCapicua->numero_capicua($this->numeroPadovan->devuelveValor());

			$this->numeroCapicuaPadovan = $this->numeroCapicua->devuelveValor($this->numeroCapicuaPadovan);

		}
		public function construirFormularioUlam(){
			$agregarTextAreaBinariosUlam = $this->textArea->addTextArea("txtMostrarUlamBinario",20, 1, "Numero ulam en binario",$this->valueTextAreaBinariosUlam);
			$this->agregarTextAreaBinariosUlam = $agregarTextAreaBinariosUlam;

			$agregarTextAreaHexadecimalUlam = $this->textArea->addTextArea("txtMostrarUlamHexadecimal",20, 1, "Numero ulam en hexadecimal",$this->valueTextAreaHexadecimalUlam);
			$this->agregarTextAreaHexadecimalUlam = $agregarTextAreaHexadecimalUlam;

			$agregarTextAreaNumeroLetrasUlam = $this->textArea->addTextArea("txtMostrarUlamEnLetras",20, 1, "Numero ulam en letras",$this->valueTextAreaNumeroLetrasUlam);
			$this->agregarTextAreaNumeroLetrasUlam = $agregarTextAreaNumeroLetrasUlam;

			$this->numeroCapicuaUlam = $this->numeroCapicua->numero_capicua($this->numeroUlam->devuelveValor());

			$this->numeroCapicuaUlam = $this->numeroCapicua->devuelveValor($this->numeroCapicuaUlam);
		}

		public function decrementar(){
			#Numeros fibonacci
			$this->numeroFibonacci->retroceder();
			$this->valueTextAreaBinariosFibonacci = $this->numeroFibonacci->devuelveValorBinario();
			$this->valueTextAreaHexadecimalFibonacci = $this->numeroFibonacci->devuelveValorHexadecimal();
			$this->valueTextAreaNumeroLetrasFibonacci = $this->numeroEnLetras->letras($this->numeroFibonacci->devuelveValor());
			#Numeros Padovan
			$this->numeroPadovan->retroceder();
			$this->valueTextAreaBinariosPadovan = $this->numeroPadovan->devuelveValorBinario();
			$this->valueTextAreaHexadecimalPadovan = $this->numeroPadovan->devuelveValorHexadecimal();
			$this->valueTextAreaNumeroLetrasPadovan = $this->numeroEnLetras->letras($this->numeroPadovan->devuelveValor());
			#Numeros Ulam
			$this->numeroUlam->retroceder();
			$this->valueTextAreaBinariosUlam = $this->numeroUlam->devuelveValorBinario();
			$this->valueTextAreaHexadecimalUlam = $this->numeroUlam->devuelveValorHexadecimal();
			$this->valueTextAreaNumeroLetrasUlam = $this->numeroEnLetras->letras($this->numeroUlam->devuelveValor());
		}

		public function incrementar(){
			#Numeros Fibonacci
			$this->numeroFibonacci->avanzar();
			$this->valueTextAreaBinariosFibonacci = $this->numeroFibonacci->devuelveValorBinario();
			$this->valueTextAreaHexadecimalFibonacci = $this->numeroFibonacci->devuelveValorHexadecimal();
			$this->valueTextAreaNumeroLetrasFibonacci = $this->numeroEnLetras->letras($this->numeroFibonacci->devuelveValor());
			#Numeros Padovan
			$this->numeroPadovan->avanzar();
			$this->valueTextAreaBinariosPadovan = $this->numeroPadovan->devuelveValorBinario();
			$this->valueTextAreaHexadecimalPadovan = $this->numeroPadovan->devuelveValorHexadecimal();
			$this->valueTextAreaNumeroLetrasPadovan = $this->numeroEnLetras->letras($this->numeroPadovan->devuelveValor());
			#Numeros Ulam
			$this->numeroUlam->avanzar();
			$this->valueTextAreaBinariosUlam = $this->numeroUlam->devuelveValorBinario();
			$this->valueTextAreaHexadecimalUlam = $this->numeroUlam->devuelveValorHexadecimal();
			$this->valueTextAreaNumeroLetrasUlam = $this->numeroEnLetras->letras($this->numeroUlam->devuelveValor());
		}
		public function println(){
			echo $this->agregarBotonIncrementar;
			echo $this->agregarBotonDecrementar;
			echo "<br><b>Numero Fibonacci </b><br>";
			echo $this->numeroCapicuaFibonacci;
			echo $this->agregarTextAreaBinariosFibonacci;
			echo $this->agregarTextAreaHexadecimalFibonacci;
			echo $this->agregarTextAreaNumeroLetrasFibonacci;
			echo "<br><b>Numero Padovan </b><br>";
			echo $this->numeroCapicuaPadovan;
			echo $this->agregarTextAreaBinariosPadovan;
			echo $this->agregarTextAreaHexadecimalPadovan;
			echo $this->agregarTextAreaNumeroLetrasPadovan;
			echo "<br><b>Numero Ulam </b><br>";
			echo $this->numeroCapicuaUlam;
			echo $this->agregarTextAreaBinariosUlam;
			echo $this->agregarTextAreaHexadecimalUlam;
			echo $this->agregarTextAreaNumeroLetrasUlam;
		}
	}

	$pantallaPrincipal = new pantallaPrincipal();
?>