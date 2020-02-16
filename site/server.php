<?php
session_start();

// INICIANDO AS VARIAVEIS 
$username = "";
$email    = "";
$errors = array(); 

// CONNECTANDO COM O DATA BASE
$db = mysqli_connect('localhost', 'root', '', 'login');



// REGISTRANDO O USER
if (isset($_POST['reg_user'])) {
  // RECEBENDO TODOS OS VALORES DE FORM PARA FORM
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $cpf = mysqli_real_escape_string($db, $_POST['cpf']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);




  // FORMULARIO DE VALIDACAO PARA VER SE NAO HA ERROS USANDO UM ARRAY_PUSH()

  if (empty($username)) { array_push($errors, "Coloque o nome de usuario"); }
  if (empty($email)) { array_push($errors, "Coloque o E-mail"); }
  if (empty($password_1)) { array_push($errors, "Coloque a senha"); }
  if ($password_1 != $password_2) {
	array_push($errors, "As senhas não combinam");
  }

  // CONSULTA AO DATABASE PARA TER CERTEZA 
  // SE O USUARIO OU EMAIL NAO EXISTEM
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // VERIFIFICAR SE HA UM USUARIO
    if ($user['username'] === $username) {
      array_push($errors, "O nome de usuario ja existe");
    }

    if ($user['email'] === $email) {
      array_push($errors, "E-mail ja existe");
    }
    
    if ($user['cpf'] === $cpf) {
      array_push($errors, "CPF ja existe");
    }

  }

  // REGISTRO CONCLUIDO CASO NAO HAJA ERROS
  if (count($errors) == 0) {
  	$password  = md5($password_1);
    $query = "INSERT INTO users (username, cpf, email, password)
  			  VALUES('$username','$cpf', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Bem-vindo";
  	header('location: index2.php');
  }
}

// PAGINA DE LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Colque o nome de usuario");
  }
  if (empty($password)) {
    array_push($errors, "Coloque a senha");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index2.php');
    }else {
      array_push($errors, "Senha ou nome de usuraio incorretos");
    }
  }
}

$erros = 0;
?>