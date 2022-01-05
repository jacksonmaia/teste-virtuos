<?php

namespace App\Http\Controllers;

use App\Cliente;
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
        return view('cliente.details', ['cliente'=>$cliente]);
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('cliente.new');
    }

    public function store(Request $request)
    {
        Cliente::create( $request->all() );
        return redirect()->route('welcome');
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('welcome');
    }
}
