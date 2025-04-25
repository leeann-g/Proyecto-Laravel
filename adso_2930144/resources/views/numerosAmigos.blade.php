<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Números amigos</title>
</head>
<body style="background-color:blueviolet; display: flex; justify-content: center; text-align: center; align-items: center; height: 100vh;">
    <div style="background-color: white; width: 300px; height: 300px; border-radius: 20px; border: 2px solid; box-shadow: 20px -20px 10px black;">
        <h1 style="font-family: monospace; font-size: 30px;">
            Números amigos
        </h1>
        <form method="POST" action="{{ route('numerosAmigos') }}">
            @csrf
            <label for="numero1" style="font-family: monospace; font-size: 4mm;">Número 1:</label>
            <input type="number" name="num1" id="numero1" value="{{ old ('num1', $num1 ?? '')}}" required>
            <br>
            <label for="numero2" style="font-family:monospace; font-size: 4mm;">Número 2:</label>
            <input type="number" name="num2" id="numero2" value="{{ old ('num2', $num2 ?? '')}}" required style="margin-top: 5px;">
            <br>
            <button type="submit" style="margin-top: 20px; font-family: monospace; border-radius:10px">Enviar</button>
        </form>
        @isset($resultado)
            <h2>
                {{ $resultado }}
            </h2>
        @endisset
    </div>
</body>
</html>
