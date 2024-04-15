@extends("layouts.principal")

@section("hijos")
<h1>Editar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$editarEmpleado->id}}" method = "POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
    <label for="">Id</label>
    <input type="text" name="id" id = "id" value = "{{$editarEmpleado->id}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">CodigoEmpleado</label>
    <input type="text" name="codempleado" id = "codempleado" value = "{{$editarEmpleado->codempleado}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id = "nombre" value = "{{$editarEmpleado->nombre}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
   <input type="text" name="apellido" id = "apellido" value = "{{$editarEmpleado->apellido}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id = "nivel" value = "{{$editarEmpleado->nivel}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id = "telefono" value = "{{$editarEmpleado->telefono}}"class="form-control">
    </div>
    <button type = "submit">Guardar</button>

</form>

</div>
</div>
</div>
@endsection