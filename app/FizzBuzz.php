<?php

	namespace Caelum\FizzBuzz;

	class FizzBuzz{
	
		public function listaDeItens(){
			
			$arrayDeItens = array();
			
			for($a=1;$a<=100;$a++){
				
				if($a % 5 == 0 && $a % 3 == 0){
					
					array_push($arrayDeItens, "FizzBuzz");
		
				}elseif($a % 3 == 0){
					
					array_push($arrayDeItens, "Fizz");
				
				}elseif($a % 5 == 0){
					
					array_push($arrayDeItens, "Buzz");
					
				}else{
					
					array_push($arrayDeItens, $a);
					
				}
			
			}
			
			return $arrayDeItens;
		}
		 
	
	}
	
	/*
	$fizzBuzz = new FizzBuzz();
	$arrayResultado = $fizzBuzz->listaDeItens();
	
	var_dump($arrayResultado);
	*/
	
	
	
	
?>