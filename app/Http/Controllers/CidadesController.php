<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadesController extends Controller
{
    public function index() {
        return view('cidades.index', [
            'cidades' => Cidade::all(),
//            'estados' => Estado::all()
        ]);
    }

    public function create()
    {
        return view('cidades.create', [
            'estados' => Estado::all()
        ]);
    }

    public function store(Request $request)
    {
        Cidade::create(
            [
                'nome' => $request->nome,
                'cep' => $request->cep,
                'populacao' => $request->populacao,
                'estado_sigla' => $request->estado_sigla
            ]
        );

        return view('cidades.index', [
            'cidades' => Cidade::all(),
//            'estados' => Estado::all()
        ]);
    }

    public function show($id)
    {
        $cidade = Cidade::findOrFail($id);

        return view('cidades.show',
            [
                'cidade' => $cidade,
//                'estados' => Estado::all()
            ]
        );
    }

    public function edit($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('cidades.edit', ['cidade' => $cidade]);
    }

    public function update(Request $request, $id)
    {
        $cidade = Cidade::findOrFail($id);

        $cidade->update(
            [
                'nome' => $request->nome,
                'cep' => $request->cep,
                'populacao' => $request->populacao,
                'estado_sigla' => $request->estado_sigla
            ]
        );
        return view('cidades.show', ['cidade' => $cidade]);
    }

    public function delete($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('cidades.delete', ['cidade' => $cidade]);
    }

    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();

        return view('cidades.index', [
            'cidades' => Cidade::all(),
//            'estados' => Estado::all()
        ]);
    }
}
