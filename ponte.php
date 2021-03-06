<?php
  session_start();
  if(!(isset($_SESSION['username']))){
    header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Il Ponte Clementino</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png" sizes="16x16" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

 <!--Inizio Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand mb-0 h1">Civita Castellana OTR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#timeline-1">Storia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dovesiamo.php">Dove siamo</a>
      </li>         
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenuti Extra
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="carnevale.php">Il Carnevale </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="duomo.php">Il Duomo</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fortesangallo.php">Il Forte Sangallo</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="ponte.php">Il Ponte Clementino</a>
        </div>
      </li>       
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php echo '<h5 class="my-3 mr-sm-2" style="color:white;">Benvenuto/a '.$_SESSION['username'].'</h5>'; ?>
      <a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="logout.php">Logout</a>
    </ul>
  </div>
</nav>
  <!--Fine navbar-->

  <!--Inizio Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <!--Inizio Trattini Carousel-->
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <!--Fine Trattini Carousel-->
    </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url(img/carousel/ponte1.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/carousel/ponte2.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/carousel/ponte3.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/carousel/ponte4.jpg);"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--Fine Carousel-->
  <br>
  <!--Inizio Ponte Clementino-->
  <div class="container-fluid">
     
        <div class="row justify-content-center text-center">
          <h1>Il Ponte Clementino</h1>
        </div>

        <hr>
     
      <div class="row">
          <div class="col-sm-10 offset-sm-1">
            <p> 
              Il Ponte Clementino a Civita Castellana fu costruito nel lontano 1709 per volontà di papa 
              Clemente XI, da cui poi ne è derivato il nome su progetto dell’architetto romano Filippo Bariggioni.
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <p>Questa costruzione fu per l’epoca, e non solo, di grandissima importanza, 
            in quanto consentiva ai cittadini un rapido spostamento con i territori a nord della cittadina. 
            Prima di allora il territorio era “squarciato” in due parti dalla forra del Rio Maggiore ed attraversare 
            questa per il suo fondovalle richiedeva molto tempo ed energie. </p>
        </div>
        <div class="col-sm-5 ">
          <p><img class="flex" src="img/descponte/ponte5.jpg" alt="ponte5.jpg"></p>
        </div>
      </div>

      <div class="row">
        
        <div class="col-sm-3 offset-sm-1">
          <p><img class="flex" src="img/descponte/ponte6.jpg" alt="ponte6.jpg"></p>
        </div>
        <div class="col-sm-7 ">
          <p> 
            Intorno al 1800, quando il fenomeno del Grand Tour era al suo massimo splendore, i numerosissimi 
            viaggiatori, pittori, ed artisti che nel recarsi a Roma attraversavano l’antica cittadina falisca 
            rimanevano meravigliati nell’osservare questa imponente opera di ingegneria stradale che ai tempi 
            misurava 54 metri di altezza (un vero e proprio record per gli standard di allora) e che offre 
            ancora oggi una vista a 360° sulla rigogliosa e profondissima forra del rio Maggiore, divenendo 
            una vera e propria musa ispiratrice per i pittori di quel tempo. Originariamente il ponte presentava 
            ,oltre ad una torre posta all’estremità nord, due ordini di arcate, otto sopra e quattro sotto. 
            Questa predisposizione però il 29 ottobre del 1861, alle ore 17:00, si dimostrò non funzionale,
            in quanto una piena 
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 offset-sm-1">
          <p>
            del sottostante torrente accumulò numerosissimi detriti nelle arcate inferiori della costruzione, 
            provocandone così il cedimento.  Venne così ricostruito ridimensionando l’intera struttura, 
            questa volta con un solo ordine di tre arcate alte circa 30 metri in modo di consentire il 
            normale deflusso di eventuali piene del Rio Maggiore. Durante la ricostruzione venne anche 
            eretta una splendida porta sormontata da uno splendido stemma in travertino di Pio IX, demolita 
            poi nel 1911 per consentire il passaggio della tramvia. Il ponte attualmente è alto 40 metri e lungo 90 
            e rappresenta ancora oggi un’opera veramente imponente che si concilia perfettamente con la sempreverde 
            forra del Rio Maggiore, proprio nel cuore della città. 
          </p>

        </div>
        <div class="col-sm-4 ">
          <p><img class="flex" src="img/descponte/ponte7.jpg" alt="ponte7.jpg"></p>
        </div>
      </div>
      </div>
      <hr>
      <div align="center">
        <button type="button" id="btnvideo" class="btn btn-outline-primary">Guarda il video</button>
        <button type="button" id="closevideo" class="btn btn-outline-danger">Chiudi</button>
      </div>
      <br>
      <div align="center">
       <video id="video" width="80%" heigth="80%" controls>
         <source src="video/ponte.mp4" type="video/mp4">
       </video>
      </div>      
<!--Fine Ponte Clementino-->

  <br>

  <!--Inizio Footer-->
  <footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-5 offset-sm-1">
        <h3>Come raggiungerci?</h3>
        <h4>Le info nella pagina "<a href="dovesiamo.php">Dove siamo</a>"</h4> 
      </div>  
      <div class="col-sm-5">
        <img class="icon" src="img/logofooter.png">
      </div>
    </div>
  </footer>
  <!--Fine footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/video.js"></script>
</body>
</html>