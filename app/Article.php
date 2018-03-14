<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tag;

class Article extends Model {
    use SoftDeletes;

    protected $table = 'articles';

    protected $fillable = [
        'title', 'content', 'user_id', 'resolved_content', 'cover', 'summary'
    ];
  
    protected $dates = ['deleted_at'];

    /**
     * @brief 一篇文章拥有多个tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tag() {

        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');

    }

    public function user() {

        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     * Sync tag relation adding new tags as needed
     *
     * @param array $tags
     */
    public function syncTags(array $tags)
    {
        Tag::addNeededTags($tags);

        if (count($tags)) {
            $this->tag()->sync(
                Tag::whereIn('name', $tags)->get(['id'])
            );
            return;
        }

        $this->tag()->detach();
    }
}
