<!DOCTYPE html>
   <html lang="en">
   <head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


 <style>
  /* Styles pour le formulaire de mise à jour */

    /* Couleur de fond pour le formulaire */
    body {
      background-color: #f5f5f5;
    }

    /* Style pour le conteneur principal */
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le titre */
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    /* Style pour les étiquettes des champs de formulaire */
    .form-label {
      font-weight: bold;
      font-size: 16px;
    }

    /* Style pour les champs de formulaire */
    .form-control {
      border: none;
      border-bottom: 2px solid #ccc;
      border-radius: 0;
      margin-bottom: 20px;
      transition: border-color 0.3s ease-in-out;
    }

    /* Style pour les champs de formulaire en focus */
    .form-control:focus {
      border-color: #4CAF50;
    }

    /* Style pour les champs de formulaire en ligne */
    .form-inline {
      display: flex;
      flex-wrap: wrap;
    }

    /* Style pour les champs de formulaire en ligne avec une marge */
    .form-inline .form-control {
      flex: 1;
      margin-right: 10px;
    }

    /* Style pour le bouton de soumission */

    .btn-primary  {
  width: 100%;
  padding: 10px;
  background-color: #8e44ad;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #6c3483;
}
   .control-label{
    color:#ceb6d8;
    font-weight: bold;
  font-size: 20px;
   }
   h1{
    color: #8A2BE2;
   }
</style>




  </head>
   <body>
     <div class="container">
     @if(Session::has('success_message'))
    <div class="alert alert-success" style="text-align: center; font-weight: bold; background-color: #4CAF50; color: white; height: 50px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
        {{ Session::get('success_message') }}
    </div>
  @endif

  @if(Session::has('error_message'))
    <div class="alert alert-danger" style="text-align: center; font-weight: bold; background-color: #FF0000; color: white; height: 50px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
        {{ Session::get('error_message') }}
    </div>
  @endif
        <h1>Data updata</h1>
        <form action="BlogdataUpdate{{ $data->id }}" method="post" enctype="multipart">
            @csrf


           
                          <label class="control-label">titre</label>
                          <input type="text" name="titre" value="{{$data->titre}}"  class="form-control" required>
                
                   
                          <label class="control-label">description</label>
                          <input type="text" name="description"  value="{{$data->description}}"  class="form-control" required>
                 
                   
                          <label class="control-label">image path </label>
                          <textarea name="image_path"  class="form-control" required>{{$data->image_path}}</textarea>
               
                   
                          <label class="control-label">categorie</label>
                          <input type="text" name="category_id" value="{{ $name }}"  class="form-control" required>
                  
                          <input type="submit" class="btn btn-primary">
        </form>
     </div>
   </body>
   </html>
