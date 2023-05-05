<?php

function validadoCpf(){
	$cpf = 55078171037;

		$cpf = preg_replace('/[^A-Za-z0-9\-]/', '', $cpf);
		
		$sum = 0;
		$mult = 10;
		
			for ($index = 0; $index < 9; $index++) {
    		$sum += $cpf[$index] * ($mult--); 
    		
}
$resultado = (($sum * 10) % 11);

$quantidadeNum = [9, 10];

foreach ($quantidadeNum as $item) {

    $sum = 0;
    $number_to_multiplicate = $item + 1;
  
    for ($index = 0; $index < $item; $index++) {

        $sum += $cpf[$index] * ($number_to_multiplicate--);
  
    }

    $resultado = (($sum * 10) % 11);

}
if ($cpf[$item] != $resultado) {
	return false;
};
	return true;
}

var_dump(validadoCpf());