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
      <title>Gallery</title>
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
      <style>
        /* Styling pour la mise en forme du formulaire */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .image-container {
            flex: 1;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .form-container {
            flex: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>

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
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    <title>Formulaire de Paiement en Ligne</title>
    <style>
        /* Styling pour la mise en forme du formulaire */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .image-container {
            flex: 1;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .form-container {
            flex: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

    <div class="container">
        <div class="image-container">
            <img src="chemin/vers/votre/image.jpg" alt="Image du produit">
        </div>
        <br>
    <br>
        <div class="form-container">
            <h2>Formulaire de Paiement</h2>
            <form action="traitement_paiement.php" class="col-md-10" method="POST">
                <label for="nom">Véhicule:</label>
                <input type="text" id="vehicule" name="vehicule" required>

                <label for="nom">Votre Nom:</label>
                <input type="text" id="nom" name="nom" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="numero_carte">Numéro de Carte:</label>
                <input type="text" id="numero_carte" name="numero_carte" pattern="[0-9]{16}" required>
                
                <label for="expiration">Date d'Expiration:</label>
                <input type="text" id="expiration" name="expiration" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" required>
                
                
                <button type="submit">Payer</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
     <br>
     <br>
     <br>
      
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