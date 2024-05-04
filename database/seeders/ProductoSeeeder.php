<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $productos = [
            /* bebidas alcoholicas */
            [
                'slug' => 'bebidas-alcoholicas',
                'nombre' => 'TECATE LIGHT',
                'image' => 'https://i.pinimg.com/564x/a1/8a/ac/a18aac6501d336974523e4670202eece.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'slug' => 'bebidas-alcoholicas',
                'nombre' => 'TECATE LIGHT',
                'image' => 'https://i.pinimg.com/564x/a1/8a/ac/a18aac6501d336974523e4670202eece.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],

            /* hamburguesas */
            [
                'slug' => 'hamburguesas',
                'nombre' => 'Hamburguesa Doble',
                'image' => 'https://i.pinimg.com/564x/8f/a7/2d/8fa72dbe252cdefa40865eb46feb0320.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'hamburguesas',
                'nombre' => 'Hamburguesas Mini',
                'image' => 'https://i.pinimg.com/564x/8f/a7/2d/8fa72dbe252cdefa40865eb46feb0320.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'l,orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* helados */
            [
                'slug' => 'helados',
                'nombre' => 'Ensalada De Frutas',
                'image' => 'https://i.pinimg.com/564x/4f/16/1a/4f161ab2899799fbfe5733ef27b2ff3f.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'helados',
                'nombre' => 'Browni Con Helado',
                'image' => 'https://i.pinimg.com/564x/4f/16/1a/4f161ab2899799fbfe5733ef27b2ff3f.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* comidas rapidas */
            [
                'slug' => 'comidas-rapidas',
                'nombre' => 'Sandwich',
                'image' => 'https://i.pinimg.com/564x/6e/e5/ea/6ee5eaf3596cb81a9cbb1d47a7ac5c7c.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'comidas-rapidas',
                'nombre' => 'Perro Americano',
                'image' => 'https://i.pinimg.com/564x/6e/e5/ea/6ee5eaf3596cb81a9cbb1d47a7ac5c7c.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* bebidas */
            [
                'slug' => 'refrescos',
                'nombre' => 'Malteada Vainilla',
                'image' => 'https://i.pinimg.com/564x/8f/6c/2b/8f6c2b576190794da5a945328e4be346.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'refrescos',
                'nombre' => 'limonada de coco',
                'image' => 'https://i.pinimg.com/564x/8f/6c/2b/8f6c2b576190794da5a945328e4be346.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* combos */
            [
                'slug' => 'combos',
                'nombre' => 'Combo Especial',
                'image' => 'https://i.pinimg.com/564x/0e/12/9d/0e129db8b9bbe1d18bbeae104756cd91.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'combos',
                'nombre' => 'Combo Mini',
                'image' => 'https://i.pinimg.com/564x/0e/12/9d/0e129db8b9bbe1d18bbeae104756cd91.jpg',
                'precio' => '23500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
        ];

        foreach ($productos as $producto) {
            Product::create([
                'slug' => $producto['slug'],
                'nombre' => $producto['nombre'],
                'image' => $producto['image'],
                'precio' => $producto['precio'],
                'Stock' => $producto['Stock'],
                'Descripción' => $producto['Descripción']
            ]);
        }
    }
}
