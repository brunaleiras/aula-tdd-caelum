<?php

namespace Caelum\FizzBuzz\Test;

use Caelum\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase {

	public function testListaDeItensEhArray(){
	
        $fizzBuzz = new FizzBuzz();
		
        $resultadoListaDeItens = $fizzBuzz->listaDeItens();
	
		$this->assertTrue(is_array($resultadoListaDeItens));
	
	}
	
	public function testListaPossuiCemItens(){
		
		$fizzBuzz = new FizzBuzz();
		
        $resultadoListaDeItens = $fizzBuzz->listaDeItens();
	
		$this->assertEquals(100, sizeof($resultadoListaDeItens));
			
	}
	
   public function testVerficaNumeroDaListaDivisivelPorTres(){
   	
		$fizzBuzz = new FizzBuzz();
		
		$valorEsperadoPorPosicao = 3;

		$resultadoListaDeItens = $fizzBuzz->listaDeItens();
		
		$primeiroItemDivisivelPorTres = $resultadoListaDeItens[--$valorEsperadoPorPosicao];
		
		$this->assertEquals("Fizz", $primeiroItemDivisivelPorTres);	

	
   }
   
   public function testVerficaNumeroDaListaDivisivelPorCinco(){
   	
		$fizzBuzz = new FizzBuzz();
		
		$valorEsperadoPorPosicao = 5;

		$resultadoListaDeItens = $fizzBuzz->listaDeItens();
		
		$primeiroItemDivisivelPorCinco = $resultadoListaDeItens[--$valorEsperadoPorPosicao];
		
		$this->assertEquals("Buzz", $primeiroItemDivisivelPorCinco);	

	
   }  
   
   public function testVerficaNumeroDaListaDivisivelPorTresECinco(){
   	
		$fizzBuzz = new FizzBuzz();
		
		$valorEsperadoPorPosicao = 15;

		$resultadoListaDeItens = $fizzBuzz->listaDeItens();
		
		$primeiroItemDivisivelPorTresECinco = $resultadoListaDeItens[--$valorEsperadoPorPosicao];
		
		$this->assertEquals("FizzBuzz", $primeiroItemDivisivelPorTresECinco);	

	
   }

}
?>