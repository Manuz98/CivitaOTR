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
    <title>Forte Sangallo</title>
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
        <div class="carousel-item active" style="background-image: url(img/carousel/fortesangallo.jpg);">
          
        </div>
        <div class="carousel-item" style="background-image: url(img/carousel/fortesangallo1.jpg);">
  
        </div>
        <div class="carousel-item" style="background-image: url(img/carousel/fortesangallo2.jpg);">
          
        </div>
        <div class="carousel-item" style="background-image: url(img/carousel/fortesangallo3.jpg);">
          
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
        <h1>Forte Sangallo</h1>
      </div>
      <hr>
      
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <p>
            Il Forte Sangallo è una fortezza vicina al borgo storico di Civita Castellana. Dal 
            dicembre 2014 è passato in gestione insieme al Museo Archeologico ubicato all'interno 
            al Polo museale del Lazio.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <p>
            Fu fatto costruire a partire dal 1499, dal papa Alessandro VI, all'interno di un vasto 
            programma di rafforzamento delle fortificazioni dei luoghi che si intendeva assicurare alla 
            signoria ereditaria alla famiglia Borgia. Il progetto è di Antonio da Sangallo il Vecchio, 
            documentato nel cantiere, con numerosi collaboratori, tra il 1499 e la morte del papa nel 
            1503, che qui lascia una delle più significative della sua attività. Sangallo in quegli anni 
            è architetto di fiducia dei Borgia e specialista nella progettazione di
          </p>
        </div>
        <div class="col-sm-5">
          <img class="flex" src="img/descforte/esterno.jpg">
        </div>
      </div>
      
      <br>

      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <img class="flex" src="img/descforte/int.jpg">
        </div>
        <div class="col-sm-5">
          <p>
            "fortificazioni alla moderna". Dopo i Borgia la fortificazione passò al papato e i lavori 
            furono completati sotto papa Giulio II, forse da Bramante e sicuramente da Antonio da 
            Sangallo il Giovane. La fortezza rimase a lungo dimora papale. Nel XIX secolo fu usata 
            come carcere. Dopo un periodo di inutilizzo, oggi è sede del Museo archeologico di Civita 
            Castellana. Il forte aveva fin dall'inizio la doppia funzione di fortificazione e di 
            "palazzo" con funzioni rappresentative e residenziali come sicura residenza, fuori 
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <p>
            Roma, per il papa. In esso vengono applicate le più moderne concezioni della fortificazione 
            alla moderna con una forma pentagonale irregolare, con ai vertici bastioni poligonali 
            rientranti e con la punta arrotondata e assenza di beccatelli in aggetto per la difesa 
            piombante. Il Forte Sangallo di Civita Castellana costituisce una delle più elevate 
            realizzazioni dell'architettura militare dello Stato Pontificio nel XVI secolo.
          </p>
        </div>
        <div class="col-sm-5">
          <img class="flex" src="img/descforte/esterno1.jpg">
        </div>
      </div>
      
      <br>

      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <img class="flex" src="img/descforte/esterno2.jpg">
        </div>
        <div class="col-sm-5">
          <p>
            Per la sua ubicazione, il paese di Civita Castellana rappresenta un vero baluardo difensivo 
            dei confini settentrionali dei territori della chiesa, al centro del sistema fortificato 
            della Tuscia. Il paese venne assegnato da papa Adriano IV ai prefetti di Vico e verso 
            la metà del XIII secolo venne occupata dalle milizie di Federico II di Svevia. Agli inizi 
            del Trecento papa Bonifacio VIII fece ricostruire le mura del borgo e alla fine del secolo 
            seguente da cardinale Rodrigo Borgia fece costruire la fortezza. Rodrigo, salito al soglio 
            pontificio come Alessandro VI,
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 offset-sm-1">
          <p>
            commissionò l'opera a Antonio da Sangallo il Vecchio, valente esperto di architettura 
            militare, che completò l'opera nel 1503. Papa Giulio II della Rovere continuò i lavori, 
            migliorandoli, grazie al prezioso contributo di Antonio da Sangallo il Giovane.
            Il forte sorge nell'area occidentale della città, fuori del vecchio abitato, sull'area già 
            occupata dalle fortificazioni medievali, a presidio dell'unico lato non difendibile 
            dell'abitato, per il resto naturalmente difeso dai profondi costoni di roccia tufacea 
            che cingono Civita Castellana su tutti gli altri lati.
          </p>
        </div>
        <div class="col-sm-5">
          <img class="flex" src="img/descforte/esterno3.jpg">
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
        <source src="video/forte.mp4" type="video/mp4">
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