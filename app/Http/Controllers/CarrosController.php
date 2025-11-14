<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{

    public function index()
    {
        $carros = Carros::all();
        return view('admin.carros.index', compact('carros'));
    }


    public function create()
    {
        return view('admin.carros.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'marca'          => 'required|string|max:100',
            'modelo'         => 'required|string|max:100',
            'cor'            => 'required|string|max:50',
            'ano_fabricacao' => 'required|integer',
            'quilometragem'  => 'required|numeric',
            'descricao'      => 'nullable|string|max:2000',
            'valor'          => 'required|numeric',
            'foto1'          => 'required|url',
            'foto2'          => 'required|url',
            'foto3'          => 'required|url',
        ]);

        Carros::create($validated);

        return redirect()
            ->route('admin.carros.index')
            ->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $carro = Carros::findOrFail($id);
        return view('admin.carros.form', compact('carro'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'marca'          => 'required|string|max:100',
            'modelo'         => 'required|string|max:100',
            'cor'            => 'required|string|max:50',
            'ano_fabricacao' => 'required|integer',
            'quilometragem'  => 'required|numeric',
            'valor'          => 'required|numeric',
            'descricao'      => 'nullable|string|max:2000',
            'foto1'          => 'required|url',
            'foto2'          => 'required|url',
            'foto3'          => 'required|url',
        ]);

        $carro = Carros::findOrFail($id);
        $carro->update($validated);

        return redirect()
            ->route('admin.carros.index')
            ->with('success', 'Veículo atualizado com sucesso!');
    }

 
    public function destroy($id)
    {
        $carro = Carros::findOrFail($id);
        $carro->delete();

        return redirect()
            ->route('admin.carros.index')
            ->with('success', 'Veículo excluído com sucesso!');
    }


    public function publicIndex()
    {
        $carros = Carros::all();
        return view('template.index', compact('carros'));
    }


    public function show($id)
    {
        $carro = Carros::findOrFail($id);
        return view('template.carros_detalhes', compact('carro'));
    }
}
