@extends("layouts.principal")

@section("hijos")

Nombre de Empleado: {{$empleado->codempleado}} {{$empleado->nombre}} {{$empleado->apellido}}

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
                    <a href="/retiro/{{$afiliado->id}}/{{$empleado->id}}" class="btn btn-info">Retiro</a>
                    <a href="/deposito/{{$afiliado->id}}/{{$empleado->id}}" class="btn btn-info">Deposito</a>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection