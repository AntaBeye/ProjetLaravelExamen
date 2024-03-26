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
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter Un Véhicule</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Formulaire d'Ajout de Véhicule </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('vehicules.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date D'achat</label>
                    <input type="date" id="dateAchat" name="date_achat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kilométrage par défaut</label>
                    <input type="number" name="km_defaut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Matricule</label>
                    <input type="text" name="matricule"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Photo du Véhicule</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="statut-select">Statut du Véhicule : </label>
                        <select name="statut" name="statut"id="statut-select">
                        <option value="">--statut--</option>
                        <option value="disponible" selected>Disponible</option>
                        <option value="location">Location</option>
                        <option value="panne">Panne</option>
                        </select>
                  </div>
                  <div class="mb-3">
                    <label for="chauffeur-select">Chauffeur : </label>
                    <select name="chauffeur_id" id="chauffeur-select">
                    <option value="">-- Choisissez un chauffeur --</option>
                    @foreach($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} {{ $chauffeur->nom }}</option>
                    @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Femer</button>
              </div>
            </div>
          </div>
        </div>
        
        
        
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Date d'achat</th>
                <th scope="col">Km_defaut</th>
                <th scope="col">Matricule</th>
                <th scope="col">Statut</th>
                <th scope="col">Chauffeur</th>
                <th scope="col">Photo</th>

                <th scope="col">Actions</th>


            </tr>
            </thead>
            <tbody>
                @foreach($vehicules as $vehicule)
                <tr>
                    <th scope="row">{{ $vehicule->id }}</th>
                    <td>{{ $vehicule->date_achat }}</td>
                    <td>{{ $vehicule->km_defaut }}</td>
                    <td>{{ $vehicule->matricule }}</td>
                    <td>{{ $vehicule->statut }}</td>
                    <td>{{ $vehicule->chauffeur->prenom }} {{ $vehicule->chauffeur->nom }}</td>

                    <td><img src="{{ asset($vehicule->photo) }}" alt="Photo du véhicule" width="100" height="100"></td>


                    <td>
                      <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">X</button>
                      </form>
                  </td>                </tr>
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
    <script>
    const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')
      
      myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()})
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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