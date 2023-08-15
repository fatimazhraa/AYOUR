<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      background-color: #ffffff;
    }

    .table {
      border: none;
    }

    .table th,
    .table td {
      border: none;
    }

    tbody {
      background-color: #ffffff;
    }

    .table-striped tbody tr:not(:last-of-type) {
      border-bottom: 1px solid #343a40;
    }

    .table thead tr {
      background-color: #ffffff;
    }
    
    .table thead tr th {
      border-bottom: 1px solid #343a40;
    }

    .table tbody tr td {
      border-top: 1px solid #343a40;
    }
    .table tbody tr {
  background-color: #ffffff;
  border-bottom: 1px solid #343a40;
}

    .btn {
      background-color: #8e44ad;
      color: #fff;
    }

    .btn:hover {
      background-color: #6c3483;
    }
 
</style>
</head>
<body>
<div class="container">
        <h1 class="text-center"></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name of category</th>
                    <th>Ajouter</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($blog as $data)
                <tr>
                    <td>{{ $data->id}}</td>
                    <td>{{ $data->name}}</td>
                    <td><a href="{{ url('/ajouter-carte'.$data->id) }}" class="btn btn-sm btn-success">Ajouter</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>