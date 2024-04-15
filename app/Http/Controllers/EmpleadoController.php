<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados=Empleado::all();
        return view('empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado = new Empleado();
        $empleado->codempleado = $request->get("codempleado");
        $empleado->nombre = $request->get("nombre");
        $empleado->apellido = $request->get("apellido");
        $empleado->nivel = $request->get("nivel");
        $empleado->telefono = $request->get("telefono");
        $empleado->save();
        return redirect("/empleado");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarEmpleado=Empleado::find($id);
        return view("empleado.delete")->with("eliminarEmpleado", $eliminarEmpleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarEmpleado = Empleado::find($id);
        return view ("empleado.edit")->with("editarEmpleado",$editarEmpleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarEmpleado=Empleado::find($id);
        $editarEmpleado ->Codempleado=$request->get("codempleado");
        $editarEmpleado ->Nombre=$request->get("nombre");
        $editarEmpleado ->Apellido=$request->get("apellido");
        $editarEmpleado ->Nivel=$request->get("nivel");
        $editarEmpleado ->Telefono=$request->get("telefono");
        $editarEmpleado->save();
        return redirect("empleado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarEmpleado=Empleado::find($id);
        $eliminarEmpleado->delete();
        return redirect("empleado");
    }
}
