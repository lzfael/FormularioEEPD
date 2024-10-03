<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required|digits:11|unique:usuarios',
            'rg' => 'required|digits:8|unique:usuarios',
            'data_expedicao' => 'required|date',
            'senha' => 'required|min:6|confirmed',
        ]);

        // Armazenar os dados
        Usuario::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'data_expedicao' => $request->data_expedicao,
            'senha' => Hash::make($request->senha),
        ]);

        return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
    }
}
