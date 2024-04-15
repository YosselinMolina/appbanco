<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Afiliado;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $afiliados=Afiliado::all();
        return view('afiliado.index')->with('afiliados',$afiliados);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('afiliado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $afiliado=new Afiliado();
        $afiliado->codafiliado=$request->get('codafiliado');
        $afiliado->nombre=$request->get('nombre');
        $afiliado->apellido=$request->get('apellido');
        $afiliado->ciudad=$request->get('ciudad');
        $afiliado->telefono=$request->get('telefono');
        $afiliado->edad=$request->get('edad');
        $afiliado->save();
        return redirect('/afiliado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $afiliados=Afiliado::all();
        $empleado=Empleado::find($id);
        return view('afiliado.index2')->with('empleado',$empleado)->with('afiliados',$afiliados);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarAfiliado = Afiliado::find($id);
        return view ("afiliado.edit")->with("editarAfiliado",$editarAfiliado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarAfiliado=Afiliado::find($id);
        $editarAfiliado ->Codafiliado=$request->get("codafiliado");
        $editarAfiliado ->Nombre=$request->get("nombre");
        $editarAfiliado ->Apellido=$request->get("apellido");
        $editarAfiliado ->Ciudad=$request->get("ciudad");
        $editarAfiliado ->Telefono=$request->get("telefono");
        $editarAfiliado ->Edad=$request->get("edad");
        $editarAfiliado->save();
        return redirect("afiliado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarAfiliado=Afiliado::find($id);
        $eliminarAfiliado->delete();
        return redirect("afiliado");
    }
}
