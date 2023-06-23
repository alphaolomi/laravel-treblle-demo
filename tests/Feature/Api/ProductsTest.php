<?php

use App\Models\Product;

it('can list products', function () {
    $response = $this->getJson('/api/products');

    $response->assertOk();
});

it('can view a product', function () {
    $product = Product::factory()->create();

    $response = $this->getJson("/api/products/{$product->id}");

    $response->assertOk();
});
