<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma</title>
</head>
<body style="background-color: slateblue; display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">
    <div style="background-color: white; text-align: center; width: 300px; height: 300px; border-radius: 20px; box-shadow: 20px solid; border: 2px solid;">
        <h1>
            Suma
        </h1>
        <form action="{{ route('suma')}}" method="post">
            @csrf
            <label for="numero1">Número 1:</label>
            <input type="number" name="a" id="numero1" value="{{ old('a', $a ?? '')}}" required>
            <br>
            <label for="numero2">Número 2:</label>
            <input type="number" name="b" id="numero2" value= "{{ old('b', $b ?? '')}}" required>
            <button type="submit" style="margin-top:20px">Sumar</button>
        </form>
        @isset($suma)
        @if ($suma != 13)
            <h2>
                La suma es: {{ $suma}}
            </h2>
            @else
                <h2>
                    Has encontrado un easter egg
                <br>
                <p style="color:chartreuse">
                   El 20 de abril del 2025: {{ $yei }}
                </p>
            </h2>
        @endif
        @endisset
    </div>
</body>
</html>
