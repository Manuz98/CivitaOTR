<?php
      session_start();
      $dbconn=pg_connect("host=localhost port=5432 dbname=Utenti user=postgres password=1234")
      or die("Impossibile connettersi: " . pg_last_error());
      $a='';
      if(isset($_POST['username'])){
        $username=$_POST['username'];
        $q1="select * from utenti where username=$1";
        $result=pg_query_params($dbconn,$q1,array($username));
        if(!( $line=pg_fetch_array($result,null,PGSQL_ASSOC))){
          $a='<div class="form-row justify-content-center text-center alert alert-danger" style="margin-top:10px;">
              <h5>Non sei un utente registrato<br><a href="registrazione.php" class="alert-link">Clicca qui per registrarti</a></h5>
              </div>';
        }
        else{
        $password=md5($_POST['password']);
        $q2="select * from utenti where username=$1 and password=$2";
        $result=pg_query_params($dbconn,$q2,array($username,$password));
        if(!($line=pg_fetch_array($result,null,PGSQL_ASSOC))){
          $a='<div class="form-row justify-content-center text-center alert alert-danger" style="margin-top:10px;">
              <h5> La password è errata </h5>
              </div>';
        }
        else {
          $_SESSION['username']=$_POST['username'];
          header("location:index.php");
        }
        }
      }
        
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png" sizes="16x16" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
          <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="login.php">Accedi</a>
        <a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="registrazione.php">Registrati</a>
      </ul>
    </div>
  </nav>
  <!--Fine navbar-->

  <!--Sfondo con form-->
  <div class="imglogin">
    <div class="container-fluid">
      <div class="row">
       <div class="col-sm-4 offset-sm-4 accedibox">
         <h1>Accedi</h1>
         <form class="needs-validation" novalidate action="login.php" method="POST">
          <div class="form-row">
            <div class="col-sm-12">
              <div class="form-group">
                <p>Username</p>
                <input type="text" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
                <div class="invalid-feedback">
                  Inserire un username valido.
                </div>
              </div>
            </div>
          </div>  
          <div class="form-row">
            <div class="col-sm-12">
              <div class="form-group">
                <p>Password</p>
                <input type="password" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                <span class="eye" onclick="mostrapassword()">
                  <i id="hide11" class="far fa-eye "></i>
                  <i id="hide22"class="far fa-eye-slash"></i>
                </span>
                <div class="invalid-feedback">
                  Inserire una password valida.
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn btn-outline-light">Accedi</button>
          </div>  
            <?php echo $a ?>
         </form>
        </div>
      </div>
    </div>
  </div>
  <!--Fine sfondo con form-->  

  <!--Inizio Footer-->
  <footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-4">
       <h3>Come raggiungerci?</h3>
       <h4>Le info nella pagina "<a href="dovesiamo.php">Dove siamo</a>"</h4> 
      </div>
      <div class="col-sm-4">
        <h3>Vuoi vedere contenuti extra?</h3>
        <h4>Registrati e accedi!</h4>
      </div>
      <div class="col-sm-4">
       <img class="icon" src="img/logofooter.png">
      </div>
    </div>
  </footer>
  <!--Fine footer-->
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script>
  (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


    function mostrapassword(){
      var x=document.getElementById("password");
      var y=document.getElementById("hide11");
      var z=document.getElementById("hide22");

      if(x.type==='password'){
        x.type="text";
        y.style.display="block";
        z.style.display="none";
      }
      else{
        x.type="password";
        y.style.display="none";
        z.style.display="block";
      }
    }
 </script>
   
</body>
</html>