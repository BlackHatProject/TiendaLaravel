<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\productos;
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $productos1 = new productos();

        $productos1->titulo    = "RX 6600";
        $productos1->cantidad  = 10;
        $productos1->precio    = 630.00;
        $productos1->categoria = "tecnologia";
        $productos1->imagen = "rx-6600.jpg";
        // $productos1->user_id = 2;

        $productos1->save();

        $productos2 = new productos();

        $productos2->titulo   = "RX 6700";
        $productos2->cantidad = 4;
        $productos2->precio   = 700.00;
        $productos2->categoria = "tecnologia";
        $productos2->imagen = "rx-6700-xt.jpg";
        // $productos2->user_id = 2;

        $productos2->save();

        $productos3 = new productos();

        $productos3->titulo   = "Ryzen 7 5700x";
        $productos3->cantidad = 3;
        $productos3->precio   = 343.00;
        $productos3->categoria = "tecnologia";
        $productos3->imagen = "ryzen-7-5700x.jpg";
        // $productos3->user_id = 2;

        $productos3->save();

        $productos4 = new productos();

        $productos4->titulo   = "Ryzen 5 1200";
        $productos4->cantidad = 8;
        $productos4->precio   = 134.00;
        $productos4->categoria = "tecnologia";
        $productos4->imagen = "ryzen-5-1200.jpg";
        // $productos4->user_id = 2;

        $productos4->save();

        $productos5 = new productos();

        $productos5->titulo   = "Realme 10 pro+";
        $productos5->cantidad = 2;
        $productos5->precio   = 337.00;
        $productos5->categoria = "telefonos";
        $productos5->imagen = "realme-10-pro+.jpg";
        // $productos5->user_id = 3;

        $productos5->save();

        $productos6 = new productos();

        $productos6->titulo   = "Samsung Galaxy a33 5G";
        $productos6->cantidad = 4;
        $productos6->precio   = 275.00;
        $productos6->categoria = "telefonos";
        $productos6->imagen = "samsung-galaxy-a33-5g.jpg";
        // $productos6->user_id = 3;

        $productos6->save();

        $productos7 = new productos();

        $productos7->titulo   = "Mochila Victorinox";
        $productos7->cantidad = 16;
        $productos7->precio   = 45.00;
        $productos7->categoria = "viajes";
        $productos7->imagen = "mochilla-victorinox.jpg";
        // $productos7->user_id = 4;

        $productos7->save();

        $productos8 = new productos();

        $productos8->titulo   = "Bolso pequeño Victorinox";
        $productos8->cantidad = 20;
        $productos8->precio   = 25.00;
        $productos8->categoria = "viajes";
        $productos8->imagen = "bolso-victorinox.jpg";
        // $productos8->user_id = 4;

        $productos8->save();

        $productos9 = new productos();

        $productos9->titulo   = "Dakimakura de Hu tao";
        $productos9->cantidad = 5;
        $productos9->precio   = 44.00;
        $productos9->categoria = "hogar";
        $productos9->imagen = "dakimakurahutao.jpg";
        // $productos9->user_id = 5;

        $productos9->save();
        
    }
}
