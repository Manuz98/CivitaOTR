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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Carnevale</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png" sizes="16x16" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
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

      <!--Trattini Carousel-->
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <!--Fine Trattini Carousel-->
    </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url(img/carousel/car1.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/carousel/car2.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/carousel/car3.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/carousel/car4.jpg);"></div>
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
  <!--Inizio Carnevale-->
  <div class="container-fluid">
     
        <div class="row justify-content-center text-center">
          <h1>Il Carnevale Civitonico</h1>
        </div>
      <hr>
     

      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <p>Il carnevale di Civita Castellana  non è una festa qualsiasi, quello che
             prende forma davanti agli occhi di ogni spettatore non è un'ordinata sfilata 
             di maschere, un susseguirsi di colorati personaggi inseriti all'interno di sfavillanti 
             scenografie, o meglio, non è solo questo.
          </p>
        </div>    
      </div>
      <div class="row">
        <div class="col-sm-4 offset-sm-1">
          <img class="flex" src="img/desccar/car5.jpg" alt="car5.jpg">
        </div>
        <div class="col-sm-6">
          <p> Il carnevale Civitonico è soprattutto una straordinaria celebrazione della libertà e 
            del gioco, un momento sospeso nel tempo e nello spazio, dove scompaiono i limiti di età 
            e le differenze sociali, politiche e culturali. Una festa di origini antichissime, che unisce               
            e diverte spettatori e protagonisti della sfilata.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-7 offset-sm-1">
          <p>Oggi è uno dei più importanti d'Italia, grazie alla realizzazione di carri allegorici che sono vere
            e proprie opere d'arte in cartapesta, alcune di esse progettate e realizzate da vari artigiani locali,
            ai quali si aggiunge la partecipazione di gruppi mascherati, che con i loro costumi, tutti di alta qualità,
            realizzati da sarte locali dalle mani d'oro, lo rendono eccezionale, colorato, spontaneo, appassionante, 
            coinvolgente e soprattutto divertente ed unico. <br>
            Tra le tante bizzarrie di questa manifestazione, una delle curiosità è quella che i centralini delle aziende ceramiche
            e delle attività commerciali, il giorno di martedì grasso, rispondono dicendo: "Chiuso per Carnevale".
          </p>
        </div>
        <div class="col-sm-3">
          <img class="flex" src="img/desccar/car6.jpg" alt="car6.jpg">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-4 offset-sm-1">
          <p><img class="flex" src="img/desccar/car7.jpg" alt="car7.jpg"></p>
        </div>
        <div class="col-sm-6">
          <p>
            Il carnevale inizia il 17 gennaio e termina il martedì sera prima del giorno delle ceneri, con il
            quale comincia la Quaresima. La tradizione vuole che in questo giorno viene trasportato nella piazza centrale
            del paese ,scortato dalla banda folcloristica di Civita Castellana "La Rustica" e accompagnato da persone in maschera, 
            il Re Carnevale, meglio conosciuto con il nome di <br>'O Puccio, nome col quale, nel dialetto Civitonico,
            si indica una "persona che sta ferma immobile, senza fare nulla".<br> La sera del martedì grasso, viene messo al rogo.
            Cala così il sipario sull'edizione del carnevale.
          </p>
        </div>
      </div>
      <br>
        <div class="row justify-content-sm-center text-center">
          <h1>Entriamo nei cantieri del carnevale</h1>
        </div>
      <br>
      <div class="row">
        <div class="col-sm-4 offset-sm-1">
          <p><img class="flex" src="img/desccar/car8.jpg" alt="car8.jpg"></p>
        </div>
        <div class="col-sm-6">
          <p>I cantieri del Carnevale Civitonico sono l'essenza del carnevale ed anche un rito. Aprono i battenti nel mese di 
              settembre, quelli in cui vengono realizzati i carri allegorici, mentre da ottobre cominciano a creare i loro progetti
              i gruppi mascherati. All'interno dei capannoni, che sono tabù per gli estranei, si vive, fino al giorno delle sfilate 
              un atmosfera magica e di festa mentre prendono forma i pupazzi in carta pesta. 
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-7 offset-sm-1">
          <p>
            Si realizzano i movimenti idraulici, vengono scelti i colori, le luci, le musiche che animano poi la manifestazione 
            più partecipata di Civita Castellana. Alla fine quelle che escono dai cantieri sono vere opere d'arte pronte
            a superare l'esame della giuria e il giudizio "virtuale" ma sempre severo de "'O Puccio" che staziona in piazza
            durante il loro passaggio. Sono a tutti gli effetti capolavori che trasmettono entusiasmo ai promotori ed ai partecipanti
            e tanta voglia di divertirsi ai turisti che scelgono il carnevale della capitale dell'agro falisco.
            Sono mesi di intenso lavoro per i volontari che fanno parte dei gruppi, che si trasformano nel tempo libero e durante
            i fine settimana in artigiani, pittori, scenografi e via dicendo con il sogno di essere incoronati vincitori della corrente
            edizione.
          </p>
        </div>
        <div class="col-sm-3">
          <p><img class="flex" src="img/desccar/car9.jpg" alt="car9.jpg"></p>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-4 offset-sm-1">
            <p><img class="flex" src="img/desccar/car10.jpg" alt="car10.jpg"></p>
          </div>
          <div class="col-sm-6">
            <p> 
              I cantieri sono in continuo sviluppo ed oggi sono autentici laboratori-officine, grazie anche  agli investimenti realizzati
              per migliorare, prima di tutto, la sicurezza, e passare qualche ora con gli amici tra la costruzione di un pupazzo, la realizzazione
              di una stampa, la scelta di una vernice e dei giochi di luce, che sono diventati, anche questi, motivo di attrazione.</h3>
            </p>
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
            <source src="video/carnevale.mp4" type="video/mp4">
          </video>
        </div>
  <!--Fine Carnevale-->
       
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