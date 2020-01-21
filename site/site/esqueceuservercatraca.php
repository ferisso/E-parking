<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['reg_p'])) {
  // receive all input values from the form
  $pname = mysqli_real_escape_string($conn, $_POST['pname']);


  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT `pin` FROM `estacionamento2` WHERE cpf = $pname";
  $result = mysqli_query($conn, $sql);
}

$conn->close();


?>
<html>

<head>
  <link rel="icon" href="img/icone.png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/pricing.css" rel="stylesheet">
  <title>E-parking</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand"><img src="img/logo.png" alt="logo" height="20px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="nav-link" href="catraca.php">Abrir catraca <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
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
  
  <center>
    <?php
    while ($row = mysqli_fetch_array($result)) {

      echo "<h2>Seu PIN é: </h2>";
      echo "<h1><font color = '#08d866'>" . $row['pin'] . "<br></font></h1>";
      echo "<h2>Por Favor anote! </h2>";
    }

    ?>

    <a class="nav-link" href="catraca.php">Voltar para a Catraca <span class="sr-only">(current)</span></a>


  </center>
</body>

</html>