<?php 
include('verificadm.php');
include('banco.php');
 ?>
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
        <a class="nav-link" href="logout.php"><?php echo $_SESSION['adm']; ?></a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">

                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vagas.html">

                Vagas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="valoresM.php">

                Inserir valores mensais
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="precos.php">

                Preços sugeridos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">

                Integrações
              </a>
            </li>
          </ul>

        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary">
              <span data-feather="calendar"></span>
              Esse ano
            </button>
          </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        <h3>Clientes</h3>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>USUARIO</th>
              <th>E-MAIL</th>

            </tr>
          </thead>
          <?php
          $sql = 'SELECT * from users';
          if (mysqli_query($conn, $sql)) {
            echo "";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          $count = 1;
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) { ?>
              <tbody>
                <tr>
                  <th>
                    <?php echo $row['id']; ?>
                  </th>
                  <td>
                    <?php echo $row['username']; ?>
                  </td>
                  <td>
                    <?php echo $row['email']; ?>
                  </td>
                </tr>
              </tbody>
              <?php
              $count++;
            }
          } else {
            echo '0 results';
          }
          ?>
        </table>
        <br>




        <h3> Total Ganho </h3>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Numero de Entradas</th>
              <th>Ganho com o total de entradas</th>
            </tr>
          </thead>
          <?php
          
          $sql = 'SELECT * FROM estacionamento ORDER BY vagas DESC LIMIT 1';

          if (mysqli_query($conn, $sql)) {
            echo "";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          $count = 1;
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) { ?>
              <tbody>
                <tr>
                  <th>
                    <?php echo "<font color ='#007bff'>". $row['vagas']."</strong></font>"; ?>
                  </th>
                  <td>
                    <?php echo "<strong><font color='#29b505'>R$: ";
                    echo 10 * $row['vagas']."</font></strong>"; ?>
                  </td>
                </tr>
              </tbody>

              <?php
              $count++;
            }
          } else {
            echo '0 results';
          }
          ?>
        </table>

        <h3> Vagas disponiveis </h3>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Numero de vagas ocupadas</th>
              <th>Numero de vagas disponiveis</th>
            </tr>
          </thead>
          <?php
          $sql = 'SELECT count(*) FROM estacionamento3';


          if (mysqli_query($conn, $sql)) {
            echo "";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          $count = 1;
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {
              if ($row['count(*)'] > 4) {
                $row['count(*)'] = 4;
              }
              ?>
              <tbody>
                <tr>
                  <th>
                    <?php echo "<strong><font color = '#c20000'>".$row['count(*)']."</font>"; ?>
                  </th>
                  <td>
                    <?php
                    echo "<strong><font color = '#29b505'>";
                    echo  4 - $row['count(*)']; ?>
                  </td>
                </tr>
              </tbody>

              <?php
              $count++;
            }
          } else {
            echo '0 results';
          }
          ?>
        </table>

      </main>
    </div>
  </div>
  <?php
  $data = '';
  $sql = 'SELECT * FROM dashboard';
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_array($result)) {

    $data = $data . '"' . $row['valoresM'] . '",';
  }

  $data = trim($data, ",");

  ?>

  <script src="js/feather.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script>
    /* globals Chart:false, feather:false */

    (function() {
      'use strict'

      feather.replace()

      // Graphs
      var ctx = document.getElementById('myChart')
      // eslint-disable-next-line no-unused-vars
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
          ],
          datasets: [{
            data: [<?php echo $data; ?>],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
          legend: {
            display: false
          }
        }
      })
    }())
  </script>
</body>

</html>