@extends('layouts.app', ['activePage' => 'clientes', 'title' => 'Clientes',
'navName' => 'Clientes', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            {{-- <h4 class="card-title">Ctdentes</h4> --}}
                            <form action="/teste" >{{--METODO DO CONTROLLER--}}
                                <button class="btn btn-primary btn-round" type="submit">Adicionar</button>
                            </form>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Profissão</th>
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
                                            <td>{{ $api['profissao'] }}</td>
                                            <td>
                                                <div class="col-md-1 dropdown">
                                                    <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                                        <i class="nc-icon nc-preferences-circle-rotate"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">Atualizar</button>
                                                        <button class="dropdown-item" type="button">Excluir</button>
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
