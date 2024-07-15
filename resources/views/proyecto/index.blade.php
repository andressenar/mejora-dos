<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    h1>Lista proyecto</h1>

    @foreach ($proyecto as $proyecto)
    <tr>
        <br>
        
        <td>{{$proyecto->codigo}}</td>
        <td>{{$proyecto->fecha_inicio}}</td>
        <td>{{$proyecto->fecha_inicio}}</td>
        <td>{{$proyecto->descripcion}}</td>
        <td>{{$proyecto->cuantia}}</td>
        
        <br>
        <td><a href="{{route('proyecto.show',$proyecto->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('proyecto.destroy',$proyecto->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            <br>
            <td><a href="{{route('proyecto.edit',$proyecto->id)}}">Editar</a></td> 
        </form>
@endforeach

</body>
</html>