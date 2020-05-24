$(document).ready(function() {
      
    $('#password,#cpassword').on('keyup', function () {
      if ($('#password').val() == $('#cpassword').val() ) {
        $('#cpasswordinv').hide();
      } else {
        $('#cpasswordinv').show();
      }
    });

    let form1=document.getElementById('form-regi');
    form1.addEventListener('submit', function(event) {
     if (form1.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      else{
       form1.classList.add('was-validated');
      }
    },false);


    form1.querySelectorAll('.dacont').forEach(input => {
      input.addEventListener(('input'), () => {
       
        $("#mioreset").click(function(){
          input.classList.remove('is-invalid');
        });

        if (input.checkValidity()) {
          input.classList.remove('is-invalid'); 
        } else {
          input.classList.add('is-invalid');
        }
      });
    });
  });

  function mostrapassword(){
    var x=document.getElementById("password");
    var y=document.getElementById("hide1");
    var z=document.getElementById("hide2");
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
  function mostrapassword1(){
    var x=document.getElementById("cpassword");
    var y=document.getElementById("hide111");
    var z=document.getElementById("hide222");
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