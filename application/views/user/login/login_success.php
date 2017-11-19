<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="page-header" style="border: none;">
				<h1> Olá, <?php echo $_SESSION['name']; ?></h1>
			</div>
		</div>
    <div class="col-md-6">
        <h2 id="relogio"></h2>
    </div>
	</div><!-- .row -->
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">Hora de registrar seu ponto 0/</div>
			<div class="panel-body">
				<div class="col-sm-3 col-md-3">
    				<div class="thumbnail">
      					<img src="<?=base_url('assets/imagens/bt_entrada.jpg')?>">
      					<center>
      						<div class="caption">
        						<h3>Cheguei!</h3>
        						<p>Olá, que bom que vocÊ chegou! Registre aqui a sua chegada.</p>
        						<form action="<?=base_url('register_hour')?>" method="post" accept-charset="utf-8">
        							<input type="hidden" name="mark_type"  id="mark_type" value="entrada">
        							<input type="submit" class="btn btn-primary entrada" value="Registrar">
        						</form>
        						<div id="obrigado"></div>
      						</div>
      					</center>
    				</div>
  				</div>
  				<div class="col-sm-3 col-md-3">
    				<div class="thumbnail">
      					<img src="<?=base_url('assets/imagens/bt_saida.jpg')?>">
  						<center>
  							<div class="caption">
    							<h3>Tô indo pro almoço!</h3>
    							<p>Está indo almoçar? Então registre o horário que está indo almoçar.</p>
    							<form action="<?=base_url('register_hour')?>" method="post" accept-charset="utf-8">
                      <input type="hidden" name="mark_type"  id="mark_type" value="saida_almoco">
                      <input type="submit" class="btn btn-primary saida" value="Registrar">
                    </form>
                  <div id="obrigado"></div>
  							</div>
  						</center>
    				</div>
  				</div>
          <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
                <img src="<?=base_url('assets/imagens/bt_entrada.jpg')?>">
                <center>
                  <div class="caption">
                    <h3>Voltei do almoço!</h3>
                    <p>Ao voltar do almoço, registre o seu horário de volta.</p>
                    <form action="<?=base_url('register_hour')?>" method="post" accept-charset="utf-8">
                      <input type="hidden" name="mark_type"  id="mark_type" value="entrada_almoco">
                      <input type="submit" class="btn btn-primary entrada" value="Registrar">
                    </form>
                    <div id="obrigado"></div>
                  </div>
                </center>
            </div>
          </div>
           <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
                <img src="<?=base_url('assets/imagens/bt_saida.jpg')?>">
                <center>
                  <div class="caption">
                    <h3>Hora de ir para casa!</h3>
                    <p>Ao término do período de trabalho, registre sua saída.</p>
                    <form action="<?=base_url('register_hour')?>" method="post" accept-charset="utf-8">
                      <input type="hidden" name="mark_type"  id="mark_type" value="saida">
                      <input type="submit" class="btn btn-primary saida" value="Registrar">
                    </form>
                    <div id="obrigado"></div>
                  </div>
                </center>
            </div>
          </div>
			</div>
			<div class="panel-footer">Registre seu ponto de acordo com sua entrada ou saída.</div>
		</div>
	</div>
</div><!-- .container -->