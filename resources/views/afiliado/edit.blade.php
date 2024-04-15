@extends("layouts.principal")

@section("hijos")
<h1>Editar Afiliado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado/{{$editarAfiliado->id}}" method = "POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
    <label for="">Id</label>
    <input type="text" name="id" id = "id" value = "{{$editarAfiliado->id}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">CodigoEmpleado</label>
    <input type="text" name="codafiliado" id = "codafiliado" value = "{{$editarAfiliado->codafiliado}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id = "nombre" value = "{{$editarAfiliado->nombre}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
   <input type="text" name="apellido" id = "apellido" value = "{{$editarAfiliado->apellido}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" id = "ciudad" value = "{{$editarAfiliado->ciudad}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id = "telefono" value = "{{$editarAfiliado->telefono}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad" id = "edad" value = "{{$editarAfiliado->edad}}"class="form-control">
    </div>
    <button type = "submit">Guardar</button>

</form>

</div>
</div>
</div>
@endsection