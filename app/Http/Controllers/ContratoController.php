<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($clienteId)
    {
        $cliente = Cliente::findOrFail($clienteId);
        $viewData = [];
        $viewData['titulo'] = 'Lista de Contratos';
        $viewData['cliente'] = $cliente;
        $viewData['contratos'] = $cliente->contratos;
        return view('contratos.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($clienteId)
    {
        $viewData = [];
        $viewData['titulo'] = 'Novo Contrato';
        $viewData['cliente'] = Cliente::find($clienteId);
        return view('contratos.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contrato = new Contrato();

        $contrato->setInicio(date('Y-m-d', strtotime($request->input('inicio'))));
        $contrato->setClienteId($request->input('cliente_id'));
        $contrato->setAtivo('1');
       
        $contrato->save();

        return redirect()->route('contratos.index',['clienteId' => $request->input('cliente_id')]);

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
        $contrato = Contrato::findOrFail($id);
        if ($contrato) {
            $viewData = [];
            $viewData['titulo'] = 'Alterar Contrato';
            $viewData['contrato'] = $contrato;
            return view('contratos.edit')->with('viewData', $viewData);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->setInicio($request->input('inicio'));
        $contrato->setClienteId($request->input('cliente_id'));

        $contrato->save();

        return redirect()->route('contratos.index',['clienteId'=>$request->input('cliente_id')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();
        return redirect()->route('contratos.index',['clienteId'=>$contrato->getClienteId()]);
    }
}
