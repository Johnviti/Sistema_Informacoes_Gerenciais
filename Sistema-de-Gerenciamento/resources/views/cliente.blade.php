@extends('layouts.main')
@section('titulo', 'Mdados')
@section('link')
<link rel="stylesheet" href="{{'.\css\inputPadrao.css'}}">
<link rel="stylesheet" href="{{'.\css\form.css'}}">
@stop
@section('content')
@include('layouts.sidebar')
<div class="form-container">
    <div class="titulo-form">Cliente</div>
    <form action="{{Route("adicionarCliente")}}" method="POST" >
        @csrf
        <div class="dados-container">
            <div class="item-form">
                <div class="inputBox">
                    <input required="" type="text" name="nome" id="nome">
                    <span>Nome</span>
                  </div>                 
            </div>
            <div class="item-form">
                <div class="inputBox">
                    <input required="" type="email" name="email" id="email">
                    <span>Email</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox">
                    <input required="" type="text" name="cpf" id="cpf">
                    <span>CPF</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox">
                    <input required="" type="text" name="telefone" id="telefone">
                    <span>Telefone</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox">
                    <input required="" type="text" name="cep" id="cep">
                    <span>CEP</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox"> 
                    <input required="" type="text" name="estado" id="estado">
                    <span>Estado</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox"> 
                    <input required="" type="text" name="cidade" id="cidade">
                    <span>Cidade</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox">  
                    <input required="" type="text" name="bairro" id="bairro">
                    <span>Bairro</span>
                </div>
            </div>
            <div class="item-form">
                <div class="inputBox xg">
                    <input required="" type="text" name="rua" id="rua">
                    <span>Rua</span> 
                </div>
            </div>
        </div>
        <div class="col-btn">
            <button type="submit" class="btn btn-save">Salvar</button>
            <button type="button" class="btn btn-cancel">Cancelar</button>
        </div>
    </form>
</div>
<script src="{{"./js/mask.js"}}"></script>
<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection
