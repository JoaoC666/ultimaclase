<?php

namespace App\Http\Controllers;

use App\Models\NotasModel;
use Illuminate\Http\Request;


class NotasController extends Controller
{
    public $datosValidate=[
        'nota'=>'required'  
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listant=NotasModel::where('estado',1)->paginate(5);
        return view('notas.index',compact('listant'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create');
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
            $nuevo=new NotasModel($request->input());      
            $nuevo->save();
            return redirect()->route('notas.index')->with('msg','Dato guardado');
        }catch(exception $e){   
            return redirect()->route('notas.index')->with('msg','fallo en la subida'); 
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
        $datont=NotasModel::find($id);
        return view('notas.show',compact('datont'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datont=NotasModel::find($id);
        return view('notas.edit',compact('datont'));
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
            $nuevo=NotasModel::find($id);      
            $nuevo->update($request->input());
            return redirect()->route('notas.index')->with('msg','Dato guardado');
        }catch(exception $e){   
            return redirect()->route('notas.index')->with('msg','fallo en la subida'); 
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
            $nuevo=NotasModel::find($id);    
            $nuevo->estado=0;
            $nuevo->update();
            return redirect()->route('notas.index')->with('msg','Dato eliminado');
        }catch(exception $e){   
            return redirect()->route('notas.index')->with('msg','Fallo en la eliminacion'); 
    }
}
}

