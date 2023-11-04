@extends('layouts.main')
@section('titulo', 'Mdados')
@section('link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@stop
@section('content')
@include('layouts.sidebar')


<div class="form-container" style="margin: 5px;">

  <div class="row container">
    <section class="info">
      <div class="col s12 m4">
        <article class="bg-gradient-blue card z-depth-4 ">
          <i class="material-icons">Moto mais vendida</i>
          <p>Usuários</p>
          <h3>34 </h3>           
        </article>
        </div>

        <div class="col s12 m4">
          <article class="bg-gradient-orange card z-depth-4 ">
            <i class="material-icons">Loja do Mês</i>
            <p>Pedidos este mês</p>
            <h3>0</h3>            
          </article>
          </div>

          <div class="col s12 m4">
            <article class="bg-gradient-red card z-depth-4 ">
              <i class="material-icons">Funcionario do Mês</i>
              <p>Nome</p>
              <h3>R$ 123,00</h3>       
            </article>
         </div>
    </section>        
  </div>

      <div class="row container ">
          <section class="graficos col s12 m6" >            
            <div class="grafico card z-depth-4">
                <h5 class="center"> Aquisição de usuários</h5>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>           
          </section> 
          
          <section class="graficos col s12 m6">            
              <div class="grafico card z-depth-4">
                  <h5 class="center"> Produtos </h5>
              <canvas id="myChart2" width="400" height="200"></canvas> 
          </div>            
         </section>             
      </div>

</div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/chart.js" ></script>
  <script src="js/main.js"></script>

</div>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection