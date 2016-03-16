	@extends('template.master')
	@section('contacto')
	<div class="container">
    	<br><br><br>
		<ol class="breadcrumb">
			<li><a href="index.php">Inicio</a></li>
			<li class="active">Contacto</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contactanos</h1>
				</header>
				
				<p>
					Nos encantaría conocer tus comentarios, dudas y aclaraciones, son importantes para mejorar.
				</p>
				<br>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nombre">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Correo electronico">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Telefono">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Escribe tu mensaje aqui..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6 text-right">
								<input class="btn-submit" type="submit" value="Enviar mensaje">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Dirección</h4>
					<address>
						Juan de Dios S/N, Guadalupe, 80220 Culiacán Rosales, Sin.
					</address>
					<h4>Telefono:</h4>
					<address>
						01 667 713 1796
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->
	</div>	<!-- /container -->
</div>
		<section class="container-full top-space">
		<div id="map">
		</div>
		</section>
		<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
		<script src="/js/google-map.js"></script>
@stop
		