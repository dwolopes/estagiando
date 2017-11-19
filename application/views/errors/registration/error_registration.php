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
    <h1>Encontramos um erro na sua marcação!</h1>
    <h3>A marcação que está tentando registrar, já existe! Verifique suas marcações e efetue a marcação correta de acordo com o seu tipo de entrada ou de saída.</h3>
    <a class="btn btn-warning btn-lg" href="<?=base_url('sucess')?>">Volte a página inicial</a>
	</div>
</div><!-- .container -->