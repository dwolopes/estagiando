<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Marcação realizada com sucesso!</h1>
			</div>
			<p>Marcações realizadas é um sinal de tranquilidade para todos nós :)</p>
		</div>
	</div><!-- .row -->
</div><!-- .container -->

	<?php foreach ($marks as $item) {?>
        <div class="list-group-item clearfix">
          <?php echo $item['data']; ?>
        </div>
	<?php } ?>