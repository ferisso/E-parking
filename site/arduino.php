<?php
  $urlpassada = $_SERVER['HTTP_REFERER'];
  $urlcerta = "http://192.168.1.150/?on";

  if ($urlpassada === $urlcerta) {
    header('location: catraca.php');
  } else {
    header('location: catracasaida.php');
}
?>
