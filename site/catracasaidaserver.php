<?php
include('banco.php');

$errors = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['reg_p'])) {
  // receive all input values from the form
  $pin = mysqli_real_escape_string($conn, $_POST['pname']);


  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  if (empty($username)) {
    array_push($errors, "Insira um PIN");
  }

  $sql3 = "SELECT `pin` FROM `estacionamento3` WHERE pin = $pin";
  $result3 = mysqli_query($conn, $sql3);

  if ($row = mysqli_num_rows($result3) == 1) {

    $sql = "DELETE FROM estacionamento3 WHERE pin = $pin";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT count(*) FROM estacionamento3 WHERE pin = $pin";
    $result2 = mysqli_query($conn, $sql2);

    while ($row = mysqli_fetch_assoc($result2)) {

      if ($row['count(*)'] == 0) {
        $_SESSION['success'] = "You are now logged in";
        header('location: http://192.168.1.150/?off');
        exit();
      }
    }
  } else { }
}



?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="img/icone.png" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/signin.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>E-Parking | Reservar vagas.</title>

</head>

<body class="text-center">
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand"><img src="img/logo.png" alt="logo" height="20px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="esqueceuopincatraca.php">Esqueceu o Pin?</a>
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">

          </li>
        </ul>
      </div>

    </nav>
  </header>
  <br>
  <br>
  <form class="form-signin">
    <h2>
      <font color="#db0707"> PIN Inválido </font>
    </h2>
    <h3> Tente novamente</h3><br>

    <img class="mb-4" src="img/icone.png" alt="" width="72" height="72">
    <h6> Clique em tentar novamente para voltar.</h6><br>
    <div class="form-group">

      <a href="catracasaida.php" class="btn btn-lg btn-primary btn-block">Tentar novamente</button>
        <a class="nav-link" href="esqueceuopincatraca.php">Esqueceu o Pin?</a>
  </form>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>