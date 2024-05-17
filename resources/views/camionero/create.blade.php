<h1>Crear Camionero</h1>

<form action="{{ route('camionero.store') }}" method="POST">
    @csrf

    <label>
        DNI:
        <input type="text" name="dni" required>
    </label>
    <br>
    <label>
        Nombre:
        <input type="text" name="Nombre" required>
    </label>
    <br>
    <label>
        Población:
        <input type="text" name="Poblacion" required>
    </label>
    <br>
    <label>
        Teléfono:
        <input type="text" name="telefono" required>
    </label>
    <br>
    <label>
        Dirección:
        <input type="text" name="Direccion" required>
    </label>
    <br>
    <label>
        Salario:
        <input type="text" name="salario" required>
    </label>
    <br>
    <button type="submit">Crear Camionero</button>
</form>