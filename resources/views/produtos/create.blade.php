@extends('layouts.app', ['activePage' => 'produtos', 'title' => 'Produtos',
'navName' => 'Produtos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Criação do Cliente</h3>
                    <form action="/produto" method="POST">

                        @csrf

                        <div class="form-group">
                            <label>Descrição do Produto</label>
                            <input id="descricao" name="descricao" type="text" class="form-control"
                                placeholder="Descrição do Produto" required>
                        </div>

                        <div class="form-group">
                            <label>Material do Produto</label>
                            <input id="material" name="material" type="text" class="form-control"
                                placeholder="Material do Produto" required>
                        </div>

                        <div class="form-group">
                            <label>Unidade</label>
                            <input id="unidade" name="unidade" type="text" class="form-control" placeholder="Unidade"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Espessura</label>
                            <input id="espessura" name="espessura" type="text" class="form-control"
                                placeholder="Espessura" required>
                        </div>

                        <div class="form-group">
                            <label>Valor</label>
                            <input id="valor" name="valor" type="text" class="form-control" placeholder="Valor" required>
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
