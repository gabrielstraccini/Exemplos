<?php
	include"cabecalho.php";
?>

			
			<h1> Criar objeto carro </h1>
			<form action="instanciarCarro.php" method="post">
				Definir cor do carro:
				<input type="color" name="cor">
				<br />
				<input type="number" name="qtd_porta" step="1" min="1" max="5" placeholder="Quantidade de portas">
				<br />
				<input type="number" name="velocidade_maxima" step="20" min="20" max="500" placeholder="Velocidade maxima...">
				<br />				
				<input type="submit" value="Criar carro">
				
	
		<hr />
	</body>

</html>