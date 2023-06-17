<?php

namespace Modules\Broker\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UuidTrait;

class AttributeOption extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'broker_attribute_options';

    protected $fillable = [
        'attribute_id',
        'slug',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Broker\Database\factories\AttributeOptionFactory::new();
    }
}