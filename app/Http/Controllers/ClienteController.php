<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // IMPORT PARA FUNCIONAR CONEXAO API

use App\Models\Cliente;

class ClienteController extends Controller
{
    private $response;

    public function __construct()
    {
        $this->middleware('auth');
        //$this->response = Http::get('http://localhost:8000/api/clientes');
    }
    public function consumir()
    { //RETORNA TODOS OS CLIENTES
        $api = Http::get('http://localhost:8000/api/clientes');
        $apiArray = $api->json();
        return $apiArray/*view('clientes.cliente', ['apiArray' => $apiArray])*/;
    }

    public function teste()
    {
        $api = Http::get('http://localhost:8000/api/clientes/1');
        $apiArray = $api->json();
        //dd($apiArray);
        return view('clientes.clienteid', ['apiArray' => $apiArray]);
    }
    public function todos()
    { //RETORNA TODOS OS CLIENTES SEUS DADOS DE CADASTRO E ENDERECO
        //return $this->cliente->with('endereco')->paginate();
        return $this->response;
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $objeto = [
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
        ];
        $json = json_encode($objeto);

        //dd($json);
        /*
        $json = $request->json();
        dd($json);
        */

        $api = Http::post('http://127.0.0.1:8000/api/clientes');
        return $json;
    }
}
