<h1>Listar Camioneros</h1>

@foreach ($camioneros as $camionero)
<tr>
    <br>
    <td>{{ $camionero->dni }}</td>
    <td>{{ $camionero->Nombre }}</td>
    <td>{{ $camionero->Poblacion }}</td>
    <td>{{ $camionero->telefono }}</td>
    <td>{{ $camionero->Direccion }}</td>
    <td>{{ $camionero->salario }}</td>
    <td><a href="{{ route('camionero.show', $camionero->id) }}">Mostrar</a></td>
    <td><a href="{{ route('camionero.edit', $camionero->id) }}">Editar</a></td>
    <td>
        <form action="{{ route('camionero.destroy', $camionero->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach