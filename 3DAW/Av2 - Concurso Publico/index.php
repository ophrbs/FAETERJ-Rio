<!DOCTYPE html>

<head>
	<title>av2 3daw</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<nav>
			<a href="index.php" aria-current="page">Inicio</a>
			<a href="?page=incluir_candidato">Incluir Candidato</a>
			<a href="?page=incluir_fiscal">Incluir Fiscal</a>
			<a href="?page=listar_candidatos">Listar Candidatos</a>
			<a href="?page=listar_fiscais">Listar Fiscais</a>
			<p>Para alterar a sala de um candidato, acesse a lista de candidatos</p>
		</nav>
	</header>
	<main>
		<?php
		include("config.php");
		switch (@$_REQUEST["page"]) {
			case "incluir_candidato":
				include("incluir_candidato.php");
				break;
			case "incluir_fiscal";
				include("incluir_fiscal.php");
				break;
			case "alterar_sala";
				include("alterar_sala.php");
				break;
			case "listar_candidatos";
				include("listar_candidatos.php");
				break;
			case "listar_fiscais";
				include("listar_fiscais.php");
				break;
			case "salvar";
				include("salvar.php");
				break;
			default:
				print "
				<h1> AV2 3DAW </h1>
		<ol>
		<li>Criar as funcionalidades de Listar candidatos em ordem de nome, por sala de prova, colocando 50 candidatos em cada sala. O candidato possui nome, cpf, identidade,
		email, cargo pretendido e sala de prova.</1i>
		<li>Criar funcionalidade de Incluir fiscal de prova que irá trabalhar em cada sala, alocando dois fiscais por sala. Fiscal possui nome, cpf, sala de prova.</1i>
		<li>Criar funcionalidade de alterar a sala de prova de um candidato.</li>
		<li>Os dados devem ser validados no Javascript e no php.</li>
		<li>Os dados devem ser armazenados no banco de dados Mysql.</li>
		</ol>";
		}
		?>
	</main>
</body>

</html>