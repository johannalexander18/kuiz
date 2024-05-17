<h1>Editar Camionero</h1>

<form action="{{ route('camionero.update', $camionero->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>
        DNI:
        <input type="text" name="dni" value="{{ $camionero->dni }}" required>
    </label>
    <br>
    <label>
        Nombre:
        <input type="text" name="Nombre" value="{{ $camionero->Nombre }}" required>
    </label>
    <br>
    <label>
        Población:
        <input type="text" name="Poblacion" value="{{ $camionero->Poblacion }}" required>
    </label>
    <br>
    <label>
        Teléfono:
        <input type="text" name="telefono" value="{{ $camionero->telefono }}" required>
    </label>
    <br>
    <label>
        Dirección:
        <input type="text" name="Direccion" value="{{ $camionero->Direccion }}" required>
    </label>
    <br>
    <label>
        Salario:
        <input type="text" name="salario" value="{{ $camionero->salario }}" required>
    </label>
    <br>
    <button type="submit">Actualizar Camionero</button>
</form>