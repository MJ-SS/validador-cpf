<?php

function validadoCpf(){
	$cpf = 55078171037;

		$cpf = preg_replace('/[^A-Za-z0-9\-]/', '', $cpf);
		
		$sum = 0;
		$mult = 10;
		
			