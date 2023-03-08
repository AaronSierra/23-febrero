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
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('usuarios.update', $user->id)}}" method="post">
                    @method('PUT')
                    @csrf
                <table class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th><input type="text" class="form-control" name="names" value="{{ $user->names}}"></th>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <th><input type="text" class="form-control" name="last_names" value="{{ $user->last_names }}"></th>
                        </tr>
                        <tr>
                            <th>Correo</th>
                            <th><input type="text" class="form-control" name="email" value="{{ $user->email}}"></th>
                        </tr>
                        <tr>
                            <th>Direccion</th>
                            <th><input type="text" class="form-control" name="address" value="{{ $user->address}}"></th>
                        </tr>
                        <tr>
                            <th>Acerca de</th>
                            <th><textarea name="about" id="" cols="30" rows="3" class="form-control">{{ $user->about}}</textarea></th>
                        </tr>
                        <tr>
                           
                            <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                        </tr> 
                        <tr>
                           
                            <th colspan="2"><a href="{{ route('usuarios')}}" class="btn btn-link w-100">Cancelar</a></th>
                        </tr>
                    </thead>
                </table>
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>