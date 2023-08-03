<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index($clienteId)
    {
        $cliente = Cliente::findOrFail($clienteId);
        $viewData = [];
        $viewData['titulo'] = 'Lista de Contatos';
        $viewData['cliente'] = $cliente;
        $viewData['contatos'] = $cliente->contatos;
        return view('contatos.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($clienteId)
    {
        $viewData = [];
        $viewData['titulo'] = 'Novo Contato';
        $viewData['cliente'] = Cliente::find($clienteId);
        return view('contatos.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contato = new Contato();

        $contato->setNome($request->input('nome'));
        $contato->setTelefone($request->input('telefone'));
        $contato->setEmail($request->input('email'));
        $contato->setClienteId($request->input('cliente_id'));
       
        $contato->save();

        return redirect()->route('contatos.index',['clienteId' => $request->input('cliente_id')]);

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
        $contato = Contato::findOrFail($id);
        if ($contato) {
            $viewData = [];
            $viewData['titulo'] = 'Alterar Contato';
            $viewData['contato'] = $contato;
            return view('contatos.edit')->with('viewData', $viewData);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contato = Contato::findOrFail($id);
        $contato->setNome($request->input('nome'));
        $contato->setTelefone($request->input('telefone'));
        $contato->setEmail($request->input('email'));
        $contato->setClienteId($request->input('cliente_id'));

        $contato->save();

        return redirect()->route('contatos.index',['clienteId'=>$request->input('cliente_id')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();
        return redirect()->route('contatos.index',['clienteId'=>$contato->getClienteId()]);
    }
}
