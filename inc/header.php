<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema de Agenda em PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<?php require_once("link.php") ?>
</head>
<body>
	<div class="container">
		<header id="header" class="header">
			<a href="index.php" title="HOME"><div class="logo">
				<img src="http://2.bp.blogspot.com/-BLs5MduSvJA/TxYl5Pl8mkI/AAAAAAAAAPk/5v6B2hW7Jrc/s400/agenda.png">
				<h1>Agenda 2017</h1>
			</div></a>
			<nav>
				<ul class="menu">
					<li><a href="?p=1&pagina=agendar" title="Agendar um horário"><i class="material-icons">add</i>Agendar Horário</a></li>
					<li><a href="?p=1&pagina=listar" title="Listar Horários"><i class="material-icons">list</i> Listar Horários</a></li>
					<li><a href="#" title="Alterar horários cadastrados"><i class="material-icons">mode_edit</i> Alterar Horários</a></li>
					<li><a href="?p=1&pagina=configuracao" title="Configurações da Agenda"><i class="material-icons">settings</i> Configurações</a></li>
				</ul>
				<ul class="menu-mobile">
					<li><a href="?p=1&pagina=agendar" title="Agendar um horário"><i class="material-icons">add</i></a></li>
					<li><a href="?p=1&pagina=listar" title="Listar Horários"><i class="material-icons">list</i></a></li>
					<li><a href="#" title="Alterar horários cadastrados"><i class="material-icons">mode_edit</i></a></li>
					<li><a href="?p=1&pagina=configuracao" title="Configurações da Agenda"><i class="material-icons">settings</i></a></li>
				</ul>
			</nav>
		</header><!-- /header -->