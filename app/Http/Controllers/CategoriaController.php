<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required|string',
            'imagem' => 'required'
        ]);

        Categoria::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'imagem' => $request->imagem
        ]);

        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view ('admin.categorias.visualizar', [
            'categoria' => $categoria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.editar', [
            'categoria' => $categoria
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
            'imagem' => 'required'
        ]);

        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'imagem' => $request->imagem
        ]);

        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();
            return redirect()->route('categoria.index')->with('sucesso','Categoria deletado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('categoria.index')->with('error','Erro ao Deletar Categoria!');
        }
    }
}
