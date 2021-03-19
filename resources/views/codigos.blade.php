
@extends('layout'); @section('content');
        
<a href="agregar" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Código</th>
<th scope="col">Descripción</th>
<th scope="col">Cantidad</th>
<th scope="col">Precio</th>
<th scope="col">Acciones</th>
</tr>
</thead>
<tbody>    

@forelse ($codigos as $codigo)
<tr>
    <td>{!! $codigo->id !!}</td>
    <td>{!! $codigo->codigo !!}</td>
    <td>{!! $codigo->descripcion !!}</td>
    <td>{!! $codigo->cantidad !!}</td>
    <td>{!! $codigo->precio !!}</td>
    <td>
    <form action="{{ url("codigos/$codigo->id") }}" method="POST">
      <a href="{{ route('codigos.edit', ['id' => $codigo->id]) }}" class="btn btn-info">Editar</a>         
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>          
    </td>        
</tr>
@empty
<p>No hay registros que mostrar en este momento</p>
@endforelse

</tbody>
</table>

@endsection