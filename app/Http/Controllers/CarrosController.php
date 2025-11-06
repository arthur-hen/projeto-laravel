<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    /**
     * Lista todos os veículos (dashboard admin)
     */
    public function index()
    {
        $carros = Carros::all();
        return view('admin.carros.index', compact('carros'));
    }

    /**
     * Exibe o formulário de criação de um novo veículo
     */
    public function create()
    {
        return view('admin.carros.form');
    }

    /**
     * Salva um novo veículo no banco de dados
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'cor' => 'required|string|max:50',
            'ano_fabricacao' => 'required|integer',
            'quilometragem' => 'required|numeric',
            'valor' => 'required|numeric',
            'foto1' => 'required|url',
            'foto2' => 'required|url',
            'foto3' => 'required|url',
        ]);

        $carro = new Carros();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        $carro->quilometragem = $request->input('quilometragem');
        $carro->valor = $request->input('valor');
        $carro->foto1 = $request->input('foto1');
        $carro->foto2 = $request->input('foto2');
        $carro->foto3 = $request->input('foto3');
        $carro->save();

        return redirect()->route('admin.dashboard')->with('success', 'Veículo cadastrado com sucesso!');
    }

    /**
     * Exibe o formulário de edição de um veículo
     */
    public function edit($id)
    {
        $carro = Carros::findOrFail($id);
        return view('admin.carros.form', compact('carro'));
    }

    /**
     * Atualiza um veículo existente
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'cor' => 'required|string|max:50',
            'ano_fabricacao' => 'required|integer',
            'quilometragem' => 'required|numeric',
            'valor' => 'required|numeric',
            'foto1' => 'required|url',
            'foto2' => 'required|url',
            'foto3' => 'required|url',
        ]);

        $carro = Carros::findOrFail($id);
        $carro->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Veículo atualizado com sucesso!');
    }

    /**
     * Exclui um veículo
     */
    public function destroy($id)
    {
        $carro = Carros::findOrFail($id);
        $carro->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Veículo excluído com sucesso!');
    }
}
