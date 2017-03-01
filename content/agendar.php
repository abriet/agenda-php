<div class="row pagina" style="margin: 0 auto; width: 80%;">
	<h1>AGENDAMENTO</h1>
    <form class="col s12" action="#" method="post">
      <div class="row">
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nome" placeholder="Nome Completo" type="text" class="validate" required>
        </div>
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">phone</i>
          <input id="tel" type="tel" class="validate" placeholder="(11) 99999-9999" required>
        </div>
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">today</i>
          <input id="data" type="date" class="validate" value="<?php echo date("Y-m-d") ?>" readonly>
        </div>
        <div class="input-field col s12 m12 l6">
          <i class="material-icons prefix">av_timer</i>
          <input id="data" type="time" class="validate" value="<?php echo date("H:i") ?>" readonly>
        </div>
        <div class="input-field col s12">
        	<button class="waves-effect waves-light btn" type="submit">Agendar</button>
        </div>

      </div>
    </form>
  </div>