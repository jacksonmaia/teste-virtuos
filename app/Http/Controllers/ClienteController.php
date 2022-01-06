<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Contato;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('welcome', ['clientes'=>$clientes]);
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        $contatos = Contato::all();
        return view('cliente.details', ['cliente'=>$cliente, 'contatos'=>$contatos]);
    }

    public function create()
    {
        return view('cliente.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'tipo' => 'required|max:255',
            'documento' => 'required|unique:clientes|max:255',
            'email' => 'required|max:255',
            'telefone' => 'required|max:255',
            'endereco' => 'required',
            'estado' => 'required|max:255',
            'cidade' => 'required|max:255',
        ]);
        Cliente::create( $request->all() );
        return redirect()->route('cliente');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.update', ['cliente'=>$cliente]);
    }

    public function update(Request $request, $id)
    {
        $clienteData = $request->all();
        $cliente = Cliente::find($id);
        $cliente->update($clienteData);
        return redirect()->route('cliente');
    }

    public function delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        $contato = Contato::where('cliente_id', $id);
        $contato->delete();
        return redirect()->route('welcome');
    }
}
