<?php

namespace App\Http\Controllers;

use App\Models\ExamenModel;
use Illuminate\Http\Request;


class ExamenController extends Controller
{
    public $datosValidate=[
        'tipo'=>'required'   
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaex=ExamenModel::where('estado',1)->paginate(5);
        return view('examen.index',compact('listaex'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examen.create');
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
            $nuevo=new ExamenModel($request->input());      
            $nuevo->save();
            return redirect()->route('examen.index')->with('msg','Dato guardado');
        }catch(exception $e){   
            return redirect()->route('examen.index')->with('msg','fallo en la subida'); 
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
        $datoex=ExamenModel::find($id);
        return view('examen.show',compact('datoex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datoex=ExamenModel::find($id);
        return view('examen.edit',compact('datoex'));
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
            $nuevo=new ExamenModel($request->input());      
            $nuevo->update($request->input);
            return redirect()->route('examen.index')->with('msg','Dato guardado');
        }catch(exception $e){   
            return redirect()->route('examen.index')->with('msg','fallo en la subida'); 
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
            $nuevo=ExamenModel::find($id);    
            $nuevo->estado=0;
            $nuevo->update();
            return redirect()->route('examen.index')->with('msg','Dato eliminado');
        }catch(exception $e){   
            return redirect()->route('examen.index')->with('msg','Fallo en la eliminacion'); 
    }
}
}
