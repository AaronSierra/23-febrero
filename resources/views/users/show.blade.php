<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-md-12">
               <table class="table table-sm">
                   <tr>
                      <th>NOMBRES</th>
                      <td>{{ $user->names }}</td>
                   </tr>
                   <tr>
                    <th>APELLIDOS</th>
                    <td>{{ $user->last_names }} </td>
                 </tr>
                 <tr>
                    <th>CORREOS</th>
                    <td>{{ $user->email }}</td>
                 </tr>
                 <tr>
                    <th>DIRECCION</th>
                    <td>{{ $user->address }}</td>
                 </tr>
                 <tr>
                    <th>ACERCA DE</th>
                    <td>{{ $user->about }}</td>
                 </tr>
               </table>
               <a href="{{ route('usuarios') }}" class="btn btn-info">Ir al inicio</a>
           </div>
        </div>
    </div>
</body>
</html>