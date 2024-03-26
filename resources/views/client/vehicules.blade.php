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
      <title>Nos offres</title>
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
      <link rel="stylesheet" href="front/css/jquery.mCustomScrollbar.min.css">
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
                       <a class="nav-link" href="/vehiculees">Véhicles</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/paiements">Paiements</a>
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
     
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Nos différentes Offres</h1>
               </div>
            </div>
<br>
<br>

            <div class="row">
               @foreach ($vehicules as $vehicule)
               <div class="col-md-4">
                   <div class="gallery_box">
                       <div class="gallery_img">
                     
                           <img src="{{ asset($vehicule->photo) }}" alt="Vehicule Photo">
                       </div>
                       <h3 class="types_text">{{ $vehicule->matricule }}</h3>

                       @if ($vehicule->statut == 'disponible')
                       <form action="{{ route('vehicules.louer', $vehicule->id) }}" method="POST">
                        @csrf
                       <h3 class="types_text">{{ $vehicule->statut }}</h3>
                       <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" id="date" name="date" class="form-control">
                    </div>
                    
                       <div class="mb-3">
                        <label for="heure-select" class="form-label">Heure de début</label>
                        <input type="time" name="heure_debut" class="form-control" id="heure-select">
                    </div>
                    <div class="mb-3">
                     <label for="heure-select" class="form-label">Heure de fin</label>
                     <input type="time" name="heure_fin" class="form-control" id="heure-select">
                 </div>
                       <!-- Assurez-vous que le champ dans la base de données contient le chemin de la photo -->
                       <!-- Vous pouvez ajouter d'autres champs ici selon vos besoins -->
                       <button type="submit" class="btn btn-outline-secondary">LOUER</button>
                       </form>
                       @else
                       <!-- Bouton "Annuler" -->
                       <form action="{{ route('vehicules.annuler', $vehicule->id) }}" method="POST">
                        <h3 class="types_text">{{ $vehicule->statut }}</h3>

                           @csrf
                           <!-- Bouton "Annuler" -->
                           <br>
                           <br>
                        <br>
                           <br>
                           <br>
                           <button type="submit" class="btn btn-danger">Annuler la location</button>
                       </form>
                   @endif

                   </div>
               </div>
               @endforeach
           </div>
           
         </div>
           
             
            
            
         </div>
     
      <!-- gallery section end -->
      
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script>
      .custom-btn {
         background-color: #ff0000; /* Rouge */
         color: #ffffff; /* Blanc pour le texte */
     }
     </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>