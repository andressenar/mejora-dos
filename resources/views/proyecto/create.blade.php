<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <h1>Agregar proyecto</h1>
    <form method="POST" action="{{route('proyecto.store')}}">
      @csrf
        <h1>datos del proyecto</h1>
      
      <br>
      <label>
        codigo
        <br>
        <input type="text" name="codigo">
    </label>
    <br>
    <label>
        fecha_inicio
        <br>
        <input type="text" name="fecha_inicio">
    </label>
    <br>
    <label>
        fecha_fin
        <br>
        <input type="text" name="fecha_fin">
    </label>
    <br>
    <label>
      descripcion
      <br>
      <input type="text" name="descripcion">
  </label>
  <br>
  <label>
    cuantia
    <br>
    <input type="text" name="cuantia">
</label>   
      
      <button type="submit">Enviar Formulario:</button>
      </form>
</body>
</html>