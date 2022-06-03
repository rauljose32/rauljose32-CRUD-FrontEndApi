@extends('layouts.app', ['activePage' => 'orcamentos', 'title' => 'Orçamentos', 'navName' => 'Orçamentos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Criação do Orcamento</h3>
                    <form action="/orcamento" method="POST">

                        @csrf

                        <div class="form-group">
                            <label>Cliente do Orçamento</label>
                            <select class="form-control" name="id_cliente" id="id_cliente">
                                @foreach ($clientesArray['data'] as $c)
                                    <option value="{{ $c['id'] }}">{{ $c['nome'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Data do Orçamento</label>
                            <input class="form-control" type="date" id="data" name="data">
                        </div>

                        <div class="form-group">
                            <label>Situação do Orçamento</label>
                            <select class="form-control" name="situacao" id="situacao">
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Demonstrativo">Demonstrativo</option>
                            </select>
                        </div>

                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Descrição</th>
                                    <th>Material</th>
                                    <th>Valor</th>
                                    <th>Quantidade</th>
                                    <th>Adicionar</th>
                                </thead>
                                <tbody>

                                    @foreach ($produtosArray['data'] as $produto)
                                        <a href="#">
                                            <tr>
                                                <td>{{ $produto['id'] }}</td>
                                                <td>{{ $produto['descricao'] }}</td>
                                                <td>{{ $produto['material'] }}</td>
                                                <td>{{ $produto['valor'] }}</td>
                                                <td><input class="form-control" type="number" name="quantidade[]"
                                                        id="quantidade[]"></td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="id_produto[]" name="id_produto[]"
                                                                value="{{ $produto['id'] }}">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </a>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                            <button type="submit" value="" class="btn btn-primary mt-4">{{ __('Salvar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
