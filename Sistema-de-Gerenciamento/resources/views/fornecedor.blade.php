@extends('layouts.main')
@section('titulo', 'Mdados')
@section('link')
<link rel="stylesheet" href="{{'.\css\inputPadrao.css'}}">
<link rel="stylesheet" href="{{'.\css\form.css'}}">
@stop
@section('content')
<div class="conteudo">
    @include('layouts.sidebar')
    <div class="form-container">
        <div class="titulo-form">Fornecedor</div> 
        <form action="{{Route("adicionarFornecedor")}}" method="POST" >
            @csrf
            <div class="dados-container">
                <div class="item-form">
                    {{-- <label for="name" class="form-label">Nome:</label>
                    <input  required ="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"> --}}
                    <div class="inputBox">
                        <input required="" type="text" name="nome" id="nome">
                        <span>Nome</span>
                      </div>  
                </div>
                <div class="item-form">
                    {{-- <label for="name" class="form-label">Email:</label>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="Digite o email"> --}}
                    <div class="inputBox">
                        <input required="" type="email" name="email" id="email">
                        <span>Email</span>  
                    </div>    
                </div>
                <div class="item-form">
                    {{-- <label for="name" class="form-label">CPF ou CNPJ:</label>
                    <input required type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" placeholder="Digite o cpf ou cnpj"> --}}
                    <div class="inputBox">
                        <input required="" type="text" name="cpf_cnpj" id="cpf_cnpj">
                        <span>CPF ou CNPJ</span>
                      </div>
                </div>
                <div class="item-form">
                    {{-- <label for="name" class="form-label">Telefone:</label>
                    <input required type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone"> --}}
                    <div class="inputBox">
                        <input required="" type="text" name="telefone" id="telefone">
                        <span>Telefone</span>
                      </div>
                </div>
                <div class="col-md-12 col-md">
                    {{-- <label for="name" class="form-label">CEP:</label>
                    <input required type="text" class="form-control" id="cep" name="cep" placeholder="Digite o cep"> --}}
                    <div class="inputBox">
                        <input required="" type="text" name="cep" id="cep">
                        <span>CEP</span>
                      </div>
                </div>
            </div>
            <div class="col-btn">
                <button type="submit" class="btn btn-save">Salvar</button>
                <button type="button" class="btn btn-cancel">Cancelar</button>
            </div>
        </form>
    </div>
</div>
<script src="{{"./js/mask.js"}}"></script>
@endsection
