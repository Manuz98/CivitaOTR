<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civita Castellana On The Road</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png" sizes="16x16" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--Link per la timeline-->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
  
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">

  <!--Inizio Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand mb-0 h1">Civita Castellana OTR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#image">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#timeline-1">Storia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dovesiamo.php">Dove siamo</a>
        </li>         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if(!isset($_SESSION['username'])){echo 'disabled';}?> " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  
  <!--Sfondo con scritte-->
  <div class="imgsfondo" id="image">
    <div class="miotesto" id="miot" style="padding:48px">
      <h1>Inizia il viaggio nella storia</h1>
      <h1>di Civita Castellana</h1>
      <a type="button" class="btn btn-light" href="#timeline-1">Inizia Ora</a>
    </div>
  </div>
  <!--Fine Sfondo-->

  <!--Inizio Timeline-->
  <div class="timeline-container" id="timeline-1">
    <div class="timeline-header">
     <h2 class="timeline-header__title">Civita Castellana</h2>
     <h3 class="timeline-header__subtitle">La storia</h3>
    </div>
    <div class="timeline">
      <div class="timeline-item">
       <div class="timeline__content"><img class="timeline__img" src="img/falisci.png" />
        <h2 class="timeline__content-title">IX sec. a.C. </h2>
        <p class="timeline__content-desc" align="justify">La storia trimillenaria di Civita Castellana inizia con quella 
          dei Falisci, una popolazione che si collocava tra la civiltà degli etruschi e quella dei romani.
          Le prime tracce di questa civiltà provengono dagli scavi dell'antica Falerii Veteres, 
          che aveva rapporti commerciali con tutto il bacino del Mediterraneo.
          I Falisci, un popolo guerriero, si scontrò inevitabilmente con la vicina Roma. 
          Sconfitti, i Falisci furono letteralmente cacciati dal sito fortificato di Falerii Veteres 
          e costretti a fondare un'altra città su di una piana distante cinque chilometri. La nuova 
          città si chiamò Falerii Novi</p>
       </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/clemente.jpg"/>
         <h2 class="timeline__content-title">VI sec. d.C.- XII sec. d.C.</h2>
         <p class="timeline__content-desc" align="justify">Dopo un periodo di abbandono, la città tornò ad essere 
           abitata, in seguito alle guerre gotiche e alle invasioni longobarde, dando vita a uno 
           sviluppo urbanistico che ancora oggi conserva il suo tessuto medioevale. Falerii Veteres 
           divenne così Civita Castellana.Nel corso dei secoli successivi Civita sarà il luogo dove 
           papi come Clemente III e Adriano IV troveranno rifugio in situazioni di estremo pericolo.
           Sul finire del secolo XII fu signoria di Giovanni dei Papareschi Senatore di Roma</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/fortesangallom.jpg"/>
          <h2 class="timeline__content-title">1494</h2>
          <p class="timeline__content-desc" align="justify">Da quel momento la città seguì le sorti dello Stato della 
            Chiesa e molti furono i papi che nel corso degli anni la visitarono e vi soggiornarono. 
            Tra questi Alessandro VI, Giulio II, Pio VI. Fu sotto il pontificato di Alessandro VI 
            Borgia che iniziarono i lavori nel forte Sangallo</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/lanzichenecchi.jpg"/>
         <h2 class="timeline__content-title">1527</h2>
         <p class="timeline__content-desc" align="justify">L'evento più importante del XVI secolo invece, fu l'attacco 
           che i Lanzichenecchi sferrarono a Civita Castellana. Questi per ben due volte 
           cercarono di impossessarsene, avendone compreso l'importanza strategica. La città però 
           riuscì a resistere. Fu in tale occasione che l'archivio cittadino venne bruciato.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/ponteclementinom.jpg"/>
         <h2 class="timeline__content-title">1589 - 1787</h2>
         <p class="timeline__content-desc" align="justify">I secoli XVII e XVIII furono secoli di pace e così ci si 
           preoccupò di realizzare alcune opere pubbliche. Nel 1589 venne realizzato ponte Felice, 
           nel 1609 la variante della via Flaminia, nel 1709 il ponte Clementino. Il collegamento tra 
           la Cassia e la Flaminia voluto da papa Pio VI risale invece al 1787.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/battaglia.png"/>
         <h2 class="timeline__content-title">1798-1815</h2>
         <p class="timeline__content-desc" align="justify">Le idee della rivoluzione francese ben presto si diffusero in 
           tutta Europa, Italia compresa. L'espansionismo territoriale francese che ne seguì giunse anche 
           a Civita Castellana tanto che il 5 dicembre 1798 le truppe francesi, guidate dal generale 
           MacDonald, sconfissero in battaglia le truppe napoletane guidate dal generale Mack. L'anno 
           seguente gli Aretini si unirono agli altri nemici dei francesi ed attaccarono Civita Castellana. 
           I francesi ben presto si riappropriarono della città e la controllarono fino al 1815.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/vittorio.jpg"/>
         <h2 class="timeline__content-title">1860-1870</h2>
         <p class="timeline__content-desc" align="justify">Nel 1860 i garibaldini, diretti a Mentana, si fermarono a 
           Civita. Il 12 settembre del 1870 vi sostò lo stesso Vittorio Emanuele II, diretto verso 
           Roma con il suo esercito, che liberò la città dal secolare potere della Chiesa, 
           annettendola a quello che poi sarebbe divenuto il Regno d'Italia.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline__content"><img class="timeline__img" src="img/civitacer.jpg"/>
         <h2 class="timeline__content-title">XIX sec.</h2>
         <p class="timeline__content-desc" align="justify">Civita Castellana inizia una svolta economica ad opera di 
           Giuseppe Trevisan, un imprenditore veneto che vi impianta le prime fabbriche di ceramica. 
           Quella della ceramica è una vocazione antica, dovuta anche alla facile reperibilità 
           dell'argilla presente nel luogo. Col passare degli anni, accanto al settore artistico 
           si sviluppa anche quello industriale, che avrà il suo apice nel secondo dopoguerra. 
           I settori di produzione sono i sanitari, seguono le stoviglierie. Nasce il distretto 
           industriale che comprende anche i paesi limitrofi.</p>
        </div>
      </div>
    </div>
  </div>
  <!--Fine timeline-->

  <!--Inizio Footer-->
  <footer class="container-fluid text-center">
    <div class="row">
      <?php 
        if(isset($_SESSION['username'])){
          echo '<div class="col-sm-5 offset-sm-1">
                 <h3>Come raggiungerci?</h3>
                 <h4>Le info nella pagina "<a href="dovesiamo.php">Dove siamo</a>"</h4> 
                </div>
                <div class="col-sm-5">
                 <img class="icon" src="img/logofooter.png">
                </div>';
        }
        else{
          echo '<div class="col-sm-4">
                 <h3>Come raggiungerci?</h3>
                 <h4>Le info nella pagina "<a href="dovesiamo.php">Dove siamo</a>"</h4> 
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

  <!--Jquery per la timeline-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <!--Script per la timeline-->
  <script src="js/timeline.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <!--Script per lo scroll della pagina-->
  <script>
   $('body').scrollspy({ target: '#navbarSupportedContent' })

   $(".navbar-collapse ul li a[href^='#']").on('click',function(e){ /*seleziono tutti i link nella navbar che hanno un # nell'href*/
     target = this.hash;                          /*prendo l'hashtag all'interno dell'href*/
     e.preventDefault();                          

     $('html,body').animate({                     /*metodo per fare l'animazione*/
       scrollTop : $(this.hash).offset().top      /*posizione a cui voglio far arrivare la pagina*/
     }, 600, function(){                          /*animazione con durata 600ms*/
       window.location.hash = target;             /*aggiungo nell'url l'hashtag che ho cliccato*/
     });
    });

    $(".miotesto a[href^='#']").on('click',function(e){
     target = this.hash;
     e.preventDefault();

     $('html,body').animate({
       scrollTop : $(this.hash).offset().top
     }, 600, function(){
       window.location.hash = target;
     });
    });
  </script>
  <!--Fine script per lo scroll-->

</body>
</html>