<?php 

function real ($var){

	$real = number_format($var, 2,',','.');
	return $real;
}

function dolar ($var){

$valor = str_replace("." , "" , $var ); // Primeiro tira os pontos
$valor = str_replace("," , "." , $valor); // Depois tira a vírgula

return $valor;

}
function selected( $value, $selected ){
    return $value==$selected ? ' selected="selected"' : '';
}


//Verifica se o CPF informado é valido
function validaCPF($cpf = null) {
 
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    } 
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
	
}


// Valida CNPJ
 function validaCNPJ($cnpj)
{
 $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

 // Valida primeiro dígito verificador
 

 for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
 {
  $soma += $cnpj{$i} * $j;
  $j = ($j == 2) ? 9 : $j - 1;
 }
 $resto = $soma % 11;
 if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
  return false;
 // Valida segundo dígito verificador
 for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
 {
  $soma += $cnpj{$i} * $j;
  $j = ($j == 2) ? 9 : $j - 1;
 }
 $resto = $soma % 11;
 return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
}

// Verifica se é CPF ou CNPJ 
 function validaCPFeCNPJ($var){
        //Remove a porra toda
        $var = str_replace("." , "" , $var ); 
        $var = str_replace("/" , "" , $var); 
        $var = str_replace("-" , "" , $var); 

       $count = strlen($var);

          if ($count == 11){

          $var = validaCPF($var);
          return true;

        } elseif ($count == 14){ 

          $var = validaCNPJ($var); 
          return true;

        } elseif ($count != 11 AND $count != 14){ 

            return false;

        }
 }

?>