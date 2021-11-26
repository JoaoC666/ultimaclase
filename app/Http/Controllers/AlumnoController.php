<?php

namespace App\Http\Controllers;

use App\Models\AlumnoModel;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public $datosValidate=[
        'nombre'=>'required',
        'materia'=>'required',
        'curso'=>'required'        
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista=AlumnoModel::where('estado',1)->paginate(5);
        return view('alumno.index',compact('lista'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->datosValidate);
        try{
            $nuevo=new AlumnoModel($request->input());      
            $nuevo->save();
            return redirect()->route('alumno.index')->with('msg','Dato guardado');
        }catch(exception $e){   
            return redirect()->route('alumno.index')->with('msg','fallo en la subida'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato=AlumnoModel::find($id);
        return view('alumno.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=AlumnoModel::find($id);
        return view('alumno.edit',compact('dato'));
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
     

        $request->validate($this->datosValidate);
        try{
            $nuevo=AlumnoModel::find($id);      
            $nuevo->update($request->input());
            return redirect()->route('alumno.index')->with('msg','Dato guardado');
        }catch(exception $e){   
            return redirect()->route('alumno.index')->with('msg','fallo en la subida'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $nuevo=AlumnoModel::find($id);    
            $nuevo->estado=0;
            $nuevo->update();
            return redirect()->route('alumno.index')->with('msg','Dato eliminado');
        }catch(exception $e){   
            return redirect()->route('alumno.index')->with('msg','Fallo en la eliminacion'); 
    }
}
}
