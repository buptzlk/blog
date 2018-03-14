@extends('layouts.app')
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style type="text/css">
    .note-list {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .note-list li {
        position: relative;
        width: 100%;
        margin: 0 0 17px;
        padding: 0 2px 17px 0;
        border-bottom: 1px solid #f0f0f0;
        word-wrap: break-word
    }

    .note-list li.have-img {
        min-height: 140px
    }

    .note-list .have-img .wrap-img {
        position: absolute;
        top: 50%;
        margin-top: -68px;
        right: 0;
        width: 150px;
        height: 120px
    }

    .note-list .have-img .wrap-img img {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        border: 1px solid #f0f0f0
    }

    .note-list .have-img>div {
        padding-right: 160px
    }

    .note-list .content .cancel {
        display: none
    }

    .note-list .content:hover .cancel {
        display: inline
    }

    .note-list .author {
        margin-bottom: 14px;
        font-size: 13px
    }

    .note-list .author-restyle {
        margin-bottom: 0
    }

    .note-list .author .avatar {
        margin: 0 5px 0 0
    }

    .note-list .author .avatar,.note-list .author .name {
        display: inline-block;
        vertical-align: middle
    }

    .note-list .author .name span {
        display: inline-block;
        padding-left: 3px;
        color: #969696
    }

    .note-list .author a {
        color: #333
    }

    .note-list .author a:hover {
        color: #2f2f2f
    }

    .note-list .author .time {
        color: #969696
    }

    .note-list .title {
        margin: -7px 0 4px;
        display: inherit;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5
    }

    .note-list .title:hover {
        text-decoration: underline
    }

    .note-list .title:visited {
        color: #969696
    }

    .note-list .title:empty:before {
        content: "\65E0\9898"
    }

    .note-list .origin-author {
        display: inline;
        margin-bottom: 5px;
        font-size: 12px;
        color: #969696
    }

    .note-list .origin-author a {
        margin-right: 5px;
        color: #3194d0!important
    }

    .note-list .origin-author a:hover {
        color: #3194d0!important
    }

    .note-list .comment {
        font-size: 15px;
        line-height: 1.7
    }

    .note-list .comment a,.note-list a.maleskine-author {
        color: #3194d0
    }

    .note-list blockquote {
        margin-bottom: 0;
        color: #969696;
        border-left: 3px solid #d9d9d9
    }

    .note-list blockquote .single-line {
        margin: 0
    }

    .note-list blockquote .title {
        margin: 0 0 4px;
        font-size: 15px
    }

    .note-list blockquote .abstract {
        margin: 0 0 4px
    }

    .note-list .abstract {
        margin: 0 0 8px;
        font-size: 13px;
        line-height: 24px
    }

    .note-list .collection-tag {
        display: inline-block;
        padding: 3px 6px;
        margin-top: -1px;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 1;
        vertical-align: middle;
        color: #ea6f5a!important;
        border: 1px solid rgba(236,97,73,.7);
        border-radius: 3px
    }

    .note-list .collection-tag,.note-list .collection-tag:hover {
        transition: .1s ease-in;
        -webkit-transition: .1s ease-in;
        -moz-transition: .1s ease-in;
        -o-transition: .1s ease-in;
        -ms-transition: .1s ease-in
    }

    .note-list .collection-tag:hover {
        color: #ec6149!important;
        background-color: rgba(236,97,73,.05);
        border-color: #ec6149
    }

    .note-list .follow-detail {
        padding: 20px;
        background-color: hsla(0,0%,71%,.1);
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        font-size: 12px
    }

    .note-list .follow-detail .avatar,.note-list .follow-detail .avatar-collection {
        float: left;
        margin-right: 10px;
        width: 48px;
        height: 48px
    }

    .note-list .follow-detail .info .title {
        margin: 0;
        font-size: 17px;
        font-weight: 400
    }

    .note-list .follow-detail .info .title:visited {
        color: inherit
    }

    .note-list .follow-detail .info p {
        margin-bottom: 0;
        color: #969696
    }

    .note-list .follow-detail .creater,.note-list .follow-detail .creater:hover {
        color: #3194d0
    }

    .note-list .follow-detail .btn {
        float: right;
        margin-top: 4px;
        padding: 8px 0;
        width: 100px
    }

    .note-list .follow-detail .signature {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #e1e1e1;
        color: #969696;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .note-list .meta {
        padding-right: 0!important;
        font-size: 12px;
        font-weight: 400;
        line-height: 20px
    }

    .note-list .meta a {
        margin-right: 10px;
        color: #b4b4b4
    }

    .note-list .meta a,.note-list .meta a:hover {
        transition: .1s ease-in;
        -webkit-transition: .1s ease-in;
        -moz-transition: .1s ease-in;
        -o-transition: .1s ease-in;
        -ms-transition: .1s ease-in
    }

    .note-list .meta a:hover {
        color: #787878
    }

    .note-list .meta span {
        margin-right: 10px;
        color: #b4b4b4
    }

    .note-list .push-action {
        margin-top: 10px
    }

    .note-list .btn-gray,.note-list .hollow {
        margin: 0 10px;
        padding: 4px 12px;
        font-size: 12px
    }

    .note-list .push-status,.note-list .push-time {
        font-size: 12px;
        color: #969696
    }

    .note-list .push-status {
        margin-right: 5px;
        font-weight: 700
    }

    .note-list .push-remove {
        font-weight: 400;
        color: #ea6f5a
    }

    @media (max-width: 1080px) {
        .note-list li.have-img {
            min-height:112px
        }

        .note-list .have-img .wrap-img {
            margin-top: -58px;
            bottom: 40px;
            width: 125px;
            height: 100px
        }

        .note-list .have-img>div {
            padding-right: 135px
        }
    }

    #user-publications {
        box-sizing: border-box
    }

    #user-publications .ic-navigation-help {
        cursor: pointer;
        color: #969696
    }

    #user-publications .publication-list .item {
        min-height: 75px;
        position: relative
    }

    #user-publications .publication-list .item .cover {
        position: relative;
        z-index: 1;
        width: 56px;
        height: 75px;
        float: left
    }

    #user-publications .publication-list .item .cover img {
        width: 100%;
        height: 100%
    }

    #user-publications .publication-list .item .info {
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
        box-sizing: border-box;
        padding-left: 66px
    }

    #user-publications .publication-list .item .info .name {
        color: #333;
        font-size: 14px;
        margin-bottom: 5px
    }

    #user-publications .publication-list .item .info .intros {
        color: #969696;
        font-size: 14px
    }

    .reader-night-mode #user-publications .publication-list .info .name {
        color: #c8c8c8
    }

    .person .row {
        padding-top: 30px
    }

    .person .main {
        padding-right: 0
    }

    .person .main .main-top {
        margin-bottom: 20px
    }

    .person .main .main-top .avatar {
        float: left;
        width: 80px;
        height: 80px;
        margin-left: -2px
    }

    .person .main .main-top .btn,.person .main .main-top .user-follow-button {
        float: right;
        margin: 23px 0 23px 16px;
        font-size: 15px
    }

    .person .main .main-top .user-follow-button {
        padding: 8px 0;
        width: 100px
    }

    .person .main .main-top .btn-hollow {
        padding: 8px 0;
        width: 90px
    }

    .person .main .main-top .follow,.person .main .main-top .follow-cancel,.person .main .main-top .follow-each,.person .main .main-top .following {
        padding: 8px 0;
        width: 100px
    }

    .person .main .main-top .title {
        padding: 5px 0 0 100px
    }

    .person .main .main-top .title .name {
        display: inline;
        font-size: 21px;
        font-weight: 700;
        vertical-align: middle
    }

    .person .main .main-top .title .name:hover {
        color: #2f2f2f
    }

    .person .main .main-top .title span {
        vertical-align: middle;
        display: inline-block
    }

    .person .main .main-top .ic-man,.person .main .main-top .ic-woman {
        font-size: 17px;
        vertical-align: middle
    }

    .person .main .main-top .author-tag,.person .main .main-top .editor-tag {
        padding: 0 2px;
        margin-left: 4px;
        font-size: 13px;
        color: #ea6f5a;
        border: 1px solid #ea6f5a;
        border-radius: 3px;
        line-height: normal
    }

    .person .main .main-top .editor-tag {
        color: #f5a623;
        border: 1px solid #f5a623
    }

    .person .main .main-top .info {
        margin-top: 5px;
        padding-left: 100px;
        font-size: 14px
    }

    .person .main .main-top .info ul {
        font-size: 0
    }

    .person .main .main-top .info ul li {
        display: inline-block
    }

    .person .main .main-top .info ul li:last-child .meta-block {
        margin: 0;
        padding: 0;
        border: none
    }

    .person .main .main-top .info ul .meta-block {
        font-size: 12px;
        margin: 0 7px 6px 0;
        padding: 0 7px 0 0;
        border-right: 1px solid #f0f0f0
    }

    .person .main .main-top .info ul .meta-block .ic-arrow {
        margin-left: -3px
    }

    .person .main .main-top .info ul p {
        margin-bottom: -3px;
        font-size: 15px;
        color: #868383;
        margin-top: 10px;
    }

    .person .main .main-top .info ul a,.person .main .main-top .info ul div {
        color: #969696
    }

    .person .main .user-list {
        list-style: none;
        clear: both
    }

    .person .main .user-list li {
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
        line-height: normal
    }

    .person .main .user-list li:first-child {
        padding-top: 0!important
    }

    .person .main .user-list .avatar,.person .main .user-list .avatar-collection {
        width: 52px;
        height: 52px;
        margin-right: 8px;
        vertical-align: middle;
        display: inline-block
    }

    .person .main .user-list .info {
        vertical-align: middle;
        display: inline-block;
        max-width: 450px
    }

    .person .main .user-list .info a,.person .main .user-list .name {
        font-size: 15px;
        font-weight: 700;
        color: #333
    }

    .person .main .user-list .info a:hover,.person .main .user-list .name:hover {
        color: #2f2f2f
    }

    .person .main .user-list .meta {
        padding-top: 2px;
        font-size: 12px;
        color: #969696
    }

    .person .main .user-list .meta span {
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #969696
    }

    .person .main .user-list .meta span:last-child {
        border: none
    }

    .person .main .user-list .meta a {
        margin-right: 3px;
        font-size: 12px;
        font-weight: 400;
        color: #3194d0
    }

    .person .main .user-list .meta a:hover {
        color: #3194d0
    }

    .person .main .user-list .follow,.person .main .user-list .follow-cancel,.person .main .user-list .follow-each,.person .main .user-list .following,.person .main .user-list .user-follow-button-item {
        float: right;
        margin-top: 8px;
        padding: 8px 0;
        width: 100px;
        font-size: 15px
    }

    .person .aside {
        padding: 0
    }

    .person .aside a,.person .aside a:hover {
        color: #3194d0
    }

    .person .aside .title {
        float: left;
        margin-bottom: 10px;
        font-size: 14px;
        color: #969696
    }

    .person .aside .function-btn {
        float: right;
        font-size: 13px;
        color: #969696
    }

    .person .aside .function-btn:hover {
        color: #2f2f2f
    }

    .person .aside .function-btn i {
        padding-right: 2px
    }

    .person .aside .new-collection-btn {
        font-size: 13px;
        color: #42c02e
    }

    .person .aside .new-collection-btn:hover {
        color: #3db922
    }

    .person .aside .new-collection-btn i {
        padding-right: 2px
    }

    .person .aside .profile-edit {
        display: none;
        margin-bottom: 20px
    }

    .person .aside .profile-edit textarea {
        margin-bottom: 5px;
        width: 100%;
        height: 125px;
        padding: 5px 10px;
        font-size: 14px;
        background-color: hsla(0,0%,71%,.1);
        border: 1px solid #c8c8c8;
        border-radius: 4px;
        resize: none;
        outline: none
    }

    .person .aside .profile-edit .btn-hollow {
        padding: 5px 20px;
        font-size: 14px
    }

    .person .aside .profile-edit a {
        margin-left: 10px;
        font-size: 14px;
        color: #969696;
        line-height: 34px;
        vertical-align: middle
    }

    .person .aside .profile-edit a:hover {
        color: #2f2f2f
    }

    .person .aside .description,.person .aside .new-collection-block {
        position: relative;
        margin-bottom: 16px;
        padding: 0 0 16px;
        text-align: left;
        font-size: 0;
        border-bottom: 1px solid #f0f0f0;
        clear: both;
        word-break: break-word!important;
        word-break: break-all
    }

    .person .aside .description a,.person .aside .new-collection-block a {
        margin-right: 5px
    }

    .person .aside .description .js-intro,.person .aside .new-collection-block .js-intro {
        margin-bottom: 10px;
        line-height: 20px;
        font-size: 14px
    }

    .person .aside .description .popover,.person .aside .new-collection-block .popover {
        background-color: #fff
    }

    .person .aside .description .popover img,.person .aside .new-collection-block .popover img {
        width: 160px
    }

    .person .aside .person-detail .modal-body {
        padding: 20px;
        font-size: 15px
    }

    .person .aside .person-detail .close {
        position: absolute;
        right: 20px
    }

    .person .aside .person-detail table {
        width: 100%
    }

    .person .aside .person-detail td {
        padding: 20px 0
    }

    .person .aside .person-detail .left {
        width: 100px
    }

    .person .aside .person-detail .user td {
        padding: 0
    }

    .person .aside .person-detail .user .user-name {
        margin-right: 10px;
        font-size: 21px;
        font-weight: 700;
        color: #333
    }

    .person .aside .person-detail .user .user-name:hover {
        color: #2f2f2f
    }

    .person .aside .person-detail .user .ic-woman {
        font-size: 24px;
        color: #ea6f5a
    }

    .person .aside .person-detail .user .ic-man {
        font-size: 24px;
        color: #3194d0
    }

    .person .aside .person-detail .education,.person .aside .person-detail .location {
        border-bottom: 1px solid #f0f0f0
    }

    .person .aside .person-detail .career td,.person .aside .person-detail .education td {
        padding-bottom: 10px
    }

    .person .aside .person-detail .career-info,.person .aside .person-detail .education-info {
        margin-bottom: 10px;
        border-bottom: 1px solid #f0f0f0
    }

    .person .aside .person-detail .career-info:last-child,.person .aside .person-detail .education-info:last-child {
        margin: 0;
        border: none
    }

    .person .aside .person-detail .career-info div,.person .aside .person-detail .education-info div {
        margin-bottom: 10px
    }

    .person .aside .person-detail .avatar {
        margin-right: 30px;
        width: 80px;
        height: 80px
    }

    .person .aside .person-detail .meta {
        font-size: 13px;
        color: #969696
    }

    .person .aside .person-detail .meta i {
        margin-right: 10px;
        font-size: 15px;
        vertical-align: middle
    }

    .person .aside .person-detail .meta span {
        vertical-align: middle
    }

    .person .aside .person-detail .career td:first-child,.person .aside .person-detail .education td:first-child {
        float: left
    }

    .person .aside .person-detail .go-edit {
        float: right;
        font-size: 13px;
        color: #969696
    }

    .person .aside .person-detail .go-edit:hover {
        color: #2f2f2f
    }

    .person .aside .person-detail .go-edit i,.person .aside .person-detail .go-edit span {
        vertical-align: middle
    }

    .person .aside .list {
        margin-bottom: 16px;
        padding-bottom: 16px;
        list-style: none;
        border-bottom: 1px solid #f0f0f0;
        clear: both
    }

    .person .aside .list li {
        margin-bottom: 10px
    }

    .person .aside .list li a {
        display: inline-block
    }

    .person .aside .list li a i {
        vertical-align: middle;
        margin-right: 5px
    }

    .person .aside .list li a i.ic-search-notebook {
        color: #969696
    }

    .person .aside .check-more {
        font-size: 14px;
        line-height: normal;
        color: #969696
    }

    .person .aside .check-more:hover {
        color: #2f2f2f
    }

    .person .aside .check-more i {
        margin-left: 4px
    }

    .person .aside .person-information {
        font-size: 13px
    }

    .person .aside .person-information i {
        margin-right: 10px;
        font-size: 16px;
        color: #969696;
        vertical-align: middle
    }

    .person .aside .person-information span {
        vertical-align: middle
    }

    .person .aside .user-dynamic {
        padding-bottom: 6px
    }

    .person .aside .user-dynamic a {
        font-size: 14px;
        color: #333;
        line-height: 30px
    }

    .person .aside .user-dynamic a:hover {
        color: #2f2f2f
    }

    .person .aside .user-dynamic i {
        margin-right: 10px;
        font-size: 20px;
        vertical-align: middle
    }

    .person .aside .user-dynamic span {
        vertical-align: middle
    }

    .person .aside .badge-icon img {
        margin-right: 3px
    }

    .person .aside .avatar,.person .aside .avatar-collection {
        margin-right: 5px;
        width: 32px;
        height: 32px
    }

    .person .aside .name {
        position: relative;
        max-width: 236px;
        vertical-align: middle;
        top: 1px;
        font-size: 14px;
        color: #333
    }

    .person .aside .name:hover {
        color: #2f2f2f
    }

    .person .aside .user-action {
        padding-bottom: 20px;
        color: #969696
    }

    .person .aside .user-action a {
        font-size: 13px;
        color: #969696
    }

    .person .aside .user-action a:hover {
        color: #2f2f2f
    }

    .person .iradio-square-green {
        display: inline-block;
        *display: inline;
        vertical-align: middle;
        margin: 0;
        padding: 0;
        width: 18px;
        height: 18px;
        background: url(//cdn2.jianshu.io/assets/radio/radio-0d0c83844389bbb740ce7daedff7ad8f.png) no-repeat;
        border: none;
        cursor: pointer;
        background-position: 0 0
    }

    .person .iradio-square-green.hover {
        background-position: -20px 0
    }

    .person .iradio-square-green.checked {
        background-position: -40px 0
    }

    .person .iradio-square-green.disabled {
        background-position: -60px 0;
        cursor: default
    }

    .person .iradio-square-green.checked.disabled {
        background-position: -80px 0
    }

    .person .social-icon-sprite {
        display: inline-block;
        *display: inline;
        vertical-align: middle;
        margin: 0;
        padding: 0;
        width: 20px;
        height: 20px;
        background: url(//cdn2.jianshu.io/assets/social_icons/social-e899099573ece117d8b1c274fd91563c.png) no-repeat
    }

    .person .social-icon-weibo {
        background-position: 0 0
    }

    .person .social-icon-weixin {
        background-position: -20px 0
    }

    .person .social-icon-picture {
        background-position: -40px 0
    }

    .person .social-icon-zone {
        background-position: -60px 0
    }

    .person .social-icon-twitter {
        background-position: -80px 0
    }

    .person .social-icon-facebook {
        background-position: -100px 0
    }

    .person .social-icon-google_plus {
        background-position: -120px 0
    }

    .person .social-icon-douban {
        background-position: -140px 0
    }

    .person .social-icon-weibov {
        background-position: -160px 0
    }

    .person .social-icon-qq {
        background-position: -180px 0
    }

    .person .social-icon-index {
        background-position: -200px 0
    }

    .person .social-icon-knight {
        background-position: -220px 0
    }

    @media (-webkit-min-device-pixel-ratio: 1.25),(min-resolution:1.25dppx),(min-resolution:120dpi) {
        .person .iradio-square-green {
            background-image:url(//cdn2.jianshu.io/assets/radio/radio@2x-20f910c36563a491780c7cc3ed7e13b3.png);
            background-size: 100px 20px
        }

        .person .social-icon-sprite {
            background-image: url(//cdn2.jianshu.io/assets/social_icons/social@2x-4aa5a6de79e34c6a44ec157fd0a7b86b.png);
            background-size: 240px 20px
        }
    }

    #list-container .note-list .follow-detail .user-follow-button {
        float: right;
        margin-top: 4px;
        padding: 8px 0;
        width: 100px;
        font-size: 16px
    }

    @media (max-width: 1080px) {
        .person .aside .name {
            max-width:176px
        }

        .person .main .user-list .info {
            max-width: 315px
        }
    }

    .user-follow-button {
        text-align: center;
        border-radius: 40px;
        font-weight: 400;
        border: 1px solid transparent;
        line-height: normal
    }

    .user-follow-button span {
        margin-left: 2px
    }

    .user-follow-button.on {
        color: #8c8c8c;
        background-color: transparent;
        border-color: hsla(0,0%,59%,.6)
    }

    .user-follow-button.on i:before {
        content: "\E610"
    }

    .user-follow-button.on:hover {
        border-color: #969696;
        background-color: rgba(99,99,99,.05)
    }

    .user-follow-button.on:hover i:before {
        content: "\E631"
    }

    .user-follow-button.off {
        color: #fff;
        background-color: #42c02e
    }

    .user-follow-button.off:hover {
        border-color: #3db922;
        background-color: #3db922
    }

    .user-follow-button.off i:before {
        content: "\E611"
    }


</style>
@section('content')
<div class="container person">
    <div class="row">
        <div class="col-xs-16 main ">
            <div class="main-top">
                <a class="avatar" href="/tag/{{$tag->id}}">
                    <img src="{{$tag->cover}}" alt="240">
                </a>
                <div class="title">
                    <a class="name" href="/tag/{{$tag->id}}">{{$tag->name}}</a>
                </div>
                <div class="info">
                    <ul>
                        <li>
                            <div class="meta-block">
                                <p>{{$tag->profile}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="trigger-menu">
                <li class="active">文章</li>
            </ul>
              <div class='list-container'>
                  <ul class="note-list">
                      @foreach ($data as $article)
                            <li class="have-img">
                                <a class="wrap-img" href="/p/8f311564c78d" target="_blank">
                                    <img class="img-blur-done" src="//upload-images.jianshu.io/upload_images/2542851-46f12f1caefa1fb4.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="120">
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


            </div>
        </div>
    </div>
</div>
@endsection
