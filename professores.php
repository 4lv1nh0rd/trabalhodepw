<?php include 'conexao_bd.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Kider - Escola Bilingue</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   </head>
   <body>
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
         <a href="index.php" class="navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
         </a>
         <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
               <a href="index.php" class="nav-item nav-link active">Início</a>
               <a href="professor.php" class="nav-item nav-link">Seja Professor</a>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
                  <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                     <a href="" class="dropdown-item">Nosso programa</a>
                     <a href="professores.php" class="dropdown-item">Nossos professores</a>
                     <a href="" class="dropdown-item">Seja um professor</a>
                     <a href="" class="dropdown-item">Depoimentos</a>
                  </div>
               </div>
            </div>
            <a href="index.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Crie sua conta<i class="fa fa-arrow-right ms-3"></i></a>
         </div>
      </nav>
      <!-- Navbar End -->
      <h1 class="text-center">Lista de Professores</h1>
      <?php
         $consulta = "SELECT nomeProf FROM professor";
         $resultado = $conn->query($consulta);
         
         if ($resultado->num_rows > 0) {
             while ($linha = $resultado->fetch_assoc()) {
                 echo "<h2>".$linha['nomeProf']."</h2>";
             }
         } else{
             echo "Nenhum Professor Registrado";
             }
         ?>
      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
      <script src="js/main.js"></script>
   </body>
</html>