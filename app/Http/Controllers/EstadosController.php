<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index() {
        return view('estados.index', [
            'estados' => Estado::all()
        ]);
    }

    public function create()
    {
        return view('estados.create');
    }

    public function store(Request $request)
    {
        Estado::create(
            [
                'nome' => $request->nome,
                'sigla' => $request->sigla,
                'populacao' => $request->populacao
            ]
        );

        return view('estados.index', [
            'estados' => Estado::all()
        ]);
    }

    public function show($id)
    {
        $estado = Estado::findOrFail($id);
        return view('estados.show', ['estado' => $estado]);
    }

    public function edit($id)
    {
        $estado = Estado::findOrFail($id);
        return view('estados.edit', ['estado' => $estado]);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);

        $estado->update(
            [
                'nome' => $request->nome,
                'sigla' => $request->sigla,
                'populacao' => $request->populacao
            ]
        );
        return view('estados.show', ['estado' => $estado]);
    }

    public function delete($id)
    {
        $estado = Estado::findOrFail($id);
        return view('estados.delete', ['estado' => $estado]);
    }

    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
//        $estado->cidades()->delete();
        $estado->delete();

        return view('estados.index', [
            'estados' => Estado::all()
        ]);
    }
}
