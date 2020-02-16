<!doctype html>
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
    <title>E-Parking | Contato</title>
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
  </head>
  <body class="text-center">
	  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" height="20px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Início</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contato.php">Contato <span class="sr-only">(current)</span></a>
        </li>
      </ul>
		<a href="login.php"><button type="button" class="btn btn-light">Login</button></a>
    </div>
  </nav>
</header>
    <form class="form-signin" action="sendmail.php" method="post">
  <img class="mb-4" src="img/icone.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Fale Conosco</h1>
  <label for="inputEmail" class="sr-only">E-mail</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" name="email" required autofocus autocomplete="off" >
	<label class="sr-only">Nome</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Seu Nome" name="nome" required autofocus autocomplete="off" >	
	<label class="sr-only">Assunto</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Assunto" name="assunto" required autofocus autocomplete="off" >
		<textarea placeholder="Escreva sua mensagem..." name="mensagem" tabindex="5" class="form-control" required autofocus autocomplete="off" ></textarea>
  <a href="admin.html"><button class="btn btn-lg btn-primary btn-block" type="submit" data-submit="...Sending" name="submit">Enviar</button></a>
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>