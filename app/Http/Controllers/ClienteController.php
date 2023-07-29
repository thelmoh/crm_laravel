<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData['clientes'] = Cliente::all();
        $viewData['titulo'] = 'Lista de Clientes';
        return view('clientes.index')->with('viewData', $viewData);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData['titulo'] = 'Novo Cliente';
        return view('clientes.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->setNome($request->input('nome'));
        $cliente->setCnpj(preg_replace("/\.|\-|\//", "", $request->input('cnpj')));
        $cliente->setResponsavel($request->input('responsavel'));
        $cliente->setEndereco($request->input('endereco'));
        $cliente->setNumero($request->input('numero'));
        $cliente->setBairro($request->input('bairro'));
        $cliente->setComplemento($request->input('complemento'));
        $cliente->setCidade($request->input('cidade'));
        $cliente->setUf($request->input('uf'));
        $cliente->setCep(preg_replace("/\.|\-|\//", "", $request->input('cep')));
        $cliente->setTelefone(preg_replace("/\(|\)|\ |\-|\.|\-/", "", $request->input('telefone')));
        $cliente->setCelular(preg_replace("/\(|\)|\ |\-|\.|\-/", "", $request->input('celular')));
        $cliente->setEmail($request->input('email'));
        $cliente->setAtivo('1');
       
        $cliente->save();

        return redirect()->route('clientes.index');

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
        $cliente = Cliente::findOrFail($id);
        if ($cliente) {
            $viewData = [];
            $viewData['titulo'] = 'Alterar Cliente';
            $viewData['cliente'] = $cliente;
            return view('clientes.edit')->with('viewData', $viewData);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->setNome($request->input('nome'));
        $cliente->setCnpj(preg_replace("/\.|\-|\//", "", $request->input('cnpj')));
        $cliente->setResponsavel($request->input('responsavel'));
        $cliente->setEndereco($request->input('endereco'));
        $cliente->setNumero($request->input('numero'));
        $cliente->setBairro($request->input('bairro'));
        $cliente->setComplemento($request->input('complemento'));
        $cliente->setCidade($request->input('cidade'));
        $cliente->setUf($request->input('uf'));
        $cliente->setCep(preg_replace("/\.|\-|\//", "", $request->input('cep')));
        $cliente->setTelefone(preg_replace("/\(|\)|\ |\-|\.|\-/", "", $request->input('telefone')));
        $cliente->setCelular(preg_replace("/\(|\)|\ |\-|\.|\-/", "", $request->input('celular')));
        $cliente->setEmail($request->input('email'));

        $cliente->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
