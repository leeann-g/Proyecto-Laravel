<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body style="    background-color:aquamarine; display: flex; justify-content: center; align-items: center; height: 90vh;">
    <div style="    background-color: white; text-align: center; width: 300px; height: 200px; border-radius: 20px; box-shadow: -50px 50px 10px black;">
    <h1>
        Bienvenido
    </h1>
    <h2>
        Selecciona una opción
    </h2>
    <ol>
        <li>
            <a href="{{ route('cuadratica')}}">Cuadratica</a>
        </li>
        <li>
            <a href="{{route('numerosAmigos')}}">Numeros Amigos</a>
        </li>
        <li>
            <a href="{{ route ('suma')}}">Suma</a>
        </li>
    </ol>
    </div>
</body>
</html>
