@extends('layouts.app', ['activePage' => 'produtos', 'title' => 'Produtos', 'navName' => 'Produtos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Alteração do Produto</h3>
                    @foreach ($apiArray['data'] as $api)
                        @if ($api['id'] == $id)
                            <form action="/update/{{ $id }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Descrição do Produto</label>
                                    <input id="descricao" name="descricao" type="text" class="form-control"
                                        placeholder="Descrição do Produto" value="{{ $api['descricao'] }}">
                                </div>

                                <div class="form-group">
                                    <label>Material do Produto</label>
                                    <input id="material" name="material" type="text" class="form-control"
                                        placeholder="Material do Produto" value="{{ $api['material'] }}">
                                </div>

                                <div class="form-group">
                                    <label>Unidade</label>
                                    <input id="unidade" name="unidade" type="text" class="form-control"
                                        placeholder="Unidade" value="{{ $api['unidade'] }}">
                                </div>

                                <div class="form-group">
                                    <label>Espessura</label>
                                    <input id="espessura" name="espessura" type="text" class="form-control"
                                        placeholder="Espessura" value="{{ $api['espessura'] }}">
                                </div>

                                <div class="form-group">
                                    <label>Valor</label>
                                    <input id="valor" name="valor" type="text" class="form-control" placeholder="Valor"
                                        value="{{ $api['valor'] }}">
                                </div>

                                <div class="text-center">
                                    <button type="submit" value=""
                                        class="btn btn-primary mt-4">{{ __('Salvar') }}</button>
                                </div>

                            </form>
                        @else
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
