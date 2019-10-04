<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;


class ProductEloquentRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return Product::class;
    }

}
