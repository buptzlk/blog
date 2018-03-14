<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ArticleTag extends Model
{
    use SoftDeletes;
    protected $table = 'article_tag';
    protected $dates = ['deleted_at'];


}
