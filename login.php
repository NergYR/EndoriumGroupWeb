<?php

?><html>
<head>
    <title>Endorium Group - Login / Register</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/E-1.png">
    <!--"CSS"-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--"JS"-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!--MDB-->
    <!-- MDB icon -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="mdb/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="mdb/css/style.css">

<!--META-REF-->
    <META NAME="TITLE" CONTENT="endoriumgroup">
    <META NAME="AUTHOR" CONTENT="Energetiq">
    <META NAME="DESCRIPTION" CONTENT="Platerforme de Projet Endorium">
    <META NAME="KEYWORDS" CONTENT="endorium,group,projet,Endorium,Group">
    <META NAME="OWNER" CONTENT="Louis Treard">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="contact@endorium.xyz">
    <META NAME="REVISIT-AFTER" CONTENT="15">

<!--Bosstrap Login-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="img/E.png" style="height: 40px;padding-left: 20px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Tuto.html">Tutoriels</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="shop.html">Commander</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="register.php">Login / Register</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </section>

<!--Code-->
<div class="container">

  <hr>
  
  
  
  
  
  <div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Login</h4>
    <p>
      <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
      <a href="" class="btn btn-block btn-discord"> <i class="fab fa-discord-f"></i>   Login via Discord</a>
    </p>
    <p class="divider-text">
          <span class="bg-light">OU</span>
      </p>
    <form class="needs-validation" action="member.php" method="post">
    <div class="form-group input-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
       </div>
          <input name="utilisateur" class="form-control" placeholder="Pseudo" type="text" required>
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          
      </div>
    </div> <!-- form-group end.// -->
    <div> <!-- form-group// -->
        <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
            <input class="form-control" placeholder="répété votre mot de passe" type="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Login   </button>
        </div> <!-- form-group// -->      
        <p class="text-center">vous n'avez pas de compte? <a href="register.php">Register</a> </p>                                                                 
  </form>
  </article>
  </div> <!-- card.// -->
  
  </div> 
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



</body>
</html>

