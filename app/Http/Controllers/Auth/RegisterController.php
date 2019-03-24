<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Routing\Redirector;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function getRegister()
    {
        return view("administracion/registro");
    }

    protected function postRegister(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users|min:3', //valida que el usuario sea unico y tenga minimo 3 caracteres
            'email' => 'required|email',
            'password' => 'required|min:5',//valida que el passwor tenga minimo 6 caracteres
        ]);

        $data = $request;

        $user=new User;
        $user->firstname=$data['firstname'];
        $user->lastname=$data['lastname'];
        $user->username=$data['username'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);

        if($user->save()){
            return redirect('administracion/register')->with('status', 'Usuario ' . $user->username . ' Creado con Exito!!');
            // return response()
            // ->view('registro', $data, 200)
            // ->header('Content-Type', $user);
        }
        //return (' ERROR... No se pudo crear el Usuario');        
 }


}
