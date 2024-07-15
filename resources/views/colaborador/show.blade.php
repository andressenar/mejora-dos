<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar destino</h1>
<form action="{{route('colaborador.update', $colaborador)}}"  method="POST">

    @csrf
    @method('put')
    <label>
        nif:
        <br>
        <input name="nif" type="text" value="{{old('nif',$colaborador->nif) }}">
        <br>
        </label>
        <br>
        <label>
        nombre:
        <br>
        <input name="nombre" type="text" value="{{old('nombre',$colaborador->nombre)}}">
        <br>
        </label>
        
        
</form>
</body>
</html>