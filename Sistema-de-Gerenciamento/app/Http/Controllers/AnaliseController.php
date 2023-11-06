<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Venda;
use App\Exports\DadosRelatorio;
use Maatwebsite\Excel\Facades\Excel;



class AnaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
        $melhorFuncionarioDoMes = Venda::select('funcionario.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('funcionario', 'venda.funcionario_id', '=', 'funcionario.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('funcionario.nome')
            ->orderBy('total_vendas', 'desc')
            ->first();

        $melhorLojaDoMes = Venda::select('loja.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('loja.nome')
            ->orderBy('total_vendas', 'desc')
            ->first();

        $motoMaisVendidaMes = Venda::select('moto_id', 'moto.nome', DB::raw('COUNT(*) as quantidade'))
            ->join('moto', 'venda.moto_id', '=', 'moto.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('moto_id', 'moto.nome')
            ->orderByDesc('quantidade')
            ->first();


        $comparacaoVendasLojas = Venda::select('loja_id', 'loja.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('loja_id', 'loja.nome')
            ->orderBy('total_vendas', 'desc')
            ->get();

        
        foreach ($comparacaoVendasLojas as $loja) {
            $nomeLoja[] = "'".$loja->nome."'";
            $totalVendas[] = $loja->total_vendas;
        }

        $nomeLoja = implode(',', $nomeLoja);
        $totalVendas = implode(',', $totalVendas);


        $comparacaoVendasLojasAno = Venda::select('loja_id', 'loja.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->whereYear('venda.created_at', date('Y'))
            ->groupBy('loja_id', 'loja.nome')
            ->orderBy('total_vendas', 'desc')
            ->get();

        
        foreach ($comparacaoVendasLojasAno as $loja) {
            $nomeLojaAno[] = "'".$loja->nome."'";
            $totalVendasAno[] = $loja->total_vendas;
        }

        $nomeLojaAno = implode(',', $nomeLojaAno);
        $totalVendasAno = implode(',', $totalVendasAno);


        $comparacaoVendedores = Venda::select('funcionario_id', 'funcionario.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('funcionario', 'venda.funcionario_id', '=', 'funcionario.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('funcionario_id', 'funcionario.nome')
            ->orderBy('total_vendas', 'desc')
            ->get();

        foreach ($comparacaoVendedores as $vendedor) {
            $nomeVendedor[] = "'".$vendedor->nome."'";
            $totalVendasVendedor[] = $vendedor->total_vendas;
        }

        $nomeVendedor = implode(',', $nomeVendedor);
        $totalVendasVendedor = implode(',', $totalVendasVendedor);

        $comparacaoVendedoresAno = Venda::select('funcionario_id', 'funcionario.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('funcionario', 'venda.funcionario_id', '=', 'funcionario.id')
            ->whereYear('venda.created_at', date('Y'))
            ->groupBy('funcionario_id', 'funcionario.nome')
            ->orderBy('total_vendas', 'desc')
            ->get();

        foreach ($comparacaoVendedoresAno as $vendedor) {
            $nomeVendedorAno[] = "'".$vendedor->nome."'";
            $totalVendasVendedorAno[] = $vendedor->total_vendas;
        }

        $nomeVendedorAno = implode(',', $nomeVendedorAno);
        $totalVendasVendedorAno = implode(',', $totalVendasVendedorAno);
        
        $motosVendidasPorLoja = Venda::select('venda.loja_id', 'loja.nome', 'venda.moto_id', 'moto.nome', DB::raw('COUNT(*) as quantidade'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->join('moto', 'venda.moto_id', '=', 'moto.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('venda.loja_id', 'loja.nome', 'venda.moto_id', 'moto.nome')
            ->orderBy('venda.loja_id')
            ->get();
        
        $topMotosMaisVendidasMes = Venda::select('moto_id', 'moto.nome', DB::raw('COUNT(*) as quantidade'))
            ->join('moto', 'venda.moto_id', '=', 'moto.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('moto_id', 'moto.nome')
            ->orderByDesc('quantidade')
            ->limit(3)
            ->get();

        foreach ($topMotosMaisVendidasMes as $moto) {
            $motosMaisVendidaMes[] = "'".$moto->nome."'";
            $quantidadeMotosMaisVendidaMes[] = $moto->quantidade;
        }

        $motosMaisVendidaMes = implode(',', $motosMaisVendidaMes);
        $quantidadeMotosMaisVendidaMes = implode(',', $quantidadeMotosMaisVendidaMes);

        $mediaAritimeticaVendasPorLoja = Venda::select('loja_id', 'loja.nome', DB::raw('AVG(valor_total) as media_vendas'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('loja_id', 'loja.nome')
            ->orderBy('media_vendas', 'desc')
            ->get();    
        
        $totalMediaAritmetica = 0;
        foreach ($mediaAritimeticaVendasPorLoja as $media) {
            $totalMediaAritmetica += $media->media_vendas;
        }
        $mediaAritmeticaGeral = number_format($totalMediaAritmetica / count($mediaAritimeticaVendasPorLoja), 0, ',', '.');

        $piorLojadoMes = Venda::select('loja_id', 'loja.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('loja_id', 'loja.nome')
            ->orderBy('total_vendas', 'asc')
            ->first();

        $piorFuncionarioDoMes = Venda::select('funcionario.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('funcionario', 'venda.funcionario_id', '=', 'funcionario.id')
            ->whereYear('venda.created_at', date('Y'))
            ->whereMonth('venda.created_at', date('m'))
            ->groupBy('funcionario.nome')
            ->orderBy('total_vendas', 'asc')
            ->first();

        $ano = date('Y');
        $mes = date('m');

        return view('analise', compact(
            'melhorFuncionarioDoMes',
            'piorFuncionarioDoMes',
            'melhorLojaDoMes',
            'motoMaisVendidaMes',
            'nomeLoja',
            'totalVendas',
            'nomeLojaAno',
            'totalVendasAno',
            'nomeVendedor',
            'totalVendasVendedor',
            'nomeVendedorAno',
            'totalVendasVendedorAno',
            'motosVendidasPorLoja',
            'topMotosMaisVendidasMes',
            'motosMaisVendidaMes',
            'quantidadeMotosMaisVendidaMes',
            'mediaAritmeticaGeral',
            'piorLojadoMes',
            'ano',
            'mes'
        ));
}

    public function exportarDados()
    {   
    
        $comparacaoVendasLojasAno = Venda::select('loja_id', 'loja.nome', DB::raw('SUM(valor_total) as total_vendas'))
            ->join('loja', 'venda.loja_id', '=', 'loja.id')
            ->whereYear('venda.created_at', date('Y'))
            ->groupBy('loja_id', 'loja.nome')
            ->orderBy('total_vendas', 'desc')
            ->get();

        
        foreach ($comparacaoVendasLojasAno as $loja) {
            $nomeLojaAno[] = "'".$loja->nome."'";
            $totalVendasAno[] = $loja->total_vendas;
        }

        $nomeLojaAno = implode(',', $nomeLojaAno);
        $totalVendasAno = implode(',', $totalVendasAno);

        $dados = $comparacaoVendasLojasAno;
        return Excel::download(new DadosRelatorio($dados), 'dados.xlsx');
    }
}