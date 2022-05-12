@extends('layouts.app', ['activePage' => 'table', 'title' => 'Clientes',
'navName' => 'Clientes', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            {{-- <h4 class="card-title">Clientes</h4> --}}
                            <button class="btn btn-primary btn-round">Adicionar</button>
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

                                    <tr>
                                        <td>1</td>
                                        <td>Dakota Rice</td>
                                        <td>cpf</td>
                                        <td>tel</td>
                                        <td>email</td>
                                        <td>Developer</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
