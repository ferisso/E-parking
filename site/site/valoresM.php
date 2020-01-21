<?php 
session_start() ;
include('verificalogin.php');?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/icone.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>E-Parking | Administrador</title>
  <link rel="canonical" href="css/dashboard.css">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none; 
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index3.php"><img src="img/logo.png" alt="logo" height="20px"></a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vagas.html">
                <span data-feather="shopping-cart"></span>
                Vagas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="valoresM.php">
                <span data-feather="users"></span>
                Inserir valores mensais
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="precos.php">
                <span data-feather="bar-chart-2"></span>
                Preços sugeridos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrações
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1>Insirir Valores Mensais</h1>
          <button class="btn btn-sm btn-outline-secondary" id="vaga1" onclick="receberValores()">Receber Valores do E-Parking</button>

        </div>


        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $data = '';
        $sql = 'SELECT * FROM estacionamento ORDER BY vagas DESC LIMIT 1';
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {

          $data =  $row['vagas'];
        }

        $data = trim($data, ",");

        ?>

        <script>
          var aham = document.getElementById("vaga1");

          function receberValores() {
            alert("Recebido com o E-Parking R$: " + <?php echo 10 * $data; ?>)
          }
        </script>



        <div>
          <font color="#c10000">*Caso não tenha valor para certo mês insira 0.</font><br><br>
          <form class="form-signin" method="post" action="regvaloresm.php">

            <input class="form-control" type = "number" placeholder="Janeiro" name="janeiro" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Fevereiro" name="fevereiro" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Março" name="março" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Abril" name="abril" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Maio" name="maio" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Junho" name="junho" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Julho" name="julho" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Agosto" name="agosto" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Setembro" name="setembro" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Outubro" name="outubro" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Novembro" name="novembro" autocomplete="off" required autofocus><br>
            <input class="form-control" type = "number" placeholder="Dezembro" name="dezembro" autocomplete="off" required autofocus><br>


        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_p">Enviar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
        </form>
</body>

</html>