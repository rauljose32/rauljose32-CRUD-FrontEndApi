<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrcamentoController extends Controller
{
    public function consumir()
    { //RETORNA TODOS OS ORCAMENTOS
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
        //dd($request->produtos);
        //$api = Http::get('http://127.0.0.1:8000/api/produtos');
        //$todosProdutos = $api->json();
        //$produtos = $request->produtos;
        //dd($produtos, $todosProdutos);
        $valor = 5;


        Http::post('http://127.0.0.1:8000/api/orcamento', [
            "cliente_id" => $request->cliente_id,
            "data" => $request->data,
            "valortotal" => $valor,
            "situacao" => $request->situacao,
            "produtos" => $request->produtos
        ]);
        return redirect("/orcamentos");
    }

    public function show($id)
    {
        $orcamento = Http::get('http://127.0.0.1:8000/api/orcamento/' . $id);
        $orcamentoJson = $orcamento->json();
        //dd($orcamentoJson);
        return view("orcamentos.show", ['orcamentoJson' => $orcamentoJson]);
    }
}
