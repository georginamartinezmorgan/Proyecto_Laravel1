<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titulo }}</title>
</head>
<body>
    <p>
    Aquí vive el código HTML
    </p>
    <h2>Pero puede ser combinado con Blade:</h2>

    @foreach($usuarios as $usuario)
        <p>{{$usuario}}</p>
    @endforeach

</body>
</html>