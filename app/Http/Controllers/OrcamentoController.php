<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrcamentoController extends Controller
{
    public function consumir()
    { //RETORNA TODOS OS Orçamentos
        $api = Http::get('http://127.0.0.1:8000/api/orcamentos');
        $apiArray = $api->json();
        return view('orcamentos.orcamento', ['apiArray' => $apiArray]);
    }
    public function create()
    {
        $produtos = Http::get('http://127.0.0.1:8000/api/produtos');
        $produtosArray = $produtos->json();
        $clientes = Http::get('http://localhost:8000/api/clientes');
        $clientesArray = $clientes->json();
        return view('orcamentos.create', ['clientesArray' => $clientesArray, 'produtosArray' => $produtosArray]);
    }

    public function store(Request $request)
    {
        dd($request);

        Http::post('http://127.0.0.1:8000/api/orcamento', [
            "id_cliente" => $request->id_cliente,
            "data" => $request->data,
            "situacao" => $request->situacao,
            "id_produto[]" => $request->id_produto,
            "quantidade[]" => $request->quantidade
        ]);

        return view("orcamentos.orcamento");
    }
}
