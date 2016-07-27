<?php

namespace App\Repositories;

use App\Article;

/**
 * Article Repository.
 */
class ArticleRepository extends CommonRepository
{


    public function getArticlesByTag($tag, $pageSize = 5)
    {
        return $this->model->whereHas('tags', function($q) use ($tag)
        {
            $q->where('mark', 'like', "%$tag%");

        })->paginate($pageSize);
    }

}
