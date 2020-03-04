<?php
	
	class Carro{ /* Por padrão de classes a primeira letra é maiúscula */
		/* LISTA DE ATRIBUTOS */

			public $cor;
			public $qtd_porta;
			public $velocidade_maxima;
			public $velocidade_atual;
		
		
		   
			/* LISTA DE MÉTODOS */
			public function acelerar ($valor_aceleracao, $tempo){  
								
				$this->velocidade_atual = 
					$this->velocidade_atual + $valor_aceleracao * $tempo;
				
			}
			
			
			public function frenagem ($valor_frenagem, $tempo){ 
								
				$this->velocidade_atual = 
					$this->velocidade_atual + $valor_frenagem * $tempo;
				
			}			
			
			
			public function virar ($lado){  /* LISTA DE MÉTODOS */
								
				/* IMPLEMENTAÇÃO */
				
			}			
			
		
		
	}
	
	



?>