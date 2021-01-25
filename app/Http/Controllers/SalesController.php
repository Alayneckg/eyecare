<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;
use App\Models\User;


class SalesController extends Controller
{
    public function create()
    {
        $products = Products::all();
        $user = User::all();
        $tamanho = count($products);
        for( $i=0;$i<$tamanho;$i++){
            $products[$i];
            if($products[$i]->category == 'Produto'){
                $products[$i]->commission = $products[$i]->price*0.1;
            }
            if($products[$i]->category == 'Serviço'){
                $products[$i]->commission = $products[$i]->price*0.25;
            }
        }
        return view('sales.index', compact('products', 'user'));
    }

    public function store(Request $request)
    {
        $sales = Sales::create(
            [
                'products' => $request['products'],
                'price' => $request['price'],
                'seller' => $request['seller'],
                'commission' => $request['commission'],
            ]
        );

        return redirect(route('dashboard'));
    }

}
