<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /* Controller de login */

    public function administracao() 
    {
        /*depois vemos como ficará a área admin*/
        return view ('admin.administracao');
    }


    public function LoginClient()
    {
        if(Auth::check() === true) {
            return view ('produtos');
    } 
        else {
            return redirect() -> route ('/loginClient', 'loginUser@LoginClient');
        }

    public function LoginClient(){
        $credenciais = [
        $user->email = $request->email,
        $user->password = $request->password
            ];
        Auth::Attempt($credenciais);
        }
    }
}
