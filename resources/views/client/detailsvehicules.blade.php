<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Trator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="front/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="front/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="front/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="front/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="front/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="/home">Accueil</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/vehicules">Véhicles</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/locations">Mes locations</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="paiements">Paiements</a>
                     </li>
                     <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"><a class="nav-link" class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>@csrf</form>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start --> 
      <h1>details</h1>
      <!-- banner section end -->
      
    
     
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2023 All Rights Reserved. Design by <a href="front/https://html.design">Free Html Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="front/js/jquery.min.js"></script>
      <script src="front/js/popper.min.js"></script>
      <script src="front/js/bootstrap.bundle.min.js"></script>
      <script src="front/js/jquery-3.0.0.min.js"></script>
      <script src="front/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="front/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="front/js/custom.js"></script>
   </body>
</html>