@extends('layouts.app', ['activePage' => 'orcamentos', 'title' => 'Orçamentos', 'navName' => 'Orçamentos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-body table-full-width table-responsive">
                            <h4>Dados Do Orçamento</h4>
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Situação</th>
                                    <th>Valor Total</th>
                                    <th>Data</th>
                                </thead>
                                <tbody>
                                    <td>{{ $orcamentoJson[0]['id'] }}</td>
                                    <td>{{ $orcamentoJson[1]['nome'] }}</td>
                                    <td>{{ $orcamentoJson[0]['situacao'] }}</td>
                                    <td>{{ $orcamentoJson[0]['valortotal'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime($orcamentoJson['0']['data'])) }}</td>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-body table-full-width table-responsive">
                            <h4>Produtos Do Orçamento</h4>
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Descrição</th>
                                    <th>Material</th>
                                    <th>Valor Unitario</th>
                                    <th>Quantidade</th>
                                </thead>

                                @foreach ($orcamentoJson[2] as $produtos)
                                    <tbody>
                                        <td>{{ $produtos['id'] }}</td>
                                        <td>{{ $produtos['descricao'] }}</td>
                                        <td>{{ $produtos['material'] }}</td>
                                        <td>{{ $produtos['valor'] }}</td>
                                        <td>{{ $produtos['pivot']['quantidade'] }}</td>
                                    </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
