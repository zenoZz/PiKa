<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $fillable = ['content', 'article_type', 'title', 'author', 'user_id', 'is_recommend', 'markdown_source', 'is_markdown'];


    /**
     *
     */
    const ARTICLE_IS_RECOMMEND_YES = 1;

    /**
     *
     */
    const ARTICLE_IS_RECOMMEND_NO = 0;

    public static $ARTICLE_IS_RECOMMEND = [
        self::ARTICLE_IS_RECOMMEND_YES     => '是',
        self::ARTICLE_IS_RECOMMEND_NO      => '否',
    ];

    /**
     *
     */
    const ARTICLE_IS_MARKDOWN_NO = 0;
    /**
     *
     */
    const ARTICLE_IS_MARKDOWN_YES = 1;

    public static $ARTICLE_IS_MARKDOWN = [
        self::ARTICLE_IS_MARKDOWN_YES     => '是',
        self::ARTICLE_IS_MARKDOWN_NO      => '否',
    ];



    /**
     *
     *
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'article_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag');
    }

    /**
     * ɾ
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($article) {
            $article->comments()->delete();
        });
    }

}
