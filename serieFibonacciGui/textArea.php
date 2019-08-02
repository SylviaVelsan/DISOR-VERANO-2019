<?php
	/**
	 * 
	 */
	class textArea{
		
	//Atributos textArea
	private $nombreTextArea;
	private $columnasTextArea;
	private $filasTextArea;
	private $etiTextArea;
	private $valueTextAreaTextArea;

	    function addTextarea($nombreTextArea, $columnasTextArea='', $filasTextArea='', $label='',$valueTextArea=''){
	        $this->nombreTextArea=$nombreTextArea;
	        $this->row= $filasTextArea;
	        $this->col= $columnasTextArea;
	        $this->valueTextArea = $valueTextArea;
	        $this->label = $label;
	        
	        $this->textarea = "<br><label>".$this->label."</label><br><textarea name='".$this->nombreTextArea."' cols='".$this->col."' rows='".$this->row."' readonly>".$this->valueTextArea."</textarea>";
	        return $this->textarea;
   		}

   		function actualizarValueTextArea($valueTextArea){
   			$this->valueTextArea = $valueTextArea;
   		}
	}
?>