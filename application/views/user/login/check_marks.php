<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Verifique as datas de sua marcação :)</h1>
			</div>
			<strong><p>Marcações realizadas é um sinal de tranquilidade para todos nós :)</p></strong>
		</div>
	</div><!-- .row -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
  				<!-- Default panel contents -->
  				<div class="panel-heading">Histórico de marcações</div>
  				<div class="panel-body">
    				<p>Todas suas marcações realizadas estão representadas na tabela abaixo.</p>
  				</div>
  				<!-- Table -->
  				<table class="table">
  					<thead>
  						<tr>
  							<td><center><strong>Data<strong><center></td>
  							<td><center><strong>Hora<strong><center></td>
  							<td><center><strong>Tipo<strong><center></td>
  						</tr>
  					</thead>
  					<tbody>
  						<?php foreach ($marks as $item) {?>
  							<tr>
  								<td><center><?php echo $item['data']; ?></center></td>
  								<td><center><?php echo $item['hora']; ?></center></td>
  								<td><center><?php echo $item['tipo_marcacao']; ?></center></td>
  							</tr>
  						<?php } ?>
  					</tbody>
  				</table>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->