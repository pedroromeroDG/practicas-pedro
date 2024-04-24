<?php
require("app/conect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords"
    content="Desarrollo web, Instalacion de redes, soporte tecnico, Administracion de base de datos, Servicios de redes, Diseño">
  <meta name="description" content="Pagina Empresarial de Digital Cherry Mexico">
  <meta name="author" content="Digital Cherry">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="js/jquery.js"></script>

  <title>Maqueta</title>
</head>

<body>
  <!-- nadvar -->
  <?php include 'includes/nadvar.php';?>
  <?php include 'includes/principal.php';?>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
        <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
  </body>
  
  </html>