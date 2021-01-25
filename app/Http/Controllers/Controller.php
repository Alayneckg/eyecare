<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Sales;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
    {
        $sales = Sales::all();
        $user = User::all();
        $n_user = count($user);
        $n_vendas = count($sales);
        $retorno = 0;
        $comissao = 0;
        $vendas = [];
        $id = [];
        for ($i=0;$i<$n_vendas;$i++){
            $retorno = $retorno + $sales[$i]->price;
            $comissao = $comissao + $sales[$i]->commission;
        }
        for ($i=0;$i<$n_vendas;$i++){
            $vendas[$i] = $sales[$i]->price;
            $id[$i] = $sales[$i]->id;
        }
        return view('dashboard', compact( 'sales', 'n_user', 'n_vendas', 'retorno', 'comissao'));

    }

    public function profile()
    {
        $sales = Sales::all();
        $user = User::all();
        $login = auth()->user();
        $vendas = 0;
        $bonus = 0;
        for($i=0;$i<count($sales);$i++){
            if($sales[$i]->seller == $login->name){
                $vendas = 1 + $vendas;
            }
        }
        if($vendas > 4){
            // Vendedores com mais de 5 anos de experiência
            if($login->experience == 5 ){
                for($i=0;$i<count($sales);$i++){
                    if($sales[$i]->seller == $login->name){
                        $bonus = ($sales[$i]->price*0.03) + $bonus;
                    }
                }
            }
            // Vendedores entre 5 e 10 anos de experiência
            if($login->experience > 5  && $login->experience < 10){
                for($i=0;$i<count($sales);$i++){
                    if($sales[$i]->seller == $login->name){
                        $bonus = ($sales[$i]->price*0.06) + $bonus;
                    }
                }
            }
            // Vendedores com mais de 10 anos de experiência
            if($login->experience > 10){
                for($i=0;$i<count($sales);$i++){
                    if($sales[$i]->seller == $login->name){
                        $bonus = ($sales[$i]->price*0.1) + $bonus;
                    }
                }
            }
        }
        return view('profile', compact( 'login', 'vendas', 'bonus'));
    }

}
