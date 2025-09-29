<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Muestra la ficha detallada de un producto.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // --- Simulación de datos de productos ---
        // En una aplicación real, aquí obtendrías el producto de la base de datos.
        // Ejemplo: $product = Producto::findOrFail($id);
        //
        // Por ahora, simulamos algunos productos con datos.
        // En un array asociativo, la clave es el ID del producto.
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Zapatillas Skater',
                'price' => 210000,
                'old_price' => 220000,
                'description' => 'Diseñadas para el máximo rendimiento y estilo en la patineta, nuestras Zapatillas Skater ofrecen una durabilidad excepcional y un agarre superior. Confeccionadas con materiales de alta calidad, son perfectas para resistir el desgaste del uso diario y las sesiones intensas en el skatepark.',
                'long_description' => '<p>Las <strong>Zapatillas Skater</strong> son el calzado esencial para cualquier aficionado al skate. Diseñadas pensando en la <strong>durabilidad</strong>, la <strong>comodidad</strong> y el <strong>agarre</strong>, estas zapatillas te acompañarán en cada truco y cada patinada.</p>
                                      <p>Fabricadas con una <strong>parte superior de ante y lona resistente</strong>, incorporan <strong>costuras reforzadas</strong> en las zonas de mayor desgaste para prolongar su vida útil. La <strong>suela de goma vulcanizada</strong> con patrón de espiga proporciona una <strong>tracción excepcional</strong> sobre la tabla y una flexibilidad que se adapta a cada movimiento.</p>
                                      <p>Además, cuentan con una <strong>plantilla acolchada</strong> que ofrece <strong>amortiguación superior</strong> contra los impactos, protegiendo tus pies durante las caídas y aterrizajes. Su diseño clásico y versátil las convierte en la elección perfecta tanto para el skatepark como para tu día a día.</p>',
                'additional_info' => 'Material superior: Ante y lona resistente<br>
                                      Suela: Goma vulcanizada con patrón de espiga<br>
                                      Plantilla: Acolchada para amortiguación<br>
                                      Refuerzos: Costuras dobles en áreas clave<br>
                                      Diseño: Caña baja, estilo clásico skater<br>
                                      Cierre: Cordones<br>
                                      Ventilación: Ojales metálicos para transpirabilidad',
                'sizes' => ['38', '39', '40', '41', '42'],
                'colors' => ['Negro', 'Blanco', 'Gris', 'Azul Marino'],
                'main_image' => 'img/zapatillas-skater-1.jpg',
                'gallery_images' => [
                    'img/zapatillas-skater-1.jpg',
                    'img/zapatillas-skater-2.jpg',
                    'img/zapatillas-skater-3.jpg',
                    'img/zapatillas-skater-4.jpg'
                ],
                'reviews_count' => 120,
                'average_rating' => 4.5, // Puedes calcular esto
                'related_products' => [
                    ['id' => 2, 'name' => 'Gorra Snapback', 'price' => 65000, 'old_price' => 70000, 'image' => 'img/product-1.jpg'],
                    ['id' => 3, 'name' => 'Mochila', 'price' => 130000, 'old_price' => 140000, 'image' => 'img/product-2.jpg'],
                    ['id' => 4, 'name' => 'Camisa Oversize', 'price' => 70000, 'old_price' => 75000, 'image' => 'img/product-3.jpg'],
                    ['id' => 5, 'name' => 'Rodilleras Pro', 'price' => 45000, 'old_price' => 50000, 'image' => 'img/product-4.jpg'],
                    ['id' => 1, 'name' => 'Zapatillas Skater', 'price' => 210000, 'old_price' => 220000, 'image' => 'img/product-5.jpg'], // Ejemplo de relacionado
                ]
            ],
            2 => [
                 'id' => 2,
                'name' => 'Gorra Snapback',
                'price' => 65000,
                'old_price' => 70000,
                'description' => 'Gorra de estilo Snapback, ideal para complementar tu look skater.',
                'long_description' => '<p>Gorra Snapback de alta calidad con ajuste regulable. Perfecta para protegerte del sol y lucir un estilo urbano.</p>',
                'additional_info' => 'Material: Algodón<br>Ajuste: Hebilla regulable<br>Color: Varias opciones',
                'sizes' => [], // Las gorras no suelen tener tallas numéricas
                'colors' => ['Negro', 'Rojo', 'Verde'],
                'main_image' => 'img/gorra-snapback-1.jpg',
                'gallery_images' => [
                    'img/gorra-snapback-1.jpg',
                    'img/gorra-snapback-2.jpg'
                ],
                'reviews_count' => 55,
                'average_rating' => 4.2,
                'related_products' => [
                     ['id' => 1, 'name' => 'Zapatillas Skater', 'price' => 210000, 'old_price' => 220000, 'image' => 'img/product-5.jpg'],
                     ['id' => 3, 'name' => 'Mochila', 'price' => 130000, 'old_price' => 140000, 'image' => 'img/product-2.jpg'],
                ]
            ],
            // ... Agrega más productos aquí ...
        ];

        // Verificar si el producto existe
        if (!isset($products[$id])) {
             abort(404); // O redirige a una página de error
        }

        $product = $products[$id];

        // Pasar el producto a la vista
        return view('product.detail', compact('product'));
    }
}