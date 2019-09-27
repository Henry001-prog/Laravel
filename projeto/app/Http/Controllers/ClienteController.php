<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ClientRequest;
use App\Cliente;

class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        $total = Cliente::all()->count();
        //$clientes = Cliente::orderBy('created_at', 'desc')->paginate(10);
        return view('list-clientes', compact('clientes', 'total'));
    }

    public function create() {
        return view('include-cliente');
    }

    public function store(Request $request) {
        $client = new Cliente;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->description = $request->description;
        $client->id_client = $request->id_client;
        $client->type = $request->type;
        $client->value = $request->value;

        //$cliente = $cliente->create(request->all());
        $client->save();
        return redirect()->route('client.index')->with('message', 'Conta de cliente criada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $client = Cliente::findOrFail($id);
        return view('alter-cliente', compact('client'));
    }

    public function update(Request $request, $id) {
        $client = Cliente::findOrFail($id); 
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Dados do cliente alterados com sucesso!');
    }

    public function destroy($id) {
        $client = Cliente::findOrFail($id);
        $client->delete();
        return redirect()->route('client.index')->with('message', 'Conta excluído com sucesso!');
    }

}
