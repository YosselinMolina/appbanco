@extends("layouts.principal")

@section("hijos")
<h1>Modulo de Empleado</h1>

<a href="/empleado/create" class="btn btn-primary">Crear Nuevo Empleado</a>
</br>
</br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <th>{{$empleado->id}}</th>
                <th>{{$empleado->codempleado}}</th>
                <th>{{$empleado->nombre}}</th>
                <th>{{$empleado->apellido}}</th>
                <th>{{$empleado->nivel}}</th>
                <th>{{$empleado->telefono}}</th>
                <th>
                    <a href="/empleado/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                    <a href="afiliado/{{$empleado->id}}" class="btn btn-success">Afiliados</a>
                    <form action="/empleado/{{$empleado->id}}" method="POST">
                        @csrf
                        @method("Delete")
                        <button  class="btn btn-warning">Eliminar</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection