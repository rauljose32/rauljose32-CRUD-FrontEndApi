<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrcamentoController extends Controller
{
    public function consumir(Request $request)
    { //RETORNA TODOS OS ORCAMENTOS

        $api = Http::get('http://127.0.0.1:8000/api/orcamentos');
        $apiArray = $api->json();

        if($request->has('key')){
            $id = $request->key;

            $apifilter = Http::get('http://localhost:8000/api/orcamentos?key=' . $id);
            $apifilter->json();
            return view('orcamentos.orcamentofilter', ['apifilter' => $apifilter, 'apiArray' => $apiArray]);
        }

        return view('orcamentos.orcamento', ['apiArray' => $apiArray]);
    }
    public function create()
    {
        $produtos = Http::get('http://127.0.0.1:8000/api/produtos');
        $produtosArray = $produtos->json();

        // $orcamento = Http::get('http://127.0.0.1:8000/api/orcamentos/');
        // $o = $orcamento->json();
        // dd($o['data'][6]['produtos_do_orcamento'][0]['pivot']['quantidade']);

        // dd($produtosArray['data'][0]['valor']);
        $clientes = Http::get('http://localhost:8000/api/clientes');
        $clientesArray = $clientes->json();
        return view('orcamentos.create', ['clientesArray' => $clientesArray, 'produtosArray' => $produtosArray]);
    }

    public function store(Request $request)
    {
        $produtos = Http::get('http://127.0.0.1:8000/api/produtos');
        $produtosArray = $produtos->json();
        $valor = $produtosArray['data'][0]['valor'];

        $orcamento = Http::get('http://127.0.0.1:8000/api/orcamentos/');
        $o = $orcamento->json();
        // for ($i = 0; $i < count($o['data']); $i++ ){
        //     // dd($o['data'][$i]);
            //$quantidade = $o['data'][1]['produtos_do_orcamento'][0]['pivot']['quantidade'];


        Http::post('http://127.0.0.1:8000/api/orcamento', [
            "cliente_id" => $request->cliente_id,
            "data" => $request->data,
            "valortotal" => $valor ,//* $quantidade,
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

    public function destroy($id)
    {
        Http::delete('http://127.0.0.1:8000/api/orcamento/' . $id);
        return redirect("/orcamentos");
    }
}
