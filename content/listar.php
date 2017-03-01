<div class="row-fluid">
	<h1>LISTAR AGENDAMENTOS</h1>
	<?php require_once("inc/cnx.php"); ?>
	<table class="responsive-table tabela">
        <thead>
          <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Data</th>
              <th>Hora</th>
              <th>Ação</th>
          </tr>
        </thead>
        <tbody>
		
		<?php 
			$query = mysqli_query($cnx, "SELECT *, date_format(hora_agendada, '%H:%i') as 'hora' FROM tb_agenda");
			while ($result = mysqli_fetch_array($query)) {
		 ?>		
          <tr>
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['nome'] ?></td>
            <td><?php echo $result['tel'] ?></td>
            <td><?php echo implode('/', array_reverse(explode('-', $result['data_agendada']))) ?></td>
            <td><?php echo $result['hora'] ?></td>
            <td><i class="material-icons">mode_edit</i></td>	
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>