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


use Redirect;

class RolesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
         * @return \Illuminate\Http\Response
    */
    public function index()
    {   
        try {
            //select * a la tabla
            $roles = Roles::all();
        // enviamos $roles por medio de 'roles'
        // vista 
            \Log::info('Administración - Control de Acceso -  Permisos y Roles');
            \Log::info(request()->route()->getActionName());
            // 'roles'->varianle a enviar a la vista
            // $roles-> valores obtenidos del select
            return view('administracion/roles', ['roles' => $roles]);
            //otra forma de enviar la variable a la vista
            // return view('administracion/roles', compact(roles));
        } catch (Exception $e) {
            \Log::debug($e);
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retornar a una vista de crear. este caso un modal
        // $roles = Roles::all();
        // return view('administracion/roles', compact('roles'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
            $this->validate($request, [
                'rolname' => 'required|unique:roles',
                'descripcion' => 'required',
            ]);
            // if ($validate->fails()){
            // }
            $data = $request;

            $roles=new Roles;
            $roles->rolname=$data['rolname'];
            $roles->descripcion=$data['descripcion'];
            // if (DB::table('roles')->where('rolname', $roles)->exists()) {
            //     echo " rol duplicado";
            // }else{
            if($roles->save()){
                \Log::info('Rol ' . $roles->rolname . ' Creado con Exito!!');
                \Log::info(request()->route()->getActionName());
                return redirect('roles')->with('status', 'Rol ' . $roles->rolname . ' Creado con Exito!!');
                // \Log::info('Info Crear Usuario');
                // Log::stack(['single', 'slack'])->info('Something happened!');
//        $roles->imagen = $request->file('imagen')->store('roles');
            // }   
            }
            // else {
            //     # code...
            // return Redirect::back()->withErrors($user->errors)->withInput();
            // }            
        // } catch (Exception $e) {
        //     Log::debug($e);
        //     Log::stack(['single', 'slack'])->info('Something happened!');
        // }
    }

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
        // $roles = Roles::find($id);
        return view('administracion/roles', compact('roles'));
        // return view('administracion/roles.edit',['roles'=>$roles]);
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
        return Redirect::to('administracion/roles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Roles $roles)
    public function destroy($id)
    {
        Roles::find($id)->delete();
        return redirect('roles')->with('status', 'Rol ' . $roles->rolname . ' Eliminado con Exito!!');
        // $imagen = Postres::find($id);

        // foreach($imagen as $image){
        //     Storage::delete($image['imagen']);
        // }

        // Postres::destroy($id);        

        // Session::flash('message', 'Eliminado Satisfactoriamente !');
        // return Redirect::to('admin/postres');
    }
}
