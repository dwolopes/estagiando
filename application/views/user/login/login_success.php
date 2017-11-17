<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1> Olá, <?php echo $_SESSION['name']; ?></h1>
			</div>
		</div>
	</div><!-- .row -->
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">Hora de registrar seu ponto 0/</div>
			<div class="panel-body">
				<div class="col-sm-6 col-md-6">
    				<div class="thumbnail">
      					<img src="<?=base_url('assets/imagens/bt_entrada.jpg')?>">
      					<center>
      						<div class="caption">
        						<h3>Registre sua entrada</h3>
        						<p>Entrada ou volta do almoço.</p>
        						<p>
        							<a href="#" class="btn btn-primary" onclick="myFunction()" role="button">Registrar entrada</a>
        							<div class="alert alert-success" id="demo"></div>
        						</p>
      						</div>
      					</center>
    				</div>
  				</div>
  				<div class="col-sm-6 col-md-6">
    				<div class="thumbnail">
      					<img src="<?=base_url('assets/imagens/bt_saida.jpg')?>">
  						<center>
  							<div class="caption">
    							<h3>Registre sua saída</h3>
    							<p>Saída ou saída para almoço.</p>
    							<p>
    								<a href="#" class="btn btn-danger" onclick="myFunction()" role="button">Registrar saída</a>
    								<div class="alert alert-danger" id="demo"></div>
    							</p>
  							</div>
  						</center>
    				</div>
  				</div>
			</div>
			<div class="panel-footer">Registre seu ponto de acordo com sua entrada ou saída</div>
		</div>
	</div>
</div><!-- .container -->