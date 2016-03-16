<!DOCTYPE html>
<html>
    <head> 
    <title>@yield('title','Default') | ITCULIACAN</title>
    <meta charset="utf-8">
          <meta name="viewport"    content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author"      content="Leal Hernández Daniel">
          <title>Laravel</title>
          <link rel="shortcut icon" href="/images/itc.png">
          <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
           <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
           <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
          <link href="{{ asset('/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
          <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css">
          <link href="{{ asset('/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/"><img src="/images/Logo2.png" alt="ITCuliacan"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="/">Inicio</a></li>
          <li><a href="/about">Acerca de</a></li>
          <li><a href="/contacto">Contacto</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="{{ route('carreras.index') }}">Carreras</a></li>
                <li class="active"><a href="/">Materias</a></li>
                <li class="active"><a href="/">Unidades</a></li>
              </ul>
            </li>
              <li><a class="btn" href="/"> Salir </a></li>
              <li><a class="btn" href="/login"> Inicia sesión / Registro </a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <!-- /.navbar --> <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/"><img src="/images/Logo2.png" alt="ITCuliacan"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="/">Inicio</a></li>
          <li><a href="/about">Acerca de</a></li>
          <li><a href="/contacto">Contacto</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li class="active"><a href="{{ route('carreras.index') }}">Carreras</a></li>
                    <li class="active"><a href="/">Materias</a></li>
                <li class="active"><a href="/">Unidades</a></li>
              </ul>
            </li>
              <li><a class="btn" href="/"> Salir </a></li>
              <li><a class="btn" href="/login"> Inicia sesión / Registro </a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <!-- /.navbar -->
   <br><br><br><br>
    @include('flash::message')
    @yield('home')
    @yield('about')
    @yield('contacto')
    @yield('login')
    @include('flash::message')
    @yield('registro')
    @yield('content')
    
    <footer id="footer" class="top-space">
    <div class="footer1">
      <div class="container">
        <div class="row">
          <div class="col-md-3 widget">
            <h3 class="widget-title">Contacto</h3>
            <div class="widget-body">
              <p>+52 <br>
                <a href="mailto:#">lealheda@gmail.com</a><br>
                <br>
                Juan de Dios S/N, Guadalupe, 80220 Culiacán Rosales, Sin.
              </p>  
            </div>
          </div>

          <div class="col-md-3 widget">
            <h3 class="widget-title">Siguenos en las diferentes redes sociales</h3>
            <div class="widget-body">
              <p class="follow-me-icons">
                
              </p>  
            </div>
          </div>

          <div class="col-md-6 widget">
            <h3 class="widget-title">Frases</h3>
            <div class="widget-body">
              <p>Aunque haya religiones diferentes, debido a distintas culturas, lo importante es que todas coincidan en su objetivo principal: ser buena persona y ayudar a los demás.
                Dalai Lama
              </p>
              <p>Ayudar al que lo necesita no sólo es parte del deber, sino de la felicidad.
                José Martí (1853-1895) Político y escritor cubano.
              </p>
              <p>
                Uno de los secretos profundos de la vida es que lo único que merece la pena hacer es lo que hacemos por los demás.
                Lewis Carroll (1832-1898) Matemático y escritor británico.
              </p>
              
            </div>
          </div>

        </div> <!-- /row of widgets -->
      </div>
    </div>

    <div class="footer2">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="simplenav">
                <a href="/">Inicio</a> | 
                <a href="/about">Acerca de</a> |
                <a href="/contacto">Contacto</a> |
                <b><a href="/registro">Registrate</a></b>
              </p>
            </div>
          </div>

          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="text-right">
                Copyright &copy; 2016, ITCuliacan. Diseñado por <a href="#" rel="designer">Leal Hernández Daniel</a> 
              </p>
            </div>
          </div>

        </div> <!-- /row of widgets -->
      </div>
    </div>
  </footer> 

  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="/js/headroom.min.js"></script>
  <script src="/js/jQuery.headroom.min.js"></script>
  <script src="/js/template.js"></script>
  </body>
</html>
