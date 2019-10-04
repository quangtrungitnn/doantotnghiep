<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * table name products
     *
     * @var string
     */
    protected $table = 'Products';

    /**
     * the attributes that should be mutated to dates
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * the attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'cpu',
        'ram',
        'storage',
        'display',
        'vga',
        'battery',
        'weight',
        'material',
        'kind',
        'condition',
        'price',
        'promotion',
        'status',
        'featured',
        'warranty',
        'description',
        'img'
    ];

    /**
     * relation with table Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Product()
    {
        return $this->hasMany(Product::class, 'cate_id', 'cate_id');
    }
}
