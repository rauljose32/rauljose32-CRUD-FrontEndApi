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
                                            <th>ID Cliente</th>
                                            <th>Data</th>
                                            <th>Situação</th>
                                            <th>Valor Total</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($apiArray['data'] as $api)
                                            <tr>
                                                <td>{{ $api['id'] }}</td>
                                                <td>{{ $api['cliente_id'] }}</td>
                                                <td>{{ $api['data'] }}</td>
                                                <td>{{ $api['situacao'] }}</td>
                                                <td>{{ $api['valortotal'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
