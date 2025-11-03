<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
{
    $clientes = Cliente::all();
    return view('clientes.clientes', compact('clientes'));
}


    public function create()
    {
        return view('clientes.cadastrar');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->email = $request->input('email');
        $cliente->save();

        return redirect('/clientes')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.alterar', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->email = $request->input('email');
        $cliente->save();

        return redirect('/clientes')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes')->with('success', 'Cliente excluído com sucesso!');
    }
}
