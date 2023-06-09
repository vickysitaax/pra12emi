
echo '<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
     
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Cálcular la densidad de la Tierra</h2>
        <p>Descripción:</p>
        <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
        a) ¿Cuál es la densidad promedio de la Tierra?<br>
        b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, cuál sería su densidad?<br>
        c) Si el radio de la Tierra y su masa se redujera a una tercera parte, ¿su densidad sería la misma? ¿por qué?</p>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Densidad = Masa/Volumen<br>
        Volumen=(4/3)pi*r*r*r
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        m= 5.97E24 Kg. <br>
        r= 6378 Km.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <?php
            $mT = 81;
            $mL = 1;
            $mS = 332946 * $mT;
            $d1 = 1;
            $d0 = 400 * $d1;

            $razon = ($mT * $mS * pow($d1, 2)) / ($mL * pow($d0, 2));
        ?>
        <p>a) La densidad de la Tierra es:</p>
        densidad = 5.97E24 Kg/volumen (m) <br>
        volumen= (4/3)*pi*(6378000)*(6378000)*(6378000)</p>
        <button onclick="document.getElementById('resultadoA').innerHTML = '<?php echo $razon; ?>';">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
</footer> 
</section>
</body>
</html>









        <p>a) La densidad de la Tierra es:<br>
          densidad = 5.97E24 Kg/volumen (m) <br>
          volumen= (4/3)*pi*(6378000)*(6378000)*(6378000)</p>
        <p>b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiara:</p>
        <p>La nueva densidad sería:</p>
        <p>densidad = 5.97E24 Kg / volumen_b</p>
        <p>volumen_b = (4/3) * pi * (6378000/3) * (6378000/3) * (6378000/3)</p>
        <p>c) Si el radio de la Tierra y su masa se redujeran a una tercera parte:</p>
        <p>La nueva densidad sería:</p>
        <p>densidad = masa_c / volumen_c</p>
        <p>volumen_c = (4/3) * pi * (6378000/3) * (6378000/3) * (6378000/3)</p>?>
      </section>';

function calcula_densidad(){
  $PI=3.141592;
  $masa= 5.97E24;
  $radio= 6378e3;
  $volumen= (4/3)*$PI*$radio*$radio*$radio;
  $densidad= $masa/$volumen;
  return $densidad;
}

function calcula_densidad_b(){
  $PI=3.141592;
  $masa= 5.97E24;
  $radio_b= 6378e3/3;
  $volumen_b= (4/3)*$PI*$radio_b*$radio_b*$radio_b;
  $densidad_b= $masa/$volumen_b;
  return $densidad_b;
}

function calcula_densidad_c(){
  $PI=3.141592;
  $masa_c= 5.97E24/3;
  $radio_c= 6378e3/3;
  $volumen_c= (4/3)*$PI*$radio_c*$radio_c*$radio_c;
  $densidad_c= $masa_c/$volumen_c;
  return $densidad_c;
}

echo '<section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>';
echo '<h1> a) resultado: densidad = ' . calcula_densidad() . ' kg/(metro cubico)</h1>';

echo '<p>b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiara:</p>
        <div id="resultadoB"></div>';
echo '<h1> b) resultado: densidad = ' . calcula_densidad_b() . ' kg/(metro cubico)</h1>';

echo '<p>c) Si el radio de la Tierra y su masa se redujeran a una tercera parte:</p>
        <div id="resultadoC"></div>';
echo '<h1> c) resultado: densidad = ' . calcula_densidad_c() . ' kg/(metro cubico)</h1>';

echo '</section>
      <footer class="pie">
        Gabriel Luna Bueno 20091122
      </footer>
    </section>
  </section>
</body>
</html>';
?>
