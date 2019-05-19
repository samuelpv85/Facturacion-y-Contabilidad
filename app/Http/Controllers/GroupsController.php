<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

/**
* Traits para dar soporte al guardado y almacenamiento de datos en el servidor como DB, Input, Storage
*/

use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

use Session;
use Redirect;

class GroupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Groups::all();
        return view('administracion/grupos', ['grupos' => $grupos]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  $groups = Groups::all();
        // return view('administracion/grupos', compact('administracion/grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'groupname' => 'required',
                'descripcion' => 'required',
            ]);

            // if ($validate->fails()){

            // }

            $data = $request;

            $grupos=new Groups;
            $grupos->groupname=$data['groupname'];
            $grupos->descripcion=$data['descripcion'];

            if($grupos->save()){
                return redirect('grupos')->with('status', 'Grupo ' . $grupos->groupname . ' Creado con Exito!!');
                // Log::stack(['single', 'slack'])->info('Something happened!');
//        $roles->imagen = $request->file('imagen')->store('roles');
            }



       }
    /**
     * Display the specified resource.
     *
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show(Groups $groups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit(Groups $groups)
    {
        $groups = Groups::find($id);
        return view('administracion/grupos.edit',['groups'=>$groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groups $groups)
    {
        $groups = Groups::find($id);
        $groups->groupname = $request->groupname;
        $groups->descripcion = $request->descripcion;
        $groups->active = $request->active;
        
        $groups->save();

        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('administracion/grupos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groups $groups)
    {
         // $imagen = Postres::find($id);
 
        // foreach($imagen as $image){
        //     Storage::delete($image['imagen']);
        // }
 
        // Postres::destroy($id);        
 
        // Session::flash('message', 'Eliminado Satisfactoriamente !');
        // return Redirect::to('admin/postres');
    }
}
