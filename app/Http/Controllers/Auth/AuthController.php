<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Routing\Redirector;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
   
    use ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//login
    protected function getLogin()
    {
        return view("login");
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            // \Log::debug( 'sesion', [auth()->user()->username] );
            return view("home");
        }
        return back()->withErrors(['userpass' => 'Credenciales No Coinciden']);
    }
//login
 //registro   
    protected function getRegister()
    {
        // $this->auth->getRegister();
        $this->middleware('auth');
        return view("registro");
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
            return redirect('register')->with('status', 'Usuario ' . $user->username . ' Creado con Exito!!');
            // return response()
            // ->view('registro', $data, 200)
            // ->header('Content-Type', $user);
        }
        //return (' ERROR... No se pudo crear el Usuario');        
 }
//registro
 protected function getLogout()
 {
    $this->auth->logout();
    Session::flush();
    \Log::info( request()->route()->getActionName(), ['closed session']);
    return redirect('login');
}
}
