<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request) {
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('UF', 'like', '%'.$request->input('UF').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->get();
        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
    }

    
    public function adicionar() {
        return view('app.fornecedor.adicionar');
    }

    public function adicionarFornecedor(Request $request) {
        $regras = [
            'nome' => 'required',
            'site' => 'required',
            'UF' => 'required',
            'email' => 'required',
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);

        Fornecedor::create($request->all());

        return redirect()->route('app.fornecedor')->with('msg', 'Cadastro realizado com sucesso');
    }
    

    public function editar($id) {
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.editar', ['fornecedor' => $fornecedor]);
    }

    public function atualizar(Request $request, $id) {
        $regras = [
            'nome' => 'required',
            'site' => 'required',
            'UF' => 'required',
            'email' => 'required',
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);

        $fornecedor = Fornecedor::find($id);
        if (!$fornecedor) {
            abort(404);
        }

        $fornecedor->update($request->all());

        return redirect()->route('app.fornecedor')->with('msg', 'Registro atualizado com sucesso');
    }

    public function destroy($id){
        $fornecedor = Fornecedor::find($id);
        $fornecedor->delete();
    
        return redirect()->route('app.fornecedor')->with('msg', 'Registro atualizado com sucesso');
    }
}