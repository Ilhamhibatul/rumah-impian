<?php

namespace Modules\Broker\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UuidTrait;

class Category extends Model
{
    use HasFactory, UuidTrait;


    protected $table = 'broker_categories';

    protected $fillable = [
        'parent_id',
        'slug',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Broker\Database\factories\CategoryFactory::new();
    }

    public function children()
    {
        return $this->hasMany('Modules\Broker\Entities\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Modules\Broker\Entities\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Broker\Entities\Product', 'broker_categories_products', 'product_id', 'category_id');
    }
}
