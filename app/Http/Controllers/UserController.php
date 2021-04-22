<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class UserController extends Controller
{
    public function search(request $request){
        $users=User::all();
        foreach($users as $user){
            if( $user->name == $request->name && $user->password == $request->password){
                // return view('home')->with('mensaje','$user->name');
                $nombre = explode(" ", strval($user->name));
               
                return view('home', ['mensaje' => $nombre[0]]);
            }
        }
        return back()->with('error','Usuario o contraseña inválidos');

    }
    public function create(request $request){
        // $name = $request->name;
        // $balance = $request->balance;

        // $request->validate([
        //     'email'=>'email|min:0',
        //     'name'=>'min:4',
        // ]);
        
        if($this->valida($request->email)){
            $user=new user;
            $user->email=$request->email;
            $user->name=$request->name;
            $user->password=$request->password;
            $user->save();
            return $this->show();
        }
        return back()->with('error','Correo duplicado');
       
        
        // dd($request->all());
        
    }
    public function valida($email){
        $users=User::all();
        foreach($users as $user){
            if( $user->email == $email ){
               return false;
            }
            // dd($users);
            return true;
        }
        return true;
    }

    public function show()
    {
     
        $users=user::all();
        // echo $name,$balance;
        // dd($request);
        return view('login');
    }
}
