@extends('layouts.app')
<style type="text/css">

</style>
@section('content')

<div class="container index">
    <div class="row">
        <div class="col-xs-16 main">
            <div class="recommend-collection">
                @foreach($tag as $row)
                    <a class="collection" target="_blank" href="/tag/{{$row->id}}">
                        <img src="{{$row->cover}}" alt="64">
                        <div class="name">{{$row->name}}</div>
                    </a>
                @endforeach
            </div>
            <div class="split-line"></div>
            <div class='list-container'>
                  <ul class="note-list">
                      @foreach ($data as $article)
                            <li class="have-img">
                                <a class="wrap-img" href="/p/{{$article->id}}" target="_blank">
                                    <img class="img-blur-done" src="{{$article->cover}}" alt="120">
                                </a>
                                <a href="/p/{{$article->id}}"> </a>
                                <div class="content">
                                    <div class="author">
                                        <div class="avatar"><a href="/u/{{$article->user->id}}"><img src="{{$article->user->avatar}}"></a></div>
                                        <div class="name">
                                            <a href="/u/{{$article->user->id}}">{{$article->user->name}}</a>
                                            <span class="time">{{$article->created_at}}</span>
                                        </div>
                                    </div>
                                    <a class="title" target="_blank" href="/p/{{$article->id}}">{{$article->title}}</a>
                                    <p class="abstract"><a href="/p/{{$article->id}}">{{$article->summary}}</a></p>
                                    <div class="meta">
                                        @foreach ($article->tag as $meta)
                                            <a class="collection-tag" href="/tag/{{$meta->id}}"> {{$meta->name}} </a>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                      @endforeach
                  </ul>
                  <div>{!! $data->links() !!}</div>
              </div>
        </div>
        <div class="col-xs-7 col-xs-offset-1 aside">
            <div class="board">
                <a target="_blank" href="/recommendations/notes?category_id=56&amp;utm_medium=index-banner-s&amp;utm_source=desktop">
                    <img src="//cdn2.jianshu.io/assets/web/banner-s-1-b8ff9ec59f72ea88ecc8c42956f41f78.png" alt="Banner s 1">
                </a>        <a target="_blank" href="/trending/weekly?utm_medium=index-banner-s&amp;utm_source=desktop"><img src="//cdn2.jianshu.io/assets/web/banner-s-3-7123fd94750759acf7eca05b871e9d17.png" alt="Banner s 3"></a>
                <a target="_blank" href="/trending/monthly?utm_medium=index-banner-s&amp;utm_source=desktop"><img src="//cdn2.jianshu.io/assets/web/banner-s-4-b70da70d679593510ac93a172dfbaeaa.png" alt="Banner s 4"></a>

            </div>
        </div>
    </div>
</div>
@endsection
