<?php

namespace App\Http\Controllers;

use App\Models\Materiales;
use Illuminate\Http\Request;
$id;
class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['material']= Materiales::paginate(10);
        return view('material.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosMaterial=request()->all();
        $datosMaterial=request()->except('_token','total_por_producto');
        Materiales::insert($datosMaterial);
        //total_por_producto=precio*stock;
        //return response()->json($datosMaterial);
        return redirect('material')->with('mensaje','material agregado');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function show(Materiales $materiales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $materiales=Materiales::findOrFail($id);
        return view('material.edit',compact('materiales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMaterial=request()->except(['_token','_method']);
        Materiales::where('id','=',$id)->update ($datosMaterial);


        $materiales=Materiales::findOrFail($id);
        return view('material.edit',compact('materiales'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
       
        Materiales::destroy($id);
        
        return redirect('material')->with('mensaje','material eliminado');
    }
}
