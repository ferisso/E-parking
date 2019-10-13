<?php 
include('verificalogin.php');?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$usu = $_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['reg_p'])) {
  // receive all input values from the form
  $sqltest = "SELECT `cpf` FROM `users` WHERE `username` ='". $_SESSION['username']."'";

  $result2 = mysqli_query($conn,$sqltest);
 
  while ($row = mysqli_fetch_array($result2)) {

    $pname = $row['cpf'];
   
  }
  


  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `estacionamento2` ";
$result = mysqli_query($conn, $sql);


if($row = mysqli_num_rows($result) >3){
  echo "<br>";
  echo "<h4><center>Todas as vagas estão ocupadas tente mais tarde!</center></h4>";
}
else{

$pin = rand(1000,9999);
$sql2 = "INSERT INTO estacionamento(cpf) VALUES ('$pname')";
$sql3 = "INSERT INTO estacionamento2(cpf,pin) VALUES ('$pname','$pin')";
$sql4 = "INSERT INTO estacionamento3(cpf,pin) VALUES ('$pname','$pin')";

if ($conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) === TRUE) {
    echo "<center><br><h4>VAGA RESERVADA COM SUCESSO!!<br>";
  
    echo "seu PIN para a Catraca é:  </h4>";
    echo "<h1><font color = '#08d866'>".$pin."<br></font></h1></center>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
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
    <a class="navbar-brand" href="index2.php"><img src="img/logo.png" alt="logo" height="20px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index2.php">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vagas.php">Reservar Vaga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="esqueceuopin.php">Esqueceu o PIN?</a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php"><?php echo $_SESSION['username']; ?></a>
    </li>
  </ul>
    </div>
      
  </nav>
</header>
  <br>
<center>
<?php


?>
</center>
</body>

</html>
