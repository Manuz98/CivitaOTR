<?php
     $dbconn=pg_connect("host=localhost port=5432 dbname=Utenti user=postgres password=1234")
      or die("Impossibile connettersi: " . pg_last_error());
      $a='';
      if($_SERVER['REQUEST_METHOD']=='POST'){
          $email=$_POST['email'];
          $q1="select * from utenti where email=$1";
          $result=pg_query_params($dbconn,$q1,array($email));
          if($line=pg_fetch_array($result,null,PGSQL_ASSOC)){
            $a='<h5 style="color:red;">Sei un utente già registrato</h5>';
          }
          else{
           $nome=$_POST['nome'];
           $cognome=$_POST['cognome'];
           $username=$_POST['username'];
           $password=md5($_POST['rpassword']);
           $q2="insert into utenti values($1,$2,$3,$4,$5)";
           $data=pg_query_params($dbconn,$q2,array($email,$nome,$cognome,$username,$password));
           if($data){
            $a='<h5>La registrazione è stata completata.<br />Ora puoi accedere.</h5>';
          }
        }     
      }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
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
          <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html#timeline-1">Storia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dovesiamo.html">Dove siamo</a>
        </li>         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contenuti Extra
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="carnevale.html">Il Carnevale </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="duomo.html">Il Duomo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="fortesangallo.html">Il Forte Sangallo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="ponte.html">Il Ponte Clementino</a>
          </div>
        </li>       
      </ul>
      <ul class="navbar-nav ml-auto">
        <a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="login.html">Accedi</a>
        <a type="button" class="btn btn btn-outline-light  my-2 mr-sm-2" href="registrazione.php">Registrati</a>
      </ul>
    </div>
  </nav>
  <!--Fine navbar-->

   <!--Sfondo con form-->
  <div class="imgregistrazione">
    <div class="container-fluid">
      <div class="row">
      <div class="col-sm-6 offset-sm-3 registrabox">  
      <h1>Registrazione</h1>
      <form class="needs-validation" novalidate action="registrazione.php" method="POST">
        <div class="form-row"> 
          <div class="col-sm-6">
            <div class="form-group">
              <p>Nome</p>
              <input type="text" name="nome" placeholder="Nome" required>
              <div class="invalid-feedback">
                Inserire il nome.
              </div>
            </div> 
          </div>  
          <div class="col-sm-6">
            <div class="form-group">  
              <p>Cognome</p>
              <input type="text"  name="cognome" placeholder="Cognome" required>
              <div class="invalid-feedback">
                Inserire il cognome.
              </div>
            </div>
          </div>  
        </div>
        <div class="form-row">
          <div class="col-sm-6">
            <div class="form-group">  
              <p>Email</p>
              <input type="email" name="email" placeholder="Email" required>
              <div class="invalid-feedback">
                Inserire un'email valida.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">  
              <p>Username</p>
              <input type="text" name="username" placeholder="Username" required>
              <div class="invalid-feedback">
                Inserire un username.
              </div>
            </div>
          </div>
        </div>  
        <div class="form-row">
          <div class="col-sm-6">
            <div class="form-group">  
              <p>Password</p>
              <input type="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback">
                Inserire una password.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">  
              <p>Conferma password</p>
              <input type="password" name="rpassword" placeholder="Ripeti password" required>
              <div class="invalid-feedback">
                Confermare password.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row"> 
          <div class="col-sm-6"> 
            <button type="submit" name="confermaButton" class="btn btn btn-outline-light">Conferma</button>
          </div>
          <div class="col-sm-6"> 
            <button type="reset" class="btn btn btn-outline-light">Reset</button>
          </div>           
        </div>   
        <div class="form-row justify-content-center text-center" id="message">
          <?php echo $a ?>
        </div>   
      </form>  
      </div>
    </div>
    </div>
  </div>
  <!--Fine sfondo con form-->  

  <!--Inizio Footer-->
  <footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-6">
       <h3>Come raggiungerci?</h3>
       <h4>Le info nella pagina "<a href="#">Dove siamo</a>"</h4> 
      </div>
      <div class="col-sm-6">
        <h3>Vuoi vedere contenuti extra?</h3>
        <h4>Registrati e accedi!</h4>
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
  </script>
</body>
</html>