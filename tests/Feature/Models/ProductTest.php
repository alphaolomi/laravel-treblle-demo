<?php

use App\Models\Product;

use function Pest\Laravel\assertDatabaseHas;

test('example', function () {
    $product = Product::create([
        'name' => 'Product 1',
        'description' => 'Product 1 Description',
        'price' => 1000,

    ]);

    expect($product)->toBeInstanceOf(Product::class);
    expect($product->name)->toBe('Product 1');
    assertDatabaseHas('products', [
        'name' => 'Product 1',
        'description' => 'Product 1 Description',
        // 'price' => 1000,
    ]);
});
