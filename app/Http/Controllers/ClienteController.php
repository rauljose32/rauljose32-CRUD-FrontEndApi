<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // IMPORT PARA FUNCIONAR CONEXAO API

class ClienteController extends Controller
{
    private $response;

    public function __construct()
    {
        $this->middleware('auth');
        //$this->response = Http::get('http://localhost:8000/api/clientes');
    }
    public function consumir(Request $request)
    { //RETORNA TODOS OS CLIENTES
        $api = Http::get('http://localhost:8000/api/clientes');
        $apiArray = $api->json();

        if($request->has('cliente_id')){
            $id = $request->cliente_id;
            //$api->where('cliente_id', (int)$id);
            for($i = 0; $i <= count($apiArray['data']); $i++){
                dd('sim');
                dd('s');
            }
            //dd(count($apiArray['data']));

            //return view('clientes.cliente', ['apiArray' => $apiArray, 'id' => $id]);
        }
        return view('clientes.cliente', ['apiArray' => $apiArray]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Http::post('http://127.0.0.1:8000/api/clientes', [
            "nome" => $request->nome,
            "cpf" => $request->cpf,
            "telefone" => $request->telefone,
            "email" => $request->email,
            "profissao" => $request->profissao,
            "cep" => $request->cep,
            "logradouro" => $request->logradouro,
            "numero" => $request->numero,
            "complemento" => $request->complemento,
            "cidade" => $request->cidade,
            "estado" => $request->estado
        ]);

        return redirect("/clientes");
    }

    public function destroy($id)
    {
        Http::delete('http://127.0.0.1:8000/api/clientes/' . $id);
        return redirect("/clientes");
    }

    public function edit($id)
    {
        $api = Http::get('http://127.0.0.1:8000/api/clientes');
        $apiArray = $api->json();
        return view('clientes.edit', ['apiArray' => $apiArray, 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        Http::put('http://127.0.0.1:8000/api/clientes/' . $id,[
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'profissao' => $request->profissao,
            'cep' => $request->cep,
            "logradouro" => $request->logradouro,
            "numero" => $request->numero,
            "complemento" => $request->complemento,
            "cidade" => $request->cidade,
            "estado" => $request->estado
        ]);
        return redirect('/clientes');
    }

    public function show($id){
        $api = Http::get('http://127.0.0.1:8000/api/clientes/' . $id);
        $api->json();
        return view('clientes.show',[ 'api' => $api, 'id' => $id]);
    }
}
