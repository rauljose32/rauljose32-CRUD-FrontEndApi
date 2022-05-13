<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // IMPORT PARA FUNCIONAR CONEXAO API

class ProdutoController extends Controller
{
    private $response;

    public function __construct()
    {
        $this->middleware('auth');
        //$this->response = Http::get('http://localhost:8000/api/clientes');
    }

    public function consumir()
    { //RETORNA TODOS OS PRODUTOS
        $api = Http::get('http://127.0.0.1:8000/api/produtos');
        $apiArray = $api->json();
        return view('produtos.produto', ['apiArray' => $apiArray]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Http::post('http://127.0.0.1:8000/api/produto', [
            "descricao" => $request->descricao,
            "material" => $request->material,
            "unidade" => $request->unidade,
            "espessura" => $request->espessura,
            "valor" => $request->valor
        ]);

        return redirect("/produtos");
    }

    public function destroy($id)
    {
        Http::delete('http://127.0.0.1:8000/api/produto/' . $id);
        return redirect("/produtos");
    }

    public function edit($id)
    {
        $api = Http::get('http://127.0.0.1:8000/api/produto/' . $id);
        $apiArray = $api->json();
        //dd($apiArray);
        return view('produtos.edit', ['apiArray' => $apiArray]);
    }

    public function update(Request $request, $id)
    {
        Http::put('http://127.0.0.1:8000/api/clientes/' . $id, [
            "descricao" => $request->descricao,
            "material" => $request->material,
            "unidade" => $request->unidade,
            "espessura" => $request->espessura,
            "valor" => $request->valor
        ]);
        return redirect("/produtos");
    }
}
