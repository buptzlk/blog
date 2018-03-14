<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag as Tags;
use App\ArticleTag;
use DB;

class Tag extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tag = Tags::findOrFail($id);
        $data = ArticleTag::where('tag_id', $id)
                    ->get()->toArray();
        $articleId = array();
        foreach ($data as $row) {
            $articleId[] = $row['article_id'];
        }
        $data = Article::with('tag', 'user')->whereIn('id',$articleId)->paginate();
        return view('tag', ['data' => $data, 'tag' => $tag]);
    }
}
