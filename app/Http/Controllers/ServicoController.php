<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;


class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();
        return view('admin.servicos.index', [
            'servicos' => $servicos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servicos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'titulo' => 'required',
                'descricao' => 'required',
                'valor' => 'required|decimal:10.2',
                'telefone' => 'required',
                'celular' => 'required',
                'endereco' => 'required',
                'numero' => 'required',
                'complemento' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'cep' => 'required',
                'usuario_id' => 'required|number',
                'categoria_id' => 'required|number'

        ]);

        Servico::create([
            'titulo' => $request->titulo,
            'valor' => $request->valor,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'usuario_id' => $request->usuario_id,
            'categoria_id' => $request->categoria_id
            
        ]);

        return redirect()->route('servico.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servico = Servico::findOrFail($id);
        return view ('admin.servicos.visualizar', [
            'servico' => $servico
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servico = Servico::findOrFail($id);
        return view('admin.servicos.editar', [
            'servico' => $servico
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required|string',
            'valor' => 'required'
        ]);

        $servico = Servico::findOrFail($id);

        $servico->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'valor' => $request->valor
        ]);

        return redirect()->route('servico.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $servico = Servico::findOrFail($id);
            $servico->delete();
            return redirect()->route('servico.index')->with('sucesso','Servico deletado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('servico.index')->with('error','Erro ao Deletar Servico!');
        }
    }
}
