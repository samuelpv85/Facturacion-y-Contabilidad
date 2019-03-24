<?php

namespace App\Http\Controllers;

use App\Roles;
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

class RolesController extends Controller
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
        $roles = Roles::all();
        return view('roles', compact('roles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Roles::all();
        return view('roles', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = new Roles;
 
        $roles->name = $request->name;
        $roles->descripcion = $request->descripcion;
//        $roles->imagen = $request->file('imagen')->store('roles');
 
        $roles->save();
 
        return redirect('roles')->with('message','Rol Creado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $roles)
    {
        $roles = Roles::find($id);
        return view('roles.edit',['roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        $roles = Roles::find($id);
        $roles->name = $request->name;
        $roles->descripcion = $request->descripcion;

        $roles->save();

        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('roles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
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
