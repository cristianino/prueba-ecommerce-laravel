<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Product();
        $producto->name = 'Canon DSLR';
        $producto->description = 'Cámara fotográfica';
        $producto->price = '250.000';
        $producto->img = 'products/canon.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Apple iPad';
        $producto->description = 'Tableta digital marca apple';
        $producto->price = '1.000.000';
        $producto->img = 'products/ipad.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Sony Headphone';
        $producto->description = 'Audifonos de diadema marca sony';
        $producto->price = '150.000';
        $producto->img = 'products/headphone.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Macbook Air';
        $producto->description = "";
        $producto->price = '2.500.000';
        $producto->img = 'products/macbook-air.jpg';
        $producto->popular = false;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Nikon DSLR';
        $producto->description = 'Cámara';
        $producto->price = '170.000';
        $producto->img = 'products/nikon.jpg';
        $producto->popular = false;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Sony Play Station';
        $producto->description = "";
        $producto->price = '2.000.000';
        $producto->img = 'products/play-station.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Macbook Pro';
        $producto->description = '';
        $producto->price = '3.000.000';
        $producto->img = 'products/macbook-pro.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Bose Speaker';
        $producto->description = '';
        $producto->price = '220.000';
        $producto->img = 'products/speaker.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Samsung Galaxy S8';
        $producto->description = '';
        $producto->price = '1.299.000';
        $producto->img = 'products/galaxy.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Apple IPhone';
        $producto->description = '';
        $producto->price = '900.000';
        $producto->img = 'products/iphone.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Google Pixel';
        $producto->description = '';
        $producto->price = '1.500.000';
        $producto->img = 'products/pixel.jpg';
        $producto->popular = true;
        $producto->save();

        $producto = new Product();
        $producto->name = 'Apple Watch';
        $producto->description = '';
        $producto->price = '300.000';
        $producto->img = 'products/watch.jpg';
        $producto->popular = true;
        $producto->save();


    }
}
