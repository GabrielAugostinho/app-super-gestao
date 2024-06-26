<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request) {
        $erro = '';
        if($request->get('erro') == 1) {
            $erro = 'Usuário ou senha não existe';
        }
        return view('site.login', ['erro' => $erro]);

        if($request->get('erro') == 2) {
            $erro = 'Necessário fazer login para acessar a pagina';
        }
        return view('site.login', ['erro' => $erro]);
    }

    public function autenticar(Request $request) {
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];
        //mensagem de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (E-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório',
        ];
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();
        if(isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] =$usuario->email;
            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair() {
        session_destroy();
        return redirect()->route('site.index');
    }
}
