<?php
/**
 * 
 */
class Input
{
	//Atributos Input
	private $tipoInput;
	private $nombreInput;
	private $etiInput;
	private $valueInput;
    private $onClick;
	private $input;

	function addInput($tipoInput, $nombreInput, $etiInput='',$valueTextAreaInput='',$onClick){
        $this->tipoInput = $tipoInput;
        $this->nombreInput = $nombreInput;
        $this->etiInput= $etiInput;
        $this->valueTextAreaInput = $valueTextAreaInput;
        $this->onClick = $onClick;
 
        if($this->tipoInput == "submit" || $this->tipoInput=="reset"){
            $this->input = "<label></label>";
        }
        else{
            $this->input= "<label>".$this->etiInput."</label><br>";
        }
        
        $this->input .= "<input type='".$this->tipoInput."' name ='".$this->nombreInput."' value='".$this->valueTextAreaInput."' id ='".$this->nombreInput." onClick='".$this->onClick."'/>";
        
        return $this->input;
    }

    function actualizarOnclick($onClick){
            $this->onClick = $onClick;
        }

}
?>