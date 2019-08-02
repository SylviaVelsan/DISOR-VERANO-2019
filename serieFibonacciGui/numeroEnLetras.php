<?php
/**
 * 
 */
class numeroEnLetras{

    private $numeroEnLetras;

    function letras ($num) { 
    $unidad = array ('uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez','once','doce', 'trece','catorce','quince'); 
    $decena = array ('dieci','veinti','treinta','cuarenta','cincuenta','sesenta','setenta','ochenta','noventa'); 
    $centena = array ('ciento','doscientos','trescientos','cuatrocientos','quinientos','seiscientos','setecientos','ochocientos','novecientos'); 
    $millar = array ('mil','dos mil','tres mil','cuatro mil','cinco mil','seis mil','siete mil','ocho mil','nueve mil'); 
      $linea = "";

      $mil = (int) ($num / 1000);
      $cen = (int) ($num / 100) - ($mil*10); 
      $doble = $num - ($mil*1000) - ($cen*100);
      $dec = (int)($num / 10) - ($cen*10) - ($mil*100); 
      $uni = $num - ($dec*10) - ($cen*100) - ($mil*1000); 
        if ($mil > 0){
            $linea = $millar[$mil-1].= ' ';
        }
        if ($cen > 0){
            $linea .= $centena[$cen-1];
        }
        if ($doble > 0) { 
            if ($doble == 20) $linea .= " veinte"; 
            else { 
                if ($doble < 16 ) $linea .= $unidad[$doble-1]; 
                else { 
                    $linea .=' '. $decena[$dec-1]; 
            if ($dec>2 and $uni<>0) $linea .=' y '; 
            if ($uni>0) $linea.=$unidad[$uni-1]; 
            if ($uni==0) $linea.="cero"; 

                } 
            } 
        }  
        $this->numeroEnLetras = $linea;
        return $this->numeroEnLetras;
    } 

    public function devuelveNumeroEnLetras(){
        return $this->numeroEnLetras;
    }

    public function println($value=''){
        echo "Numero en letras: ".$this->devuelveNumeroEnLetras()."";
    }
}
?>