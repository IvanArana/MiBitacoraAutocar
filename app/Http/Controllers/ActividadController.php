<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misactividades=Actividad::all();
        return view('actividad.index')->with('misactividades',$misactividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $misactividades = new Actividad();

        $misactividades->titulo = $request->get('titulo');
        $misactividades->descripcion = $request->get('descripcion');
        $misactividades->tipounidad = $request->get('tipounidad');
        $misactividades->numunidad = $request->get('numunidad');
        $misactividades->estatus = $request->get('estatus');

        $misactividades->save();

        return redirect('/actividades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $miactividad=Actividad::find($id);
        return view('actividad.edit')->with('miactividad',$miactividad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $miactividad = Actividad::find($id);

        $miactividad->titulo = $request->get('titulo');
        $miactividad->descripcion = $request->get('descripcion');
        $miactividad->tipounidad = $request->get('tipounidad');
        $miactividad->numunidad = $request->get('numunidad');
        $miactividad->estatus = $request->get('estatus');

        $miactividad->save();

        return redirect('/actividades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
