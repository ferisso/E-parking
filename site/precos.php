
<!doctype html>
<html lang="en">

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
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" height="20px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
          <a href="login.php"><button type="button" class="btn btn-light">Login</button></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <main role="main">

      <hr class="featurette-divider">

      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Planos</h1>
        <p class="lead">Escolha seu plano cliente.</p>
      </div>

      <div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Preço Mensal</h4>
              <font color = grey>*Preço sugerido pelo E-Parking</font>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$ 150,00 <small class="text-muted">/ mês</small></h1>
              <font color = grey>*Para futuras mudanças contate o E-Parking</font>
              <a href="registeradm.php"><button type="button" class="btn btn-lg btn-block btn-primary">Contate-nos</button></a>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Preço por reserva</h4>
              <font color = grey>*Preço sugerido pelo E-Parking</font>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$ 10,00 <small class="text-muted">/ Reserva</small></h1>
              <font color = grey>*Para futuras mudanças contate o E-Parking</font>
            
              <a href="register.php"><button type="button" class="btn btn-lg btn-block btn-primary">Contate-nos</button></a>
            </div>
          </div>
        </div>
        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao Topo</a></p>
        <p>&copy; 2019 E-Parking, Inc. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
      </footer>
  </main>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>