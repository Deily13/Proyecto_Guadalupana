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
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'bebidas-alcoholicas',
                'nombre' => 'TECATE LIGHT',
                'image' => 'https://i.pinimg.com/564x/a1/8a/ac/a18aac6501d336974523e4670202eece.jpg',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* hamburguesas */
            [
                'slug' => 'hamburguesas',
                'nombre' => 'Hamburguesa Doble',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'hamburguesas',
                'nombre' => 'Hamburguesas Mini',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* helados */
            [
                'slug' => 'helados',
                'nombre' => 'Ensalada De Frutas',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'helados',
                'nombre' => 'Browni Con Helado',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* comidas rapidas */
            [
                'slug' => 'comidas-rapidas',
                'nombre' => 'Sandwich',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'comidas-rapidas',
                'nombre' => 'Perro Americano',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* bebidas */
            [
                'slug' => 'refrescos',
                'nombre' => 'Malteada Vainilla',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'refrescos',
                'nombre' => 'limonada de coco',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],

            /* combos */
            [
                'slug' => 'combos',
                'nombre' => 'Combo Especial',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
                'Stock' => '50',
                'Descripción' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.',
            ],
            [
                'slug' => 'combos',
                'nombre' => 'Combo Mini',
                'image' => 'https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1680866331/content-items/013/518/382/Zumzum_Macron_mixing_techno_a_lot_of_drugs_is_to_be_seen_on_a_t_a54bf669-6638-4571-9fff-56001a51e11c-original.png?1680866331',
                'precio' => '$23.500',
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
