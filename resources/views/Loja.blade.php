@extends('layouts.main')
@section('titulo', 'Mdados')
@section('link')
<link rel="stylesheet" href="{{'.\css\inputPadrao.css'}}">
<link rel="stylesheet" href="{{'.\css\form.css'}}">
@stop
@section('content')
<div class="form-container">
    @include('layouts.sidebar')
    <div class="titulo-form">Loja</div>
    <form action="{{Route("adicionarLoja")}}" method="POST" >
        @csrf
        <div class="dados-container">
            <div class="item-form">
                {{-- <label for="name" class="form-label">Nome:</label>
                <input  required ="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da loja"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="nome_loja" id="nome">
                    <span>Nome Loja</span>
                </div> 
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">CEP:</label>
                <input  required type="text" class="form-control" id="cep" name="cep" placeholder="Digite o cep"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="cep" id="cep">
                    <span>CEP</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Estado:</label>
                <input required type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="estado" id="estado">
                    <span>Estado</span>
                </div>
            </div>
            <div class="item-form">
                {{-- <label for="name" class="form-label">Rua:</label>
                <input  required type="text" class="form-control" id="rua" name="rua" placeholder="Digite a rua"> --}}
                <div class="inputBox">
                    <input required="" type="text" name="endereco" id="endereco">
                    <span>Endereço</span>
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
    $(document).ready(function () {
        $('#cep').mask('00000-000');
    });
</script>
<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection