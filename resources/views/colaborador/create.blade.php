<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <h1>Agregar colaborador</h1>
    <form method="POST" action="{{route('colaborador.store')}}">
      @csrf
        <h1>datos del colaborador</h1>
      <label>
          nif
          <br>
          <input type="text" name="nif">
      </label>
      <br>
      <label>
          nombre
          <br>
          <input type="text" name="nombre">
      </label>
      
      
    
</body>
</html>