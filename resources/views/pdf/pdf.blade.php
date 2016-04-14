<html>
  <head>
    <title>Pdf</title>
  </head>
  <body>
    <img src="images/Logo.jpg">
  <div class="tabla">
    <table border="0" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th class="no">Id</th>
          <th class="desc">Nombre</th>
          <th class="unit">Descripcion</th>
        </tr>
      </thead>
      <tbody>
        @foreach($carreras as $carrera)  
        <tr>
          <td class="no">{{ $carrera->id }}</td>
          <td class="desc">{{ $carrera->nombre }}</td>
          <td class="unit">{{ $carrera->descripcion }}</td>
        </tr>
    @endforeach
    </tbody>
    </div>
  </body>
</html>

    
