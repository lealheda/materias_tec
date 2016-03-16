	@extends('template.master')
	@section('registro')
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Inicio</a></li>
			<li class="active">Registro</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registro</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Registrar una nueva cuenta</h3>
							<p class="text-center text-muted">Si ya tienes una cuenta, <a href="/login">ingresa aqui</a>.<p> Favor de llenar los datos </p> </p>
							<hr>
							<form type="POST" action="/Itcvolbank/ControllerLogin/nuevoUsuario.php">
								<div class="top-margin">
									<label>Correo electronico <span class="text-danger">*</span></label>
									<input name="correo_electronico" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Usuario<span class="text-danger">*</span></label>
									<input name="Usuario" type="text" class="form-control">
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Contraseña <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirmar contraseña <span class="text-danger">*</span></label>
										<input name='contraseña' type="text" class="form-control">
									</div>
								</div>
								<!--
								<div class="top-margin">
									<label>Tipo de cuenta <span class="text-danger">*</span></label>
									<select name="tipo_usuario" class="form-control">
									    <option value="1">Voluntario</option>
									    <option value="2">Organización</option>
									    <option value="3">Organizador</option>
									</select>
								</div>
								-->
								<hr>
								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox">
											he leído los <a href="/">Términos y condiciones</a>
										</label>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn-action" type="submit">Registrar</button>
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
