<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name'];

    public function article() {

        return $this->belongsToMany('App\Article', 'article_tag', 'tag_id', 'article_id');

    }

    public function user() {

        return $this->belongsToMany('App\User', 'user_tag', 'tag_id', 'user_id');

    }


    /**
     * @param array $tags
     */
    public static function addNeededTags(array $tags)
    {
        if (count($tags) === 0) {
            return;
        }

        $found = static::whereIn('name', $tags)->get(['name']);
        $foundArray = array();
        if($found) {
            foreach ($found as $val) {
                $foundArray[] = $val['name'];
            }
        }
        foreach (array_diff($tags, $foundArray) as $tag) {
            static::create([
                'name' => $tag,
            ]);
        }
    }
}
