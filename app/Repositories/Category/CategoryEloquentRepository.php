<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;


class CategoryEloquentRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return Category::class;
    }

}
