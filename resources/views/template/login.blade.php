	@extends('template.master')
	@section('login')
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Inicio</a></li>
			<li class="active">Acesso a usuario</li>
		</ol>

		<div class="row">
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inicia sesión</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Ingresa en tu cuenta</h3>
							<p class="text-center text-muted">No tiene una cuenta, <a href="/registro">Registrate aqui</a>. </p>
							<hr>

							<form type="POST" action="/Itcvolbank/ControllerLogin/login.php">
								<div class="top-margin">
									<label>Usuario <span class="text-danger">*</span></label>
									<input name="usuario" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Contraseña <span class="text-danger">*</span></label>
									<input name="contrasena" type="password" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Olvidaste tu contraseña?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn-action" type="submit">Inicia sesión</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
@stop


	