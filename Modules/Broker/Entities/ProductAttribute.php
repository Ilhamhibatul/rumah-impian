<?php

namespace Modules\Broker\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UuidTrait;

class ProductAttribute extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'broker_product_attributes';

    protected $fillable = [
        'product_id',
        'attribute_id',
        'string_value',
        'text_value',
        'boolean_value',
        'integer_value',
        'float_value',
        'datetime_value',
        'date_value',
        'json_value',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Broker\Database\factories\ProductAttributeFactory::new();
    }

    public function product()
    {
        return $this->belongsTo('Modules\Broker\Entities\Product');
    }

    public function attribute()
    {
        return $this->belongsTo('Modules\Broker\Entities\Attribute');
    }
}