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
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
