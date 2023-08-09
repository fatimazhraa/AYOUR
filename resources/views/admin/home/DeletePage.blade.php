<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-left: 30%;
           
        }
        .card {
            width: 750px; /* Définissez la largeur souhaitée de la carte ici */
        }
        .centered {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 8vh;
    text-align: center;
    width:750px;
}
   
</style>
</head>
<body>    


    <div class="center-container">

        <div class="container">
        @if(Session::has('success_message'))
    <div class="alert alert-success centered">
        {{ Session::get('success_message') }}
    </div>
@endif

@if(Session::has('error_message'))
    <div class="alert alert-danger centered">
        {{ Session::get('error_message') }}
    </div>
@endif
            <div class="row pt-5">
                <div class="col-md-4">
                    <div class="col-mc-4 text-center">
                        <div class="card">
                            <h4 class="card-header">Êtes-vous sûr de vouloir supprimer cette ligne ?</h4>
                            <div class="card-body">
                            <a href="{{ url('/delete') }}" class="btn btn-sm btn-primary">NON</a>
                            <a href="{{ url('/supprimer'.$id) }}" class="btn btn-sm btn-primary">OUI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



