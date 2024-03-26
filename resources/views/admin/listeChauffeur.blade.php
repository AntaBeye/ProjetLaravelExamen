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
            <h2 class="h5 no-margin-bottom">Liste des Chauffeurs</h2>
          </div>
        </div>
        <button type="button" class="btn btn-success">Ajouter Un Chauffeur</button>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Numéro Permis</th>
                <th scope="col">Expérience (en année)</th>
                <th scope="col">Date émission</th>
                <th scope="col">Expiration</th>


            </tr>
            </thead>
            <tbody>
                @foreach($chauffeurs as $chauffeur)
                <tr>
                    <th scope="row">{{ $chauffeur->id }}</th>
                    <td>{{ $chauffeur->nom }}</td>
                    <td>{{ $chauffeur->prenom }}</td>
                    <td>{{ $chauffeur->categorie }}</td>
                    <td>{{ $chauffeur->num_permis }}</td>
                    <td>{{ $chauffeur->experience }}</td>
                    <td>{{ $chauffeur->date_emission }}</td>
                    <td>{{ $chauffeur->expiration }}</td>




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