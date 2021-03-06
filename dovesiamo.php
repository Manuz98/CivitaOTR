<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dove siamo</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png" sizes="16x16" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
      <li class="nav-item active">
        <a class="nav-link" href="dovesiamo.php">Dove siamo</a>
      </li>         
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if(!isset($_SESSION['username'])){echo 'disabled';}?> >" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <?php 
      if(isset($_SESSION['username'])){
        echo '<h5 class="my-3 mr-sm-2" style="color:white;">Benvenuto/a '.$_SESSION['username'].'</h5>';
        echo '<a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="logout.php">Logout</a>';
      }
      else{
        echo '<a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="login.php">Accedi</a>
              <a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="registrazione.php">Registrati</a>';
      }
    ?>
    </ul>
  </div>
</nav>
  <!--Fine navbar-->

  <div class="sfondo">
    <div class="container-fluid" >
      <div class="row" style="margin-top: 90px;">
        <div class="col-sm-6 text-center">
          <h1>Come arrivare </h1>
        </div>  
      </div>
      <br>
      <div class="row">
        <div class="col-sm-2" align="center">
          <button class="btn" data-container="body" data-toggle="popover" data-html="true" data-placement="bottom" data-trigger="focus" title="Raggiungere Civita Castellana in auto"
          data-content="<pre>Da <b>ROMA:</b><br> GRA Uscita 5 verso <b>Cassia Veientana</b><br> GRA Uscita 6 verso <b>Via Flaminia</b><br>Da <b>VITERBO:</b> <br> <b>SP27</b> verso Civita Castellana <br> <b>SS675</b> uscita Orte, E45 uscita <br>  Magliano Sabina, proseguire<br>  fino a Civita Castellana </pre>"><section class="s4"><a href="#" class="iconbtn fas fa-car-alt"> </a></section>
          </button>
        </div>
        <div class="col-sm-2" align="center">
          <button class="btn" data-container="body" data-toggle="popover"  data-placement="bottom" data-html="true" data-trigger="focus"  title="Raggiungere Civita Castellana in treno" 
          data-content="<pre>Da <b>ROMA:</b><br><b> Linea RomaNord</b> <br>  Flaminio-Civita Castellana <br> <b>Linea Fiumicino Aeroporto-Orte</b> <br>  Fermata Civita Castellana<br>Da <b>VITERBO:</b><br><b> Linea RomaNord</b> <br>  Viterbo-Civita Castellana </pre>"> <section class="s4"><a href="#" class="iconbtn fas fa-train"> </a></section>
          </button>
        </div>
        <div class="col-sm-2" align="center">
          <button class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="focus"  title="Raggiungere Civita Castellana in autobus"
          data-content="<pre>Da <b>ROMA:</b> <br> Saxa Rubra verso Civita Castellana<br>Da <b>VITERBO:</b><br> Riello verso Civita Castellana</pre>"><section class="s4"><a href="#" class="iconbtn fas fa-bus"> </a></section>
          </button>
        </div>
        <div class="col-sm-6 text-center">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11803.747419207955!2d12.38198530183433!3d42.301212779749214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f3dbbf2857d87%3A0xe385e69309f16611!2s01033%20Civita%20Castellana%20VT!5e0!3m2!1sit!2sit!4v1587305846567!5m2!1sit!2sit" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
      <div class="row justify-content-center text-center"><h1 style=" margin-top: 10vh;">Gli sviluppatori</h1></div>
      <div class="row">
        <div class="col-sm-6" align="center">
          <div class="boxx">
            <div class="imgBxx">
              <img src="img/manuel.jpg">
            </div>
            <div class="content">
              <h3>Grossi Manuel </h3>
              <br>
              <pp><b>Nome:</b> Manuel</pp><br>
              <pp><b>Cognome:</b> Grossi</pp><br>
              <pp><b>Data di nascita:</b> 03/08/1998</pp><br>
              <pp><b>Studente di Ingegneria Informatica</b></pp><br>
              <pp> @Università di Roma la Sapienza</pp>
            </div>
          </div>
          <div class="row justify-content-center text-center miarow" style="margin-top:45px;">
            <div class="face" style="margin-right:10px;"><a href="https://www.facebook.com/manuel.grossi.37" target="_blank"><i class="fa fa-facebook"></i></a></div>
            <div class="insta" style="margin-left:10px;"><a href="https://www.instagram.com/grossi_manuel/?hl=it" target="_blank"><i class="fa fa-instagram"></i></a></div> 
          </div>
        </div>
        <div class="col-sm-6" align="center">
          <div class="boxx">
            <div class="imgBxx">
              <img src="img/marco.jpg">
            </div>
            <div class="content">
              <h3>Cardinali Marco </h3>
              <br>
              <pp><b>Nome:</b> Marco</pp><br>
              <pp><b>Cognome:</b> Cardinali</pp><br>
              <pp><b>Data di nascita:</b> 23/04/1998</pp><br>
              <pp><b>Studente di Ingegneria Informatica</b></pp><br>
              <pp>@Università di Roma la Sapienza</pp>
            </div>
          </div>
          <div class="row justify-content-center text-center miarow" style="margin-top:45px;">
            <div class="face" style="margin-right:10px;"><a href="https://www.facebook.com/marco.cardinali.161" target="_blank"><i class="fa fa-facebook"></i></a></div>
            <div class="insta" style="margin-left:10px;"><a href="https://www.instagram.com/marcocardinali98/?hl=it" target="_blank"><i class="fa fa-instagram"></i></a></div>
          </div>
        </div>
      </div>
      <br><br>
    </div>
  </div>

  <!--Inizio Footer-->
  <footer class="container-fluid text-center">
    <div class="row">
    <?php 
        if(isset($_SESSION['username'])){
          echo '<div class="col-sm-5 offset-sm-1">
                  <h3>La storia di Civita Castellana?</h3>
                  <h4><a href="index.php#timeline-1">Clicca qui</a></h4> 
                </div>
                <div class="col-sm-5">
                  <img class="icon" src="img/logofooter.png">
                </div>';
         }
         else{
          echo '<div class="col-sm-4">
                 <h3>La storia di Civita Castellana?</h3>
                 <h4><a href="index.php#timeline-1">Clicca qui</a></h4> 
                </div>
                <div class="col-sm-4">
                 <h3>Vuoi vedere contenuti extra?</h3>
                 <h4>Registrati e accedi!</h4>
                </div>
                <div class="col-sm-4">
                <img class="icon" src="img/logofooter.png">
                </div>';
        }
      ?>
    </div>
  </footer>
  <!--Fine footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
    <script>
      $(function () 
        {
          $('[data-toggle="popover"]').popover();
        });
     
    </script>
</body>
</html>
