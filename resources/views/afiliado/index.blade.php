@extends("layouts.principal")

@section("hijos")
<h1>Modulo de Afiliado</h1>
<a href="/afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>
</br>
</br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodAfilido</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($afiliados as $afiliado)
            <tr>
                <th>{{$afiliado->id}}</th>
                <th>{{$afiliado->codafiliado}}</th>
                <th>{{$afiliado->nombre}}</th>
                <th>{{$afiliado->apellido}}</th>
                <th>{{$afiliado->ciudad}}</th>
                <th>{{$afiliado->telefono}}</th>
                <th>{{$afiliado->edad}}</th>
                <th>
                    <a href="/afiliado/{{$afiliado->id}}/edit" class="btn btn-info">Editar</a>
                    <form action="/afiliado/{{$afiliado->id}}" method="POST">
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