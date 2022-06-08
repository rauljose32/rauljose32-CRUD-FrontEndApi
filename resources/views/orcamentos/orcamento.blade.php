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

                                            @foreach ($apiArray['data'] as $api)
                                                <a href="#">
                                                    <tr>
                                                        <td>{{ $api['id'] }}</td>
                                                        <td>{{ $api['cliente']['nome'] }}</td>
                                                        <td>{{ $api['situacao'] }}</td>
                                                        <td>{{ $api['valortotal'] }}</td>
                                                        <td>{{ $api['data'] }}</td>
                                                        <td>
                                                            <div class="col-md-1 dropdown">
                                                                <a href="#" class="btn dropdown-toggle"
                                                                    data-toggle="dropdown">
                                                                    <i class="nc-icon nc-preferences-circle-rotate"></i></a>
                                                                <ul class="dropdown-menu">

                                                                    <form action="/orcamento/{{ $api['id'] }}"
                                                                        method="get">
                                                                        <button class="dropdown-item"
                                                                            type="input">Visualizar</button>
                                                                    </form>

                                                                    <form action="/produto/{{ $api['id'] }}"
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
