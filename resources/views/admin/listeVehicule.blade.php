{{-- @extends('layouts.app') --}}
    
<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Liste des Véhicules</h2>
          </div>
        </div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Date d'achat</th>
                <th scope="col">Km_defaut</th>
                <th scope="col">Matricule</th>
                <th scope="col">Photo</th>
                <th scope="col">Etat</th>

            </tr>
            </thead>
            <tbody>
                @foreach($vehicules as $vehicule)
                <tr>
                    <th scope="row">{{ $vehicule->id }}</th>
                    <td>{{ $vehicule->date_achat }}</td>
                    <td>{{ $vehicule->km_defaut }}</td>
                    <td>{{ $vehicule->matricule }}</td>
                    <td><img src="{{ asset('front/images/img-1.png') }}" alt="Photo du véhicule" width="100" height="100"></td>
                    <td>{{ $vehicule->statut }}</td>

                </tr>
                @endforeach
            </tbody>
          </table>
        
        
        
        
        
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="/admincss/vendor/jquery/jquery.min.js"></script>
    <script src="/admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="/admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/admincss/js/charts-home.js"></script>
    <script src="/admincss/js/front.js"></script>
  </body>
</html>