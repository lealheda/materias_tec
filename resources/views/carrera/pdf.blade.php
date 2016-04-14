<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PDF Carreras</title>
    <link href="css/stylepdf.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="images/Logo.jpg">
      </div>
      <h1>Instituto tecnológico de culiacán</h1>
      <div id="company" class="clearfix">
        <div>ITCuliacán</div>
        <div>NA</div>
        <div>(000) 999-9999</div>
        <div><a href="mailto:lealheda@gmail.com">lealheda@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> ITCuliacán</div>
        <div><span>ADDRESS</span> </div>
        <div><span>EMAIL</span> <a href="mailto:lealheda@gmail.com">lealheda@gmail.com</a></div>
        <div><span>DATE</span> 2016 </div>
        <div><span>DUE DATE</span> {{ $tmp = "2016"  }}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">ID</th>
            <th class="desc">CARRERAS</th>
            <th class="desc">DESCRIPCION</th>
            <!-- <th>QTY</th>
            <th>TOTAL</th>
            -->
          </tr>
        </thead>
        <tbody>
          @foreach($carreras as $carrera)
          <tr>
            <td class="service">{{ $carrera->id }}</td>
            <td class="desc">{{ $carrera->nombre }} </td>
            <td class="desc">{{ $carrera->descripcion }}</td>
            <!-- <td class="qty">26</td>
            <td class="total">$1,040.00</td>
            -->
         </tr>
         @endforeach
        </tbody>
      </table>
      <div id="notices">
        <div>Nota:</div>
        <div class="notice">Derechos reservados ITC</div>
      </div>
    </main>
    <footer>
      Documento creado por computadora y no es valido sin sello y firma.
    </footer>
  </body>
</html>