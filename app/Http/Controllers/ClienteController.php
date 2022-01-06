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
        $clienteData = $request->all();
        $documento = $clienteData['documento'];
        if(Cliente::where('documento', $documento)->count() < 1){
            Cliente::create( $request->all() );
            return redirect()->route('cliente');
        }
        return redirect('cliente/new')->with('alert', 'Cliente já cadastrado!');

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
        return redirect()->route('home');
    }
}
