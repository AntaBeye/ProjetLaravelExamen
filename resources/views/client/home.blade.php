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
      <title>Site Accueil </title>
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
                        <a class="nav-link" href="/vehiculees">Véhicles</a>
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
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Une Voiture <br><span style="color: #fe5b29;">Pour toi</span></h1>
                              <p class="banner_text">Explorez sans limites: Louez votre liberté de mouvement!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="/vehiculees">Louez-en une ici</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Une Voiture <br><span style="color: #fe5b29;">Pour toi</span></h1>
                              <p class="banner_text">Explorez sans limites: Louez votre liberté de mouvement!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="/vehiculees">Louez-en une ici</a></div>                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Une Voiture <br><span style="color: #fe5b29;">Pour toi</span></h1>
                              <p class="banner_text">Explorez sans limites: Louez votre liberté de mouvement!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="/vehiculees">Louez-en une ici</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="banner_img"><img src="front/images/banner-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
    
      <div class="search_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="search_taital">Chercher Votre Voiture</h1>
                                    <!-- select box section start -->
                  <div class="container">
                     <div class="select_box_section">
                        <div class="select_box_main">
                           <div class="row">
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Marque</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div>
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Prix</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div>
                              <div class="col-md-3">
                                 <div class="search_btn"><a href="#">Rechercher</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- select box section end -->
               </div>
            </div>
         </div>
      </div>
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Nos meilleures offres</h1>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="front/images/img-1.png"></div>
                        <h3 class="types_text">Nissan</h3>
                          <p class="looking_text">40 564 €</p>
                        <div class="read_bt"><a href="/detailsvehicules">Détails</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="front/images/img-2.png"></div>
                        <h3 class="types_text">Range Rover</h3>
                          <p class="looking_text">142 900 €</p>
                        <div class="read_bt"><a href="/detailsvehicules">Détails</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="front/images/img-3.png"></div>
                        <h3 class="types_text">Toyota</h3>
                          <p class="looking_text">33.100 €</p>
                        <div class="read_bt"><a href="/detailsvehicules">Détails</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="front/images/img-4.png"></div>
                        <h3 class="types_text">Peugeot</h3>
                          <p class="looking_text">35 750 €</p>
                        <div class="read_bt"><a href="/detailsvehicules">Détails</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="front/images/img-5.png"></div>
                        <h3 class="types_text">BMW</h3>
                          <p class="looking_text">46 825 €</p>
                        <div class="read_bt"><a href="/detailsvehicules">Détails</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="front/images/img-6.png"></div>
                        <h3 class="types_text">Ford</h3>
                          <p class="looking_text">33 163 €</p>
                        <div class="read_bt"><a href="/detailsvehicules">Détails</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- gallery section end -->
      
    
     
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