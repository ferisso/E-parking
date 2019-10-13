 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if (isset($_POST['reg_p'])) {
    // receive all input values from the form
    $janeiro = mysqli_real_escape_string($conn, $_POST['janeiro']);
    $fevereiro = mysqli_real_escape_string($conn, $_POST['fevereiro']);
    $março = mysqli_real_escape_string($conn, $_POST['março']);
    $abril = mysqli_real_escape_string($conn, $_POST['abril']);
    $maio = mysqli_real_escape_string($conn, $_POST['maio']);
    $junho = mysqli_real_escape_string($conn, $_POST['junho']);
    $julho = mysqli_real_escape_string($conn, $_POST['julho']);
    $agosto = mysqli_real_escape_string($conn, $_POST['agosto']);
    $setembro = mysqli_real_escape_string($conn, $_POST['setembro']);
    $outubro = mysqli_real_escape_string($conn, $_POST['outubro']);
    $novembro = mysqli_real_escape_string($conn, $_POST['novembro']);
    $dezembro = mysqli_real_escape_string($conn, $_POST['dezembro']);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `dashboard` SET `valoresM` = ('$janeiro') WHERE `dashboard`.`id` = 1;";
    $sql2 = "UPDATE `dashboard` SET `valoresM` = ('$fevereiro') WHERE `dashboard`.`id` = 2;";
    $sql3 = "UPDATE `dashboard` SET `valoresM` = ('$março') WHERE `dashboard`.`id` = 3;";
    $sql4 = "UPDATE `dashboard` SET `valoresM` = ('$abril') WHERE `dashboard`.`id` = 4;";
    $sql5 = "UPDATE `dashboard` SET `valoresM` = ('$maio') WHERE `dashboard`.`id` = 5;";
    $sql6 = "UPDATE `dashboard` SET `valoresM` = ('$junho') WHERE `dashboard`.`id` = 6;";
    $sql7 = "UPDATE `dashboard` SET `valoresM` = ('$julho') WHERE `dashboard`.`id` = 7;";
    $sql8 = "UPDATE `dashboard` SET `valoresM` = ('$agosto') WHERE `dashboard`.`id` = 8;";
    $sql9 = "UPDATE `dashboard` SET `valoresM` = ('$setembro') WHERE `dashboard`.`id` = 9;";
    $sql10 = "UPDATE `dashboard` SET `valoresM` = ('$outubro') WHERE `dashboard`.`id` = 10;";
    $sql11 = "UPDATE `dashboard` SET `valoresM` = ('$novembro') WHERE `dashboard`.`id` = 11;";
    $sql12 = "UPDATE `dashboard` SET `valoresM` = ('$dezembro') WHERE `dashboard`.`id` = 12;";
    

    if ($conn->query($sql) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5) && $conn->query($sql6) && $conn->query($sql7) && $conn->query($sql8) && $conn->query($sql9) && $conn->query($sql10) && $conn->query($sql11) && $conn->query($sql12)  === TRUE) {
      header('location: dashboard.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();

  ?>