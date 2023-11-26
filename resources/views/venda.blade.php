@extends('layouts.main')
@section('titulo', 'Mdados')
@section('link')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{'.\css\inputPadrao.css'}}">
<link rel="stylesheet" href="{{'.\css\form.css'}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
@stop
@section('content')
@include('layouts.sidebar')
<div class="form-container">
    <div class="titulo-form">Venda</div>
    <form action="{{Route("adicionarVenda")}}" method="POST" >
        @csrf
        <div class="dados-container">
            <div class="item-form">
                {{-- <label for="name" class="form-label">Descrição:</label>
                <input  required ="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da venda"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="descricao" id="descrica">
                    <span>Nome Loja</span>
                </div> 
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Valor:</label>
                <input required type="text" class="form-control" id="valor_total" name="valor_total" placeholder="Digite o valor total"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="valor_total" id="valor_total">
                    <span>Valor Total</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Método de pagamento:</label>
                <select  class="form-control"  name="metodo_pagamento_id" id="metodo_pagamento_id">
                    <option value="">Selecione um método de pagamento</option>
                    @foreach ($metodosPagamento as $metodo)
                        <option value="{{ $metodo->id }}">{{ $metodo->nome }}</option>
                    @endforeach
                </select> --}}
             <div class="inputBox">
                <select required="" name="metodo_pagamento_id" id="metodo_pagamento_id">
                    <option value=""disabled selected></option>
                    @foreach ($metodosPagamento as $metodo)
                        <option value="{{ $metodo->id }}">{{ $metodo->nome }}</option>
                     @endforeach
                </select>
                <span>Método de pagamento</span>
            </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Cliente:</label>
                <select  class="form-control"  name="cliente_id" id="cliente_id">
                <option value="">Selecione um cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
                </select> --}}
                <div class="inputBox">
                    <select required="" name="cliente_id" id="cliente_id">
                        <option value=""disabled selected></option>
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                    <span>Cliente</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Funcionário:</label>
                <select  class="form-control"  name="funcionario_id" id="funcionario_id">
                    <option value="">Selecione um funcionário</option>
                    @foreach ($funcionarios as $funcionario)
                        <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                    @endforeach
                </select> --}}
                <div class="inputBox">
                    <select required="" name="funcionario_id" id="funcionario_id">
                        <option value=""disabled selected></option>
                        @foreach ($funcionarios as $funcionario)
                            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                        @endforeach
                    </select>
                    <span>Funcionário</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Loja:</label>
                <select  class="form-control"  name="loja_id" id="loja_id">
                    <option value="">Selecione uma loja</option>
                    @foreach ($lojas as $loja)
                        <option value="{{ $loja->id }}">{{ $loja->nome }}</option>
                    @endforeach
                 </select> --}}
                <div class="inputBox">
                    <select required="" name="loja_id" id="loja_id">
                        <option value=""disabled selected></option>
                        @foreach ($lojas as $loja)
                            <option value="{{ $loja->id }}">{{ $loja->nome }}</option>
                        @endforeach
                    </select>
                    <span>Loja</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Moto:</label>
                <select  class="form-control"  name="moto_id" id="moto_id">
                <option value="">Selecione uma moto</option>
                @foreach ($motos as $moto)
                    <option value="{{ $moto->id }}">{{ $moto->nome }}</option>
                @endforeach
                </select> --}}
                <div class="inputBox">
                    <select required="" name="moto_id" id="moto_id">
                        <option value=""disabled selected></option>
                        @foreach ($motos as $moto)
                            <option value="{{ $moto->id }}">{{ $moto->nome }}</option>
                        @endforeach
                    </select>
                    <span>Moto</span>
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
