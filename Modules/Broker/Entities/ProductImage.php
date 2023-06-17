<?php

namespace Modules\Broker\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UuidTrait;

class ProductImage extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'broker_product_images';

    protected $fillable = [
        'product_id',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Broker\Database\factories\ProductImageFactory::new();
    }
}