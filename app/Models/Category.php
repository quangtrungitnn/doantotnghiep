<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * table name category
     *
     * @var string
     */
    protected $table = 'Category';

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
        'cate_name',
        'cate_slug'
    ];

}
