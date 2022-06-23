@extends('layouts.app', ['activePage' => 'clientes', 'title' => 'Clientes',
'navName' => 'Clientes', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-body table-full-width table-responsive">
                            <h4>Dados Do Cliente</h4>
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Profissão</th>
                                </thead>
                                <tbody>
                                    <td>{{ $api[0]['id'] }}</td>
                                    <td>{{ $api[0]['nome'] }}</td>
                                    <td>{{ $api[0]['cpf'] }}</td>
                                    <td>{{ $api[0]['telefone'] }}</td>
                                    <td>{{ $api[0]['email'] }}</td>
                                    <td>{{ $api[0]['profissao'] }}</td>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>CEP</th>
                                    <th>Logradouro</th>
                                    <th>Nº</th>
                                    <th>Complemento</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                </thead>
                                <tbody>
                                    <td>{{ $api[1][0]['id'] }}</td>
                                    <td>{{ $api[1][0]['cep'] }}</td>
                                    <td>{{ $api[1][0]['logradouro'] }}</td>
                                    <td>{{ $api[1][0]['numero'] }}</td>
                                    <td>{{ $api[1][0]['complemento'] }}</td>
                                    <td>{{ $api[1][0]['cidade'] }}</td>
                                    <td>{{ $api[1][0]['estado'] }}</td>
                                </tbody>
                            </table>
                        </div>
                        <h4>Orçamentos</h4>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">

                                @for ($i = 0; $i < count($orcamento['data']); $i++ )
                                    {{-- @echo( {{$orcamento['data'][$i]['cliente']['id']}} ); --}}
                                    @if ($api[0]['id'] == $orcamento['data'][$i]['cliente']['id'])
                                            <thead>
                                                <th>Data</th>
                                                <th>Situação</th>
                                                <th>Total</th>
                                                <th>Cliente</th>
                                            </thead>
                                            <tbody>
                                                <td>{{date('d/m/Y', strtotime($orcamento['data'][$i]['data']))}}</td>
                                                <td>{{$orcamento['data'][$i]['situacao']}}</td>
                                                <td>{{$orcamento['data'][$i]['valortotal']}}</td>
                                                <td>{{$orcamento['data'][$i]['cliente']['nome']}}</td>
                                                {{-- @dd($orcamento['data'][$i]);
                                                <td>{{$orcamento['data'][$i]['produtos_do_orcamento'][1]['descricao']}}</td> --}}
                                            </tbody>
                                    {{-- @elseif ($api[0]['id'] != $orcamento['data'][$i]['cliente']['id'])
                                        <p style='display:none;'>Não possui Orçamentos Cadastrados</p> --}}
                                    @endif

                                @endfor
                            </table>
                            <form action="/orcamento">{{-- METODO DO CONTROLLER --}}
                                <button class="btn btn-primary btn-round" type="submit">Adicionar Orçamento</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
