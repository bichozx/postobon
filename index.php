<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario_Postobon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header class="container">
    <!-- Just an image -->
<nav class="navbar navbar-light bg-transparent">
  <a class="navbar-brand" href="#">
    <img src="postobonimagenes/postobonlogo.jpg" width="100" height="100" alt="" loading="lazy">
  </a>
</nav>
</header>
<section class="container">
<form class="needs-validation" action="index.php" method="POST" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="nombre" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Apellido</label>
      <input type="text" class="form-control" id="apellido" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Horas Trabajadas</label>
      <input type="text" class="form-control" id="horasdetrabajo" name="horasdetrabajo" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Horas Extras</label>
      <input type="text" class="form-control" id="horasextras" name="horasextras" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" id="validar" name="validar" value="validar">Enviar</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
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


<?php if(isset($_POST['validar'])): ?>

<h1 class="mt-5">
    <?php 
    
    
    $horastrabajo = $_POST['horasdetrabajo'];
    $extras = $_POST['horasextras'];

    if($horastrabajo == 40 && $extras > 0 ){

        $vlrextras= $extras * 25000 ;
        $vlrhorassemanal= $horastrabajo * 20000 ;
        $salariototal = $vlrextras + $vlrhorassemanal;
        echo ('El Salario Semanal Es:  '.$salariototal);

    }else if($horastrabajo<=40){

            $salariosemanal = $horastrabajo * 20000;
            echo ('El Salario Semanal Es:  '.$salariosemanal);
        };
    
    ?>
    </h1>

<?php endif  ?>


</section>

















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>