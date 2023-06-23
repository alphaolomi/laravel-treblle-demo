<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'id', // 'ulid
        'name',
        'description',
        'price',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    public function getPriceAttribute(int $price): string
    {
        return number_format($price);
    }

    public function setPriceAttribute(string $price): void
    {
        $this->attributes['price'] = str_replace(',', '', $price);
    }

    // // getKeyName
    // public function getRouteKeyName(): string
    // {
    //     return 'ulid';
    // }

}
