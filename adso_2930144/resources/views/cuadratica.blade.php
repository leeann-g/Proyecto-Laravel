<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuadratica</title>
</head>
<body style="background-color: thistle; display: flex; justify-content: center; text-align:center; align-items: center; height: 100vh">
    <div style="background-color: white; text-align:center; width: 300px; height: 300px; border-radius: 20px; border:2px solid; box-shadow: -20px -20px 10px;">
        <h1>
            Cuadratica
        </h1>
        <form method="POST" action="{{ route('cuadratica') }}">
            @csrf
            <label for="a" style="font-family: monospace; font-size: 4mm;">Número 1:</label>
            <input type="number" name="a" id="a" value="{{ old ('a', $a ?? '')}}" required>
            <br>
            <label for="b" style="font-size: 4mm; font-family: monospace;">Número 2:</label>
            <input type="number" name="b" id="b" value="{{ old ('b', $b ?? '')}}" required style="margin-top: 5px;">
            <br>
            <label for="numero3" style="font-family: monospace; font-size: 4mm">Número 3:</label>
            <input type="number" name="c" id="c" value={{ old('c', $c ?? '')}} required style="margin-top: 5px;">
            <br>
            <button type="submit" style="margin-top: 20px">Calcular</button>
        </form>
        @if (isset($mensaje))
            <h2>
                {{ $mensaje }}
            </h2>
        @elseif (isset($raiz1) && isset($raiz2))
        <h2>
            Raiz 1: {{ $raiz1 }} <br>
            Raiz 2: {{ $raiz2 }} <br>
        </h2>
        @endif
    </div>
</body>
</html>
