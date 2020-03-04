<?php
	include "cabecalho.php";
	include "ClassCarro.php";	
?>

<?php
	
	include"ClassCarro.php";
	
	$c = new Carro();
	
	$c -> cor = $_POST ["cor"];
	$c -> qtd_porta = $_POST ["qtd_porta"];
	$c -> velocidade_maxima = $_POST ["velocidade_maxima"];
	$c -> velocidade_atual = 0;
	
	$_SESSION["Carro"][] = $c;
		
	
?>

Carro inserido com sucesso.

</body>
</html>