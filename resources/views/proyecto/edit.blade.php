<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar estudiante</h1>
<form action="{{route('proyecto.update', $proyecto)}}"  method="POST">

    @csrf
    @method('put')
    
    <label>
    codigo:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$proyecto->codigo)}}">
    <br>
    </label>
    <br>
    fecha_inicio
    <br>
    <input name=" fecha_inicio" type="text" value="{{old(' fecha_inicio',$proyecto->fecha_inicio)}}">
    <br>
    </label>
    <br>
    <label>
        fecha_fin:
        <br>
        <input name="fecha_fin" type="text" value="{{old('fecha_fin',$proyecto->fecha_fin) }}">
        <br>
        </label>
        <br>
    <label>
    codigo:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$proyecto->codigo)}}">
    <br>
    </label>
    <br>
    <label>
        cuantia:
        <br>
        <input name="cuantia" type="text" value="{{old('cuantia',$proyecto->cuantia)}}">
        <br>
        </label>
        <label>
            descripcion:
            <br>
            <input name="descripcion" type="text" value="{{old('descripcion',$proyecto->descripcion)}}">
            <br>
            </label>




    
    <button  type="submit">Actualizar proyecto</button>
   
</form>
</body>
</html>