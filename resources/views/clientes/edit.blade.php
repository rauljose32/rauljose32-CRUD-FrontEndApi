@extends('layouts.app', ['activePage' => 'clientes', 'title' => 'Clientes',
'navName' => 'Clientes', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Criação do Cliente</h3>
                    @foreach ($apiArray['data'] as $api)
                    @if ($api['id'] == $id) {{--sim {{$api['id']}} {{$id}}--}}
                    <form action="/cliente" method="POST">

                        @csrf

                        <div class="form-group">
                            <label>Nome do Cliente</label>
                            <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome do Cliente"
                                value="{{$api['nome']}}" required>
                        </div>

                        <div class="form-group">
                            <label>CPF</label>
                            <input id="cpf" name="cpf" type="text" class="form-control" placeholder="CPF"
                            value="{{$api['cpf']}}" required>
                        </div>

                        <div class="form-group">
                            <label>Telefone</label>
                            <input id="telefone" name="telefone" type="text" class="form-control" placeholder="Telefone"
                            value="{{$api['telefone']}}" required>
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="email@email.com"
                            value="{{$api['email']}}" required>
                        </div>


                        <div class="form-group">
                            <label>Profissão</label>
                            <input id="profissao" name="profissao" type="text" class="form-control"
                            placeholder="Profissão" value="{{$api['profissao']}}" required>
                        </div>

                        {{-- <h4>Endereço do Cliente</h4>

                        <div class="form-group">
                            <label>CEP</label>
                            <input id="cep" name="cep" type="text" class="form-control" placeholder="Cep"
                            required>
                        </div>

                        <div class="form-group">
                            <label>Logradouro</label>
                            <input id="logradouro" name="logradouro" type="text" class="form-control"
                                placeholder="Logradouro" required>
                        </div>

                        <div class="form-group">
                            <label>Numero</label>
                            <input id="numero" name="numero" type="text" class="form-control" placeholder="Numero"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Complemento</label>
                            <input id="complemento" name="complemento" type="text" class="form-control"
                                placeholder="Complemento" required>
                        </div>

                        <div class="form-group">
                            <label>Cidade</label>
                            <input id="cidade" name="cidade" type="text" class="form-control" placeholder="Cidade"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <input id="estado" name="estado" type="text" class="form-control" placeholder="Estado"
                                required>
                        </div>--}}
                        <div class="text-center">
                            <button type="submit" value="" class="btn btn-primary mt-4">{{ __('Salvar') }}</button>
                        </div>
                        {{-- <button class="btn btn-primary btn-round" type="submit">Adicionar</button> --}}
                    </form>
                    @else
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
