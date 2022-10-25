<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\APvigentes;

class APvigentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apvigentes=APvigentes::all();
        return view('indexAP',compact('apvigentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createAP');
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
           
            $apvigentes=new APvigentes();
            $apvigentes->NombreDeApoyo=$request->input('NombreDeApoyo');
            $apvigentes->PeriodoDeDuracion=$request->input('PeriodoDeDuracion');
            
            
            $apvigentes->save();
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
        $apvigentes=APvigentes::find($id);
        return view('showAP',compact('apvigentes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $apvigentes = APvigentes::find($id);
        return view('editAP',compact('apvigentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $apvigentes = APvigentes::find($id);

        $apvigentes->NombreDeApoyo=$request->input('NombreDeApoyo');
        $apvigentes->PeriodoDeDuracion=$request->input('PeriodoDeDuracion');

        $input = $request->all();
        $apvigentes->update($input);
        return redirect('apvigentes');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=apvigentes::FindOrFail($id);
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
