@extends('layouts.main')
@section('titulo', 'Mdados')
@section('link')
<link rel="stylesheet" href="{{'.\css\inputPadrao.css'}}">
<link rel="stylesheet" href="{{'.\css\form.css'}}">
@stop
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

<div class="form-container">
    @include('layouts.sidebar')
    <div class="titulo-form">Moto</div>
    <form action="{{Route("adicionarMoto")}}" method="POST" >
        @csrf
        <div class="dados-container">
            <div class="item-form">
                {{-- <label for="name" class="form-label">Nome:</label>
                <input  required ="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da moto"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="nome" id="nome">
                    <span>Nome Moto</span>
                </div> 
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Ano:</label>
                <input required type="date" class="form-control" id="ano" name="ano" placeholder="Digite o ano da moto"> --}}
                <div class="inputBox">
                    <input required="" type="date" name="ano" id="ano">
                    <span>Ano</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Marca:</label>
                <input required type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="marca" id="marca">
                    <span>Marca</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Modelo:</label>
                <input required type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite a modelo"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="modelo" id="modelo">
                    <span>Modelo</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Preço:</label>
                <input required type="number" class="form-control" id="preco" name="preco" placeholder="Digite a preço"> --}}
                <div class="inputBox">
                    <input required="" type="number" name="preco" id="preco">
                    <span>Preço</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Loja:</label>
                <select class="form-control js-example-basic-single" name="loja_id" id="loja_id">
                    <option value="">Selecione uma loja</option>
                    @foreach ($lojas as $loja)
                        <option value="{{ $loja->id }}">{{ $loja->nome }}</option>
                    @endforeach
                </select> --}}
                <div class="inputBox">
                    <select required="" type="text" name="loja_id" id="loja_id">
                        <option value=""disabled selected></option>
                        @foreach ($lojas as $loja)
                            <option value="{{ $loja->id }}">{{ $loja->nome }}</option>
                        @endforeach
                    </select>
                    <span>Loja</span>
                </div>
            </div>

            <div class="item-form">
                {{-- <label for="name" class="form-label">Fornecedor:</label>
                <select class="form-control" name="forncedor_id" id="forncedor_id">
                    <option value="">Selecione um fornecedor</option>
                    @foreach ($fornecedores as $forncedor)
                        <option value="{{ $forncedor->id }}">{{ $forncedor->nome }}</option>
                    @endforeach
                </select> --}}
                <div class="inputBox">
                    <select required="" type="text" name="forncedor_id" id="forncedor_id">
                        <option value=""disabled selected></option>
                        @foreach ($fornecedores as $forncedor)
                            <option value="{{ $forncedor->id }}">{{ $forncedor->nome }}</option>
                        @endforeach
                    </select>
                    <span>Fornecedor</span>
                </div>
            </div>
        </div>
        <div class="col-btn">
            <button type="submit" class="btn btn-save">Salvar</button>
            <button type="button" class="btn btn-cancel">Cancelar</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection
