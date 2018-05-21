<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<title>Iglu | Tecnologias</title>
	<link rel="icon" type="img/png" href="imagens/logo.png">
</head>
<body>
	<div class="parallax"></div>
	<div class="container-flex">
		<nav class="menu">
			<div class="container">
				<div class="itens">
					<ol>
						<li><b>Home</b></li>
						<li><b>Serviços</b></li>
						<li><b>Produtos</b></li>
					</ol>
				</div>
				<div class="input">
					<input type="search" name="busca" placeholder="Pesquisar" class="busca">
				</div>
			</div>
		</nav>
		<div class="container">
			<br>
			<div class="row">
				<div class="col-md-6">
					<h1>Um pouco da nossa história</h1>
					<p>
						Em Maio de 2018, dois estudantes de uma escola pública de Fortaleza tiveram a ideia de fundar um empresa de tecnologias, juntaram-se com mais dois colegas e pensaram em um nome, que inicialmente seria DevCave, porem com um tempo mudou para Iglu Tecnologias. Basicamente pensaram em uma empresa para desenvolvimento de Aplicações Web e Desktop, utilizando as linguagens de programação PHP e Java.
					</p>
					<h1>Porquê Iglu?</h1>
					<p>
						O nome Iglu, foi pensado para fazer referencia ao Desenho animado, "Os Pinguins de Madagascar", pelo fato de ter na época apenas 4 integrantes. Seria uma espécie de casa dos Pinguins.
					</p>
					<h1>Sobre a empresa</h1>
					<p>
						Aqui na Iglu, você poderá criar seu modelo de sistema, para gerenciar ou expandir seus negócios. Você pode contar com o empenho de nossos Pinguins para prepara sempre o melhor pra você.
					</p>
				</div>
				<div class="col-md-6">
					<div class="formulario">
						<h1>Fale Conosco:</h1>
						<form method="post" action="php/guarda.php">
							<label><b>Nome</b></label>
							<input type="text" name="nome" placeholder="Nome" class="form-control">
							<br>
							<label><b>E-mail</b></label>
							<input type="email" name="email" placeholder="E-mail" class="form-control">
							<br>
							<label><b>Descrição<b></label>
							<br>
							<textarea name="desejo">Digite aqui uma descrição sobre o que você deseja falar conosco</textarea>
							<br>	
							<button name="enviar" class="btn btn-info btn-block">Enviar</button>	
						</form>	
					</div>				
				</div>
			</div>
		</div>
		<!--conteudo-->
	</div>
	<!--container-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					 <img src="imagens/logo.png" class="icon">
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
<!--A melhor Maneira de prever o futuro, é criá-lo - Abraham Lincoln-->