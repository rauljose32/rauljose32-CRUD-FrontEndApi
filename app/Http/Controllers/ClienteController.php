<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;// IMPORT PARA FUNCIONAR CONEXAO API

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
        return view('clientes.cliente', ['apiArray' => $apiArray]);
    }

    public function teste(){
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
}
