<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Produto;
use App\Models\ProdutoContrato;
use Illuminate\Http\Request;

class ProdutoContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($contratoId)
    {
        $viewData = [];
        $contrato = Contrato::findOrFail($contratoId);
        $viewData['produtos'] = $contrato->produtos();
        $viewData['titulo'] = 'Produtos do Contrato';
        return view('produtos_contratos.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($contratoId)
    {
        $contrato = Contrato::findorFail($contratoId);
        $viewData['contrato'] = $contrato;
        $produtos = Produto::get();
        $viewData['produtos'] = $produtos;
        $viewData['titulo'] = 'Adicionar Produtos ao Contrato';
        return view('produtos_contratos.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtoContrato = new ProdutoContrato();
        $produtoContrato->setContratoId($request->input('contrato_id'));
        $produtoContrato->setProdutoId($request->input('produto_id'));
        $produtoContrato->setQuantidade($request->input('quantidade'));
        $produtoContrato->setValor($request->input('valor'));
        $produtoContrato->save();
        
        return redirect()->route('contratos.show',['id' => $request->input('contrato_id')]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produtoContrato = ProdutoContrato::findOrFail($id);
        $produtoContrato->delete();
        return redirect()->route('contratos.show',['id'=>$produtoContrato->getContratoId()]);
    }
}
