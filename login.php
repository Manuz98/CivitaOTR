<?php
      session_start();
      $dbconn=pg_connect("host=localhost port=5432 dbname=Utenti user=postgres password=1234")
      or die("Impossibile connettersi: " . pg_last_error());
      $a='';
      if($_SERVER['REQUEST_METHOD']=='POST'){
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <!--Inizio Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand mb-0 h1">Civita Castellana On The Road</a>
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
                <input type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                <div class="invalid-feedback">
                  Inserire una password valida.
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn btn-outline-light">Accedi</button>
          </div>  
          <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Password dimenticata?</a>
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

  <!--Inizio modal-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Reset password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>  
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email usata per la registrazione:</label>
            <input type="email" id="email" class="form-control" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$" required>
            <div class="invalid-feedback">
                Inserire un'email valida.
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Invia</button>
      </div>
      </form>  
    </div>
  </div>
</div>
  <!--fine modal-->
 
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
  </script>
</body>
</html>