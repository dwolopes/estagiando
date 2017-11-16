<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()): ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?=validation_errors()?>
				</div>
			</div>
		<?php endif;?>
		<?php if (isset($error)): ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?=$error?>
				</div>
			</div>
		<?php endif;?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Registro de usuário</h1>
			</div>
			<?=form_open()?>
			<div class="form-group">
					<label for="name">Nome</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Seu nome.">
					<p class="help-block">Apenas letras</p>
				</div>
				<div class="form-group">
					<label for="username">Nome de usuário</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Nome de usuário.">
					<p class="help-block">Pelo menos 4 letras e apenas letras e números</p>
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail.">
					<p class="help-block">Endereço de e-mail válido</p>
				</div>
				<div class="form-group">
					<label for="password">Senha</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Crie uma senha.">
					<p class="help-block">Pelo menos 6 letras</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirme sua senha</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Digite novamente sua senha.">
					<p class="help-block">Suas senhas devem ser a mesma</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Registrar">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->