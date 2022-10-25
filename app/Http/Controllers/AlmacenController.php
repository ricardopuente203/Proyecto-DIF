<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Almacen;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacen=Almacen::all();
        return view('indexA',compact('almacen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createA');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       {
           
        $almacen=new Almacen();
        $almacen->NombreApoyo=$request->input('NombreApoyo');
        $almacen->DescripcionApoyo=$request->input('DescripcionApoyo');
        $almacen->RequisitosApoyo=$request->input('RequisitosApoyo');
        $almacen->NumeroDespensas=$request->input('NumeroDespensas');
        $almacen->PeriodoDuracion=$request->input('PeriodoDuracion');
        
        $almacen->save();
        return 'Guardado';
        
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
        $almacen=Almacen::find($id);
        return view('showA',compact('almacen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Almacen $almacen)
    {
        return view('editA',compact('almacen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacen $almacen)
    {  
        $almacen->fill($request->except('CredencialLector'));
        if ($request->hasFile('CredencialLector')){
            $file= $request->file('CredencialLector');
            $Nombre=time().$file-> getClientOriginalName();
            

        //Imagen
        $almacen->CredencialLector=$Nombre;
        $file->move(public_path(  ).'/images',$Nombre);
        }   
        $almacen->save();
        return redirect('almacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=almacen::FindOrFail($id);
        if(file_exists('images/'.$data->CredencialLector)AND !empty($data->CredencialLector)){
            unlink('images/'.$data->CredencialLector);
        }
        try{
            $data->delete();
            $bug=0;
        }
        catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            echo"success";
        }else{
            echo'error';
        }
    
      
    
    }
}
