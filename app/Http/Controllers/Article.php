<?php

namespace App\Http\Controllers;
use App\Article as Articles;
use App\ArticalTag;
use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;

class Article extends Controller
{
    public function __construct() {
        
    //    $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * 添加文章
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleCreateRequest $request)
    {
        $rules = [
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|Integer',
            'tags' => 'required|Array',
        ];

        $data = $request->afterRequest();
        $this->validator($data, $rules);
        $post = Articles::create($data);
        $post->syncTags($data['tags']);
        $this->handle($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $rules = [
            'id' => 'required|Integer',
        ];
        $this->validator(['id' => $id], $rules);
        $result = Articles::with('tag', 'user')->find($id);
        return view('article', ['data' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateRequest $request) {
        $rules = [
            'id' => 'required|Integer',
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|Integer',
            'tags' => 'required|Array',
        ];

        $data = $request->afterRequest();
        $this->validator($data, $rules);
        $post = Articles::findOrFail($data['id']);
        $post->fill($data);
        $post->save();
        // 更新标签
        $post->syncTags($data['tags']);

        $this->handle($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $rules = [
            'id' => 'required|Integer',
        ];
        $this->validator(['id' => $id], $rules);
        $post = Articles::findOrFail($id);
        $post->tag()->detach();
        $post->delete();
        $this->handle($post);
    }
}
