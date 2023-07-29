<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData['produtos'] = Produto::all();
        $viewData['titulo'] = 'Lista de Produtos';
        return view('produtos.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData['titulo'] = 'Novo Produto';
        return view('produtos.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = new Produto();

        $produto->setDescricao($request->input('descricao'));
        $produto->setPrecoPadrao($request->input('preco_padrao'));
        $produto->setAtivo('1');
       
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        if ($produto) {
            $viewData = [];
            $viewData['titulo'] = 'Alterar Produto';
            $viewData['produto'] = $produto;
            return view('produtos.edit')->with('viewData', $viewData);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = produto::findOrFail($id);
        $produto->setDescricao($request->input('descricao'));
        $produto->setPrecoPadrao($request->input('preco_padrao'));

        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
