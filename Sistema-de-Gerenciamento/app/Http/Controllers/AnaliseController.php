<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Venda;
use App\Models\Loja;
use App\Models\Moto;


class AnaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mesAtual = date('m');
        $anoAtual = date('Y');

        $meses = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];
    
        $vendasPorLoja = Venda::select('loja.nome as nome_loja', DB::raw('SUM(venda.valor_total) as valor_total'))
        ->join('loja', 'venda.loja_id', '=', 'loja.id')
        //->whereMonth('venda.created_at', '=', $mesAtual)
        //->whereYear('venda.created_at', '=', $anoAtual)
        ->groupBy('loja.nome')
        ->orderByDesc('valor_total') // Ordena em ordem decrescente pelo valor total
        ->take(4) // Limita os resultados às 4 lojas com maiores vendas
        ->get();

        $lojaMaisVendida = $vendasPorLoja->first();

        $lojas = Loja::all();
        $motos = Moto::all();



        // $funcionarioMaisVendedor = ;

        // $motoMaisVendida = ;

        // $lojaMaiorReceita = ;


        dd($vendasPorLoja, $lojaMaisVendida, $lojas, $motos);
        return view('analise', compact( ));
    }

}