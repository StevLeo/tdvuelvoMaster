<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateUser(int $id) {
        $user = User::find($id);
        
        $user->fill([
            'cedula'         => request()->get('cedula'),
            'name'        => request()->get('name'),
            'identification'    => request()->get('identification'),
            'email'             => request()->get('email'),
            'telefono'             => request()->get('telefono'),
        ])->save();

        return redirect('miperfil');
    }

    public function getUsers(){
        $users = User::where('id','=','1')->get();
        //$users = User::get();
    }

    public function getDatosGeo(){
        $provincias = Provincia::get();
        //return $provincias;
        return view('registro', ['provincias' => $provincias]);
    }

    public function getCanton($id){
        $cantones = Canton::where('id_provincia','=',$id)->get();
        //$cantones = Canton::get();
        return $cantones;
    }

    public function profile() {
        $user = \Auth::user()->id;
        $cuentas = Cuenta::where('user_id','=',$user)->get();
        return view('perfil', ['cuentas' => $cuentas]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function updatePass() {
        
        $this->validate(request(), ['password' => 'required|min:6|confirmed',]);

        $user = User::find(\Auth::user()->id);
        
        $user->fill([
            'password' => Hash::make(request()->get('password')),
        ])->save();

        return redirect('miperfil');
    }
}