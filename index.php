	<?php require_once("inc/header.php"); ?>
		<main>
			<section>
				<?php 
				$page = @$_GET['p'];
				if (isset($page) && $page != "0") {
					$pagina = @$_GET['pagina'];
					if(isset($pagina) && $pagina != ""){
						require_once("content/{$pagina}.php");
					}else{
						header("Location: index.php");
					}
				}else{ ?>
				 <header>
					<h1>Bem Vindo!</h1>
				</header>
			    <p>Esse sistema foi desenvolvido para ajudar você a se programar melhor! Centralizando todas as suas reuniões, almoços importantes, idas ao dentista. Não deixaremos você esquecer os seus compromissos! <b>Todos os seus compromissos são importantes para nós!</b></p>
				<?php } ?>
			</section>
		</main>
	<?php require_once("inc/footer.php"); ?>
