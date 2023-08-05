<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Cliente;
use App\Models\Observacao;

class ObservacaoController extends Controller
{
    public function index($contratoId)
    {
        $contrato = Contrato::findOrFail($contratoId);
        $viewData = [];
        $viewData['contrato'] = $contrato;
        $cliente = Cliente::findOrFail($contrato->getClienteId());
        $viewData['cliente'] = $cliente;
        $viewData['observacoes'] = $contrato->observacoes;
        $viewData['titulo'] = 'Lista de Observações do Contrato: '.$viewData['contrato']->getId(). ' => ' . $viewData['cliente']->getNome() .' ( '.  $viewData['cliente']->getCnpj() . ' ) ';
        return view('observacoes.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($contratoId)
    {
        $viewData = [];
        $viewData['titulo'] = 'Nova Observação';
        $contrato = Contrato::find($contratoId);
        $viewData['contrato'] = $contrato;
        $cliente = Cliente::findOrFail($contrato->getClienteId());
        $viewData['cliente'] = $cliente;
        return view('observacoes.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $observacao = new Observacao();

        $observacao->setObservacao($request->input('observacao'));
        $observacao->setPrazo($request->input('prazo'));
        $observacao->setUrlTarefa($request->input('url_tarefa'));
        $observacao->setTarefa($request->input('tarefa'));
        $observacao->setContratoId($request->input('contrato_id'));
       
        $observacao->save();

        return redirect()->route('observacoes.index',['contratoId' => $request->input('contrato_id')]);

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
        $observacao = Observacao::findOrFail($id);
        if ($observacao) {
            $viewData = [];
            $viewData['titulo'] = 'Alterar Observação';
            $viewData['observacao'] = $observacao;

            $contrato = Contrato::find($observacao->getContratoId());
            $viewData['contrato'] = $contrato;
            $cliente = Cliente::findOrFail($contrato->getClienteId());
            $viewData['cliente'] = $cliente;
    
            return view('observacoes.edit')->with('viewData', $viewData);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $observacao = Observacao::findOrFail($id);
        $observacao->setObservacao($request->input('observacao'));
        $observacao->setPrazo($request->input('prazo'));
        $observacao->setUrlTarefa($request->input('url_tarefa'));
        $observacao->setTarefa($request->input('tarefa'));
        $observacao->setContratoId($request->input('contrato_id'));

        $observacao->save();

        return redirect()->route('observacoes.index',['contratoId'=>$request->input('contrato_id')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $observacao = Observacao::findOrFail($id);
        $observacao->delete();
        return redirect()->route('observacoes.index',['contratoId'=>$observacao->getContratoId()]);
    }
}
