<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use App\Models\Solicitudes;
use Illuminate\Support\Facades\DB;


class SolicitudController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-solicitud|crear-solicitud|editar-solicitud|borrar-solicitud')->only('index');
        $this->middleware('permission:crear-solicitud' , ['only'=>['create','store']] );
        $this->middleware('permission:editar-solicitud' , ['only'=>['edit','update']] );
        $this->middleware('permission:borrar-solicitud' , ['only'=>['edit','destroy']] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes =  Solicitudes::paginate(5);
        return view('solicitudes.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $servicios = Servicios::pluck('nombre_ser', 'id')->all();
        return view('solicitudes.crear', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([

            'descripcion'=>'required'
        ]);
        $solicitud = new Solicitudes();
        $solicitud->solicitante_soli = $request->input('solicitante_soli');
        $solicitud->soli_fecha = $request->input('fecha');
        $solicitud->soli_hora = $request->input('hora');
        $solicitud->servicio = $request->input('servicios');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->estado = $request->input('estado');
        $solicitud->save();
        return redirect()->route('solicitudes.index');
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
    public function edit(Solicitudes $soli)
    {

        return view('solicitudes.editar',compact('soli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $soli = Solicitudes::find($id);

        if($soli->estado!=0){
            DB::table("solicitudes")->where('id',$id)->update(['estado' => 0]);
        }elseif($soli->estado == 0){
            DB::table("solicitudes")->where('id',$id)->update(['estado' => 1]);
        }
        return redirect()->route('solicitudes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("solicitudes")->where('id_soli',$id)->delete();
        return redirect()->route('solicitudes.index');
    }
}
