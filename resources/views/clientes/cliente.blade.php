@extends('layouts.app', ['activePage' => 'clientes', 'title' => 'Clientes',
'navName' => 'Clientes', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="col-md-6">
                            <div class="card-header ">
                            {{-- <h4 class="card-title">Ctdentes</h4> --}}
                            <form action="/cliente">{{-- METODO DO CONTROLLER --}}
                                <button class="btn btn-primary btn-round" type="submit">Adicionar</button>
                            </form>
                            </div>
                        </div>
                            {{----}}
                        <div class="col-6">
                            <form action="/clientes" method="GET">
                                <div class="imobSelect">
                                    <select name="key" id="cliente">
                                        <option value="Selecione">Selecione</option>
                                        @foreach ($apiArray['data'] as $api)
                                            <option value="{{$api['id']}}">{{$api['nome']}}</option>
                                        @endforeach
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
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Ações</th>
                                </thead>
                                <tbody>

                                    @foreach ($apiArray['data'] as $api)
                                            <tr>
                                                <td>{{ $api['id'] }}</td>
                                                <td>{{ $api['nome'] }}</td>
                                                <td>{{ $api['cpf'] }}</td>
                                                <td>{{ $api['telefone'] }}</td>
                                                <td>{{ $api['email'] }}</td>
                                                <td>{{ $api['endereco']['cidade'] }}</td>
                                                <td>{{ $api['endereco']['estado'] }}</td>
                                                <td>
                                                    <div class="col-md-1 dropdown">
                                                        <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                                            <i class="nc-icon nc-preferences-circle-rotate"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <form action="/cliente/{{ $api['id'] }}" method="GET">
                                                                <button class="dropdown-item" type="input">Visualizar</button>
                                                            </form>
                                                            <form action="edit/{{$api['id']}}" method="POST">
                                                                @csrf
                                                                <button class="dropdown-item" type="input">Atualizar</button>
                                                            </form>

                                                            <form action="/cliente/{{ $api['id'] }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="dropdown-item" type="input">Excluir</button>
                                                            </form>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
