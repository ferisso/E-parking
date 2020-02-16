<?php 
      include('verificalogin.php');
?>

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
      <a class="navbar-brand" href="index3.php"><img src="img/logo.png" alt="logo" height="20px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index3.php">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="logout.php"><?php echo $_SESSION['adm']; ?></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slideum.png" alt="" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Modernidade.</h1>
              <p>Uma nova gestão de estacionamentos. Nos preocupamos com o conforto de nossos clientes,pensando nisso,integramos a tecnologia de reservas online.</p>
              <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Cadastre-se hoje</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slidedois.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Praticidade.</h1>
              <p>Visamos otimizar o tempo gasto na procura de uma vaga,com a E-Parking você estará no lugar certo e na hora certa.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slidetres.png" alt="">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Garantia.</h1>
              <p>Ao implantarmos o mapa tecnológico a área de estacionamento desejada conseguimos controlar a situação de cada vaga e em tempo real fornecer a informação.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      <div class="col-lg-4">
        <img src="img/timeicon.png" alt="time">
        <h2>Rápido</h2>
        <p>Sua vaga reservada na distância de um clique.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/moneyicon.png" alt="money">
        <h2>Econômico</h2>
        <p>Ate 30% mais barato que outros estacionamentos.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/settingsicon.png" alt="settings">
        <h2>Facíl</h2>
        <p>Nunca foi tão facíl reservar uma vaga ou gerenciar um estacionamento.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Organização. </h2>
          <p class="lead"> A tecnologia que desenvolvemos pode ser aplicadas em estacionamentos amplos e também em de áreas menores,independente da sua necessidade podemos monitora-lá de forma precisa. A integralização dinâmica entre usuário e aplicativo é fácil,portanto qualquer um não terá dificuldades em utilizar nossos serviços.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="img/fotodois.png" height="400px" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Tecnologia</h2>
          <p class="lead">Nossos sensores são programados para que haja um resposta rápida,emitindo assim as situações em tempo real,além de imperceptíveis (não corrompendo o ambiente). A tecnologia precisa de poucos ajustes para que a integração seja completa. Reparos quase não são necessários pois os materiais utilizados são resistentes e armazenados em locais adequados para que não sejam prejudicados. Quando são necessárias atualizações garantimos agilidade ,em pouco tempo realizamos o procedimento e o sistema volta a funcionar.</p>
        </div>
        <div class="col-md-5">
          <img src="img/fototres.png" height="400px" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Planos</h1>
        <p class="lead">Escolha seu plano entre administrador e cliente.</p>
      </div>

      <div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Admin</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$ 00,00 <small class="text-muted">/ mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Monitoramento de ganhos</li>
                <li>Mais de 500 vagas no servidor</li>
                <li>Suporte da empresa</li>
              </ul>
              <a href="registeradm.php"><button type="button" class="btn btn-lg btn-block btn-primary">Cadastre-se</button></a>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Cliente</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$ 00,00 <small class="text-muted">/ Mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Reserva de vagas</li>
                <li>Preços promocionais</li>
                <li>Suporte do local</li>
              </ul>
              <a href="register.php"><button type="button" class="btn btn-lg btn-block btn-primary">Cadastre-se</button></a>
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