@extends('layouts.app', ['activePage' => 'orcamentos', 'title' => 'Orçamentos', 'navName' => 'Orçamentos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            {{-- <h4 class="card-title">Ctdentes</h4> --}}
                            <form action="/orcamento">{{-- METODO DO CONTROLLER --}}
                                <button class="btn btn-primary btn-round" type="submit">Adicionar</button>
                            </form>
                        </div>

                        <div class="col-6">
                            <form action="/orcamentos" method="GET">
                                <div class="imobSelect">
                                    <select name="key" id="orcamento">
                                        <option value="Selecione">Filtrar Situação</option>
                                        <option value="1">1 - Ativo</option>
                                        <option value="2">2 - Demonstrativo</option>
                                        <option value="3">3 - Inativo</option>
                                    </select>
                                    <button type="submit" class="btn">Enviar</button>
                                </div>
                            </form>
                        </div>
                            <style>
                                .imobSelect select {
                                    width: 300px;
                                    color: #474747;
                                    padding: 10px 7px 7px 7px;
                                    font-size: 14px;
                                    border: 1px solid #cbcbcb;
                                    border-radius: 5px;
                                    }
                                    .teste{
                                        width: 300px;
                                        color: #474747;
                                    padding: 10px 7px 7px 7px;
                                    font-size: 14px;
                                    border: 1px solid #cbcbcb;
                                    border-radius: 5px;
                                    }
                                    .imobSelect option {
                                        height: 50px;
                                        border: 1px solid #cbcbcb;
                                        padding: 50px;
                                    }
                            </style>


                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>ID</th>
                                            <th>Cliente</th>
                                            <th>Situação</th>
                                            <th>Valor Total</th>
                                            <th>Data</th>
                                            <th>Ações</th>
                                        </thead>
                                        <tbody>
                                            {{-- @dd($apifilter[1]['cliente']['nome']); --}}
                                            {{-- @dd($apiArray['data']); --}}
                                            {{-- @for ($i = 0; $i < count($apiArray['data']); $i++ )
                                                @if ($apifilter[0]['situacao'] == $apiArray['data'][$i]['situacao'])
                                                    <td>{{ $apifilter[$i]['cliente']['nome'] }}</td>
                                                    {{ 'sim' }}
                                                @endif
                                            @endfor --}}

                                            {{-- @foreach ($apiArray['data'] as $api)
                                                <a href="#">
                                                    <tr>
                                                        <td>{{ $api['id'] }}</td>
                                                        <td>{{ $api['cliente']['nome'] }}</td>
                                                            @if ($api['situacao'] == 1)
                                                                <td>1 - Ativo</td>
                                                                @elseif ($api['situacao'] == 2)
                                                                    <td>2 - Demonstrativo</td>
                                                                    @elseif ($api['situacao'] == 3)
                                                                        <td>3 - Inativo</td>
                                                            @endif
                                                        <td>{{ $api['valortotal'] }}</td>
                                                        <td>{{ $api['data'] }}</td>
                                                        <td>
                                                            <div class="col-md-1 dropdown">
                                                                <a href="#" class="btn dropdown-toggle"
                                                                    data-toggle="dropdown">
                                                                    <i class="nc-icon nc-preferences-circle-rotate"></i></a>
                                                                <ul class="dropdown-menu">

                                                                    <form action="/orcamento/{{ $api['id'] }}"
                                                                        method="GET">
                                                                        <button class="dropdown-item"
                                                                            type="input">Visualizar</button>
                                                                    </form>
                                                                    <form action="/orcamento/{{ $api['id'] }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="dropdown-item"
                                                                            type="input">Excluir</button>
                                                                    </form>

                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </a>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
