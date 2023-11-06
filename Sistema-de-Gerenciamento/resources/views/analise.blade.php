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
        <article class="bg-gradient-green card z-depth-4 ">
          <i class="material-icons">Funcionario do Mês</i>
          <p>{{$melhorFuncionarioDoMes->nome}}</p>
          <h3>R$ {{$melhorFuncionarioDoMes->total_vendas}}</h3>       
        </article>
     </div>
     
     <div class="col s12 m4">
       <article class="bg-gradient-orange card z-depth-4 ">
         <i class="material-icons">Loja do Mês</i>
         <p>{{$melhorLojaDoMes->nome}}</p>
         <h3>{{$melhorLojaDoMes->total_vendas}}</h3>            
        </article>
      </div>
      
      <div class="col s12 m4">
        <article class="bg-gradient-blue card z-depth-4 ">
          <i class="material-icons">Moto mais vendida</i>
          <p>{{ strtoupper($motoMaisVendidaMes->nome) }}</p>
          <h3>{{ strtoupper($motoMaisVendidaMes->quantidade) }}</h3>           
        </article>
      </div>
    </section>        
  </div>

      <div class="row container ">
          {{-- <section class="graficos col s12 m6" >            
            <div class="grafico card z-depth-4">
                <h5 class="center"> Comparativos das Lojas </h5>
                <canvas id="myChart" width="400" height="200"></canvas>
              </div>           
            </section>  --}}         
            <div class="graficos col s12 m2">
              <div class="card-menu">
                <button type="button" class="bg-gradient-purple card z-depth-4 new-btn" onclick="showLoja()">
                  <i class="fa-solid fa-shop" style="color: #ffffff;"></i>
                </button>
                <button type="button" class="bg-gradient-purple card z-depth-4 new-btn" onclick="showVendedores()">
                  <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                </button>
                <a href="{{Route('exportarDados')}}" class="bg-gradient-purple card z-depth-4 new-btn">
                  <i class="fa-solid fa-download" style="color: #ffffff;"></i>
                </a>
              </div>
            </div>
            
            <section class="graficos col s12 m5" id="comparativo-loja">
              <div class="grafico card z-depth-4">
                <h5 class="center">Comparativos das Lojas</h5>
                <canvas id="myChart" width="400" height="200"></canvas>
              </div>
            </section>
            
            <section class="graficos col s12 m5" id="comparativo-vendedores">
              <div class="grafico card z-depth-4">
                <h5 class="center">Comparativos Vendedores</h5>
                <canvas id="myChart1" width="400" height="200"></canvas>
              </div>
            </section>
          <section class="graficos col s12 m5">            
              <div class="grafico card z-depth-4">
                <h5 class="center"> Top Motos Vendidas </h5>
                <canvas id="myChart2" width="400" height="200"></canvas> 
              </div>            
          </section>             
      </div>

      <div class="row container">
        <section class="info">
          <div class="col s12 m4">
            <article class="bg-gradient-white card z-depth-4 new ">
              <i class="fa-solid fa-sack-dollar black-text"></i>
              <i class="material-icons black-text">Média Venda/Ano</i>
              <h3 class="black-text">{{ $mediaAritmeticaGeral}}</h3>           
            </article>
          </div>
          <div class="col s12 m4">
            <article class="bg-gradient-white card z-depth-4 new ">
                  <i class="fa-solid fa-shop black-text"></i>
                  <i class="material-icons black-text">Menor Resultado</i>
              <h3 class="black-text">{{$piorLojadoMes->nome}}</h3>
            </article>
          </div>
          <div class="col s12 m4">
            <article class="bg-gradient-white card z-depth-4 new ">
              <i class="fa-solid fa-user black-text"></i>
              <i class="material-icons black-text">Menor Resultado</i>
              <h3 class="black-text">{{$piorFuncionarioDoMes->nome}}</h3>
            </article>
          </div>
        </section>        
      </div>
</div>



  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</div>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection

@push('graficos')
<script>
/* Gráfico 01 */
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [{!! $nomeLoja !!}],
        datasets: [{
            label: 'Mês Atual',
            data: [{{$totalVendas}}],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                         
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                     
                'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1, 
        },
        {
            label: {{$ano}},
            data: [{{$totalVendasAno}}],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                         
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                     
                'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1, 
        }]
    }
    ,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/* Gráfico 01 -  funcionarios */
var ctx = document.getElementById('myChart1');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [{!! $nomeVendedor !!}],
        datasets: [{
            label: 'Mês Atual',
            data: [{{$totalVendasVendedor}}],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                         
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                     
                'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1, 
        },
        // labels: [{!! $nomeVendedorAno !!}],
        {
            label: {{$ano}},
            data: [{{$totalVendasVendedorAno}}],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                         
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                     
                'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1, 
        }
      ]
    }
    ,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/* Gráfico 02 */
var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [{!!$motosMaisVendidaMes!!}],
        datasets: [{
            label: 'Visitas',
            data: [{{$quantidadeMotosMaisVendidaMes}}],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',                         
                'rgba(255, 159, 64)'
            ]
        }]
    }
});

// Gráfico 03
const mixedChart = new Chart(ctx, {
    data: {
        datasets: [{
            type: 'bar',
            label: 'Bar Dataset',
            data: [10, 20, 30, 40]
        }, {
            type: 'line',
            label: 'Line Dataset',
            data: [50, 50, 50, 50],
        }],
        labels: ['January', 'February', 'March', 'April']
    },
    options: options
});
</script>
<script>
  $(document).ready(function(){
    document.getElementById('comparativo-loja').style.display = 'block';
    document.getElementById('comparativo-vendedores').style.display = 'none';
  });

  function showLoja() {
    document.getElementById('comparativo-loja').style.display = 'block';
    document.getElementById('comparativo-vendedores').style.display = 'none';
  }

  function showVendedores() {
    document.getElementById('comparativo-loja').style.display = 'none';
    document.getElementById('comparativo-vendedores').style.display = 'block';
  }
</script>
@endpush