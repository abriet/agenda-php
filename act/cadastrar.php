<?php 
	require_once('../inc/cnx.php');
	//VAI CADASTRAR UM NOVO COMPROMISSO NA AGENDA!
	//Verifica se tem algum formulario enviado via POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Outra validação para confirmar que o formulario existe e se é o formulário de cadastro.
		$form_enviado = @$_POST['cadastrar_compromisso'];
		if (isset($form_enviado)) {
			$nome 	= $_POST['nome'];
			$tel 	= $_POST['tel'];
			$data 	= $_POST['data'];
			$hora 	= $_POST['hora'];
			$status = 0;

			$cad = mysqli_query($cnx,"INSERT INTO tb_agenda(nome, tel, data_agendada, hora_agendada, status) VALUES ('$nome','$tel','$data','$hora','$status')");
			if($cad){
				$msg = "Compromisso Cadastrado!";
				header("Location: ../index.php?p=1&pagina=listar&msg={$msg}");
			}else{
				echo "Houve um erro ao cadastrar um compromisso!";
			}

		}else{
			echo "Não enviou o formulário correto!";
		}
	}else{
		echo "Verifique se enviou o formulário corretamente, utilize o metodo POST!";
	}
 ?>