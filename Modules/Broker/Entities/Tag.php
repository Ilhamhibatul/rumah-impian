<?php

namespace Modules\Broker\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UuidTrait;

class Tag extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'broker_tags';

    protected $fillable = [
        'slug',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Broker\Database\factories\TagFactory::new();
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Broker\Entities\Product', 'broker_products_tags', 'tag_id', 'product_id');
    }
}