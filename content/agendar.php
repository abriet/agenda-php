<div class="row pagina" style="margin: 0 auto; width: 80%;">
	<h1>AGENDAMENTO</h1>
    <form class="col s12" action="act/cadastrar.php" method="post">
      <div class="row">
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome" placeholder="Nome Completo" type="text" class="validate" required>
        </div>
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">phone</i>
          <input name="tel" type="tel" class="validate" placeholder="(11) 99999-9999" required>
        </div>
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">today</i>
          <input name="data" type="date" class="validate" value="<?php echo date("Y-m-d") ?>" readonly>
        </div>
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">av_timer</i>
          <input name="hora" type="time" class="validate" value="<?php echo date("H:i") ?>" readonly>
        </div>
        <div class="input-field col s12">
        	<button class="waves-effect waves-light btn" type="submit" name="cadastrar_compromisso">Agendar</button>
        </div>

      </div>
    </form>

  </div>