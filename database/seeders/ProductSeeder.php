<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'Servidor Lenovo ThinkSystem', 'price' => '6000', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Servidor HPE Micro Server', 'price' => '5000', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Servidor Dell PowerEdge', 'price' => '7000', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Storage Asustor NAS', 'price' => '4000', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'HD Externo 1TB', 'price' => '200', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Teclado Dell', 'price' => '100', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'SSD 256GB', 'price' => '500', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Monitor LG', 'price' => '800', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Monitor Samsung', 'price' => '750', 'category' => 'Produto']);
        DB::table('products')->insert(['name' => 'Manutenção', 'price' => '300', 'category' => 'Serviço']);
        DB::table('products')->insert(['name' => 'Troca de tela', 'price' => '700', 'category' => 'Serviço']);
        DB::table('products')->insert(['name' => 'Limpeza de equipamento', 'price' => '500', 'category' => 'Serviço']);
        DB::table('products')->insert(['name' => 'Instalação de Software', 'price' => '300', 'category' => 'Serviço']);
        DB::table('products')->insert(['name' => 'Formatação', 'price' => '100', 'category' => 'Serviço']);
    }
}
