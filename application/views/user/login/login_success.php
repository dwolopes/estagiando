<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1> Olá, <?php echo $_SESSION['name']; ?></h1>
				<h2 id="relogio"></h2>
				<div>
					<button onclick="myFunction()">Try it</button>
					<div id="real-clock"></div>


					<p id="demo"></p>
				</div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->