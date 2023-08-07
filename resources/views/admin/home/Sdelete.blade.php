<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        

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
    </style>
</head>
<body>
<div class="container">
        <h1 class="text-center">Delete data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image carte</th>
                    <th>Titre carte</th>
                    <th>Description carte</th>
                    <th>Grand titre</th>
                    <th>Image detaille</th>
                    <th>Titre detaille</th>
                    <th>Description detaille </th>
                </tr>
            </thead>
            <tbody>
                @foreach($service as $data)
                <tr>
                    <td>{{ $data->imgcarte }}</td>
                    <td>{{ $data->titrecarte }}</td>
                    <td>{{ $data->desccarte }}</td>
                    <td>{{ $data->grandtitre }}</td>
                    <td>{{ $data->imgdetaille }}</td>
                    <td>{{ $data->titredetaille }}</td>
                    <td>{{ $data->descdetaille }}</td>
                    <td><a href="{{ url('/deletepage'.$data->id) }}" class="btn btn-sm btn-success">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>