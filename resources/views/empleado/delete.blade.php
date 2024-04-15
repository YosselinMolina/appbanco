@extends("layouts.principal")

@section("hijos")
<h1>Eliminar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$eliminarEmpleado->id}}" method = "POST">
    @csrf
    @method("Delete")
    <div class="mb-3">
    <label for="">Id</label>
    <input type="text" name="id" id = "id" value = "{{$eliminarEmpleado->id}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">CodigoEmpleado</label>
    <input type="text" name="codempleado" id = "codempleado" value = "{{$eliminarEmpleado->codempleado}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id = "nombre" value = "{{$eliminarEmpleado->nombre}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
   <input type="text" name="apellido" id = "apellido" value = "{{$eliminarEmpleado->apellido}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id = "nivel" value = "{{$eliminarEmpleado->nivel}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id = "telefono" value = "{{$eliminarEmpleado->telefono}}"class="form-control">
    </div>
    <button type = "submit">Eliminar</button>

</form>

</div>
</div>
</div>
@endsection