@extends("layouts.principal")

@section("hijos")
<h1>Crear Afiliado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado" method = "POST">
    @csrf
    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codafiliado" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad"  class="form-control">
    </div>
    <button type = "submit">Guardar</button>

</form>

</div>
</div>
</div>

@endsection