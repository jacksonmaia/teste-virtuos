<?php

namespace App\Http\Controllers;
use App\Contato;
use App\Cliente;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        return view('contato.list', ['contatos'=>$contatos]);
    }
    public function create()
    {
        $clientes = Cliente::all();
        return view('contato.new', ['clientes'=>$clientes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'telefone' => 'required|max:255',
            'funcao' => 'required|max:255',
            'cliente_id' => 'required',
        ]);
        Contato::create( $request->all() );
        return redirect()->route('contato.list');
    }

    public function delete($id)
    {
        $cliente = Contato::find($id);
        $cliente->delete();
        return redirect()->route('contato.list');
    }
}
