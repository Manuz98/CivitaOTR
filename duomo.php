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
    <title>Il Duomo</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png" sizes="16x16" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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

  <!--Inizio carousel-->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(img/carousel/duomo.jpg);">
        
      </div>
      <div class="carousel-item" style="background-image: url(img/carousel/duomo1.jpg);">

      </div>
      <div class="carousel-item" style="background-image: url(img/carousel/duomo2.jpeg);">
        
      </div>
      <div class="carousel-item" style="background-image: url(img/carousel/duomo3.jpg);">
        
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

  <!--Fine carousel-->

  <br>

  <!--Inizio container descrizione-->

   <div class="container-fluid">
      <div class="row justify-content-center text-center">
        <h1>Cattedrale Santa Maria Maggiore</h1>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <p>
            La cattedrale di Santa Maria Maggiore è il principale luogo di culto di Civita Castellana, 
            in provincia di Viterbo, chiesa madre della diocesi omonima. Ha la dignità di basilica 
            minore.
          </p>    
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-5 offset-sm-1">
           <img class="flex" src="img/descduomo/int.jpg">
        </div>
        <div class="col-sm-5">
          <p>
            Il duomo fu costruito a partire dal 1185 circa, edificato sopra un precedente edificio 
            sacro, e fu completato con la costruzione del portico nel 1210: in esso aveva lavorato la 
            valente famiglia di architetti e marmorari romani dei Cosmati. Diventata fatiscente nel corso 
            dei secoli, nel Settecento la chiesa fu completamente ristrutturata al suo interno in forme 
            barocche: è di quest'epoca la trasformazione da chiesa a tre navate a chiesa ad un'unica 
            navata con cappelle laterali comunicanti tra loro.
          </p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-6 offset-sm-1">
          <p>
            Una targa in marmo posta all'esterno dell'edificio ricorda che l'11 luglio 1770 Wolfgang 
            Amadeus Mozart soggiornò a Civita Castellana ed ebbe occasione di suonare l'organo di 
            domenica mattina durante la funzione liturgica. La facciata dell'edificio è preceduta da un 
            portico duecentesco. Nell'architrave era inserita una fascia mosaicata con scritta in oro, 
            di cui restano solo pochi frammenti. Dai due pilastri centrali si innalza un arco a 
            tutto sesto, su cui scorre la scritta: “Gloria in excelsis Deo…”
          </p>
        </div>
        <div class="col-sm-4">
          <img class="flex" src="img/descduomo/esterno.jpg">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <img class="flex" src="img/descduomo/esterno1.jpg">
        </div>
        <div class="col-sm-5">
          <p>
            Sui due pilastri dell'arco e su quelli alle estremità del portico sono riportati, 
            scolpiti nel marmo, i simboli dei quattro evangelisti, mentre al centro dell'arco è la 
            figura dell'Agnello, simbolo di Gesù Cristo. Tre sono le porte di accesso alla cattedrale. 
            La porta centrale monumentale è incastonata tra quattro colonne corinzie, di cui due 
            poggiano su leoni di marmo; sotto il leone di destra è rappresentata una figura umana 
            (un bambino), simbolo del fedele che entra in chiesa. 
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <p>
            Le due porte laterali lunettate hanno motivi ornamentali cosmateschi; nella lunetta sopra 
            la porta di destra è raffigurato Cristo benedicente. Sotto il portico sono inoltre 
            disposti cippi, lastre, capitelli, lapidi e una preziosa ara romana con rilievi ornamentali. 
            Affianca l'edificio un bel campanile romanico. La chiesa è ad un'unica navata, con cappelle 
            laterali comunicanti fra loro, terminante in un transetto che precede il presbiterio rialzato, 
            sotto il quale è posta la cripta. La maggior parte del pavimento dell'edificio è in stile 
            cosmatesco. Sei sono le cappelle che si aprono sulle navate laterali. Ai lati del transetto 
            vi sono due monumentali altari barocchi: quello di destra è dedicato alla Madonna della luce 
            ed incorpora un affresco dell'XI secolo; l'altare di sinistra è dedicato alla Madonna del 
            rosario ed in esso campeggia una tela del XVI secolo circondata da quindici quadretti 
            raffiguranti i misteri del rosario. Sulla cantoria in controfacciata si trova l'organo a 
            canne, costruito nel 1890 dai Fratelli Aletti; profondamente modificato nel 1961-1962 con 
            un intervento della ditta Paoli, è stato ricondotto alle caratteristiche originarie da 
            Barthélemy Formentelli nel 2002.
          </p>
        </div>
        <div class="col-sm-5">
          <img class="flex" src="img/descduomo/int1.jpg">
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
        <source src="video/duomo.mp4" type="video/mp4">
      </video>
    </div>

  <!--Fine container descrizione-->
  
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