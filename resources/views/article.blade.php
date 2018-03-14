@extends('layouts.app')
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style type="text/css">
    .note {
        position: relative;
        padding-top: 10px
    }

    .note .post {
        margin: 0 auto;
        padding-top: 20px;
        padding-bottom: 40px;
        width: 620px
    }

    .note .post .article .title {
        word-break: break-word!important;
        word-break: break-all;
        margin: 20px 0 0;
        font-family: -apple-system,SF UI Display,Arial,PingFang SC,Hiragino Sans GB,Microsoft YaHei,WenQuanYi Micro Hei,sans-serif;
        font-size: 34px;
        font-weight: 700;
        line-height: 1.3
    }

    .note .post .article .author {
        margin: 30px 0 40px
    }

    .note .post .article .author .avatar {
        width: 48px;
        height: 48px;
        vertical-align: middle;
        display: inline-block
    }

    .note .post .article .author .info {
        vertical-align: middle;
        display: inline-block;
        margin-left: 8px
    }

    .note .post .article .author .info img.badge-icon {
        margin-right: 5px;
        width: 20px;
        height: 20px;
        border-radius: 0;
        border: 0
    }

    .note .post .article .author .name {
        margin-right: 3px;
        font-size: 16px;
        vertical-align: middle
    }

    .note .post .article .follow,.note .post .article .follow-cancel,.note .post .article .follow-each,.note .post .article .following,.note .post .article .user-follow-button-header {
        padding: 0 7px 0 5px;
        font-size: 12px
    }

    .note .post .article .author .meta {
        margin-top: 5px;
        font-size: 12px;
        color: #969696
    }

    .note .post .article .author .meta span {
        padding-right: 5px
    }

    .note .post .article .author .edit {
        float: right;
        margin-top: 8px;
        padding: 0 12px;
        font-size: 14px;
        border: 1px solid #dcdcdc;
        color: #9b9b9b;
        line-height: 30px;
        border-radius: 50px
    }

    .note .post .article .author .edit:hover {
        background-color: hsla(0,0%,71%,.1)
    }

    .note .post .article .show-content {
        color: #2f2f2f;
        word-break: break-word!important;
        word-break: break-all;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.7
    }

    .note .post .article .show-content p {
        margin: 0 0 25px
    }

    .note .post .article .show-content blockquote h1:last-child,.note .post .article .show-content blockquote h2:last-child,.note .post .article .show-content blockquote h3:last-child,.note .post .article .show-content blockquote h4:last-child,.note .post .article .show-content blockquote h5:last-child,.note .post .article .show-content blockquote h6:last-child,.note .post .article .show-content blockquote li:last-child,.note .post .article .show-content blockquote ol:last-child,.note .post .article .show-content blockquote p:last-child,.note .post .article .show-content blockquote ul:last-child {
        margin-bottom: 0
    }

    .note .post .article .show-content .video-package .video-description p {
        margin: 0
    }

    .note .post .article .show-content li p {
        overflow: visible
    }

    .note .post .article .show-content a {
        color: #3194d0
    }

    .note .post .article .show-content a:hover {
        color: #3194d0;
        text-decoration: underline
    }

    .note .post .article .show-content a.active,.note .post .article .show-content a:active,.note .post .article .show-content a:focus {
        color: #3194d0
    }

    .note .post .article .show-content a.disabled,.note .post .article .show-content a.disabled.active,.note .post .article .show-content a.disabled:active,.note .post .article .show-content a.disabled:focus,.note .post .article .show-content a.disabled:hover,.note .post .article .show-content a[disabled],.note .post .article .show-content a[disabled].active,.note .post .article .show-content a[disabled]:active,.note .post .article .show-content a[disabled]:focus,.note .post .article .show-content a[disabled]:hover {
        cursor: not-allowed;
        color: #f5f5f5
    }

    .note .post .article .show-content ol,.note .post .article .show-content p,.note .post .article .show-content ul {
        word-break: break-word!important;
        word-break: break-all
    }

    .note .post .article .show-content hr {
        margin: 0 0 20px;
        border-top: 1px solid #ddd
    }

    .note .post .article .show-content h1,.note .post .article .show-content h2,.note .post .article .show-content h3,.note .post .article .show-content h4,.note .post .article .show-content h5,.note .post .article .show-content h6 {
        margin: 0 0 15px;
        font-weight: 700;
        color: #2f2f2f;
        line-height: 1.7;
        text-rendering: optimizelegibility
    }

    .note .post .article .show-content h1 {
        font-size: 26px
    }

    .note .post .article .show-content h2 {
        font-size: 24px
    }

    .note .post .article .show-content h3 {
        font-size: 22px
    }

    .note .post .article .show-content h4 {
        font-size: 20px
    }

    .note .post .article .show-content h5 {
        font-size: 18px
    }

    .note .post .article .show-content h6 {
        font-size: 16px
    }

    .note .post .article .show-content img {
        max-width: 100%
    }

    .note .post .article .show-content blockquote {
        padding: 20px;
        margin-bottom: 25px;
        background-color: #f7f7f7;
        border-left: 6px solid #b4b4b4;
        word-break: break-word!important;
        word-break: break-all;
        font-size: 16px;
        font-weight: 400;
        line-height: 30px
    }

    .note .post .article .show-content blockquote p {
        font-size: 16px;
        font-weight: 400;
        line-height: 1.7
    }

    .note .post .article .show-content blockquote .image-package {
        width: auto;
        margin-left: 0
    }

    .note .post .article .show-content ol,.note .post .article .show-content ul {
        padding: 0;
        margin-left: 22px;
        margin-bottom: 20px
    }

    .note .post .article .show-content ol li,.note .post .article .show-content ul li {
        margin-bottom: 10px;
        line-height: 30px
    }

    .note .post .article .show-content ol li ol,.note .post .article .show-content ol li ul,.note .post .article .show-content ul li ol,.note .post .article .show-content ul li ul {
        margin-top: 15px
    }

    .note .post .article .show-content ol .image-package,.note .post .article .show-content ul .image-package {
        width: auto!important;
        margin-left: 0!important
    }

    .note .post .article .show-content pre {
        margin-bottom: 20px;
        padding: 15px;
        font-size: 13px;
        word-wrap: normal;
        word-break: break-word!important;
        word-break: break-all;
        white-space: pre;
        overflow: auto;
        border-radius: 0
    }

    .note .post .article .show-content pre code {
        padding: 0;
        background-color: transparent;
        white-space: pre
    }

    .note .post .article .show-content code {
        padding: 2px 4px;
        background-color: #f6f6f6;
        border: none;
        color: #657b83;
        font-size: 12px;
        white-space: pre-wrap
    }

    .note .post .article .show-content table {
        width: 100%;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-collapse: collapse;
        border-left: none;
        word-break: normal
    }

    .note .post .article .show-content table tr:nth-of-type(2n) {
        background-color: hsla(0,0%,71%,.1)
    }

    .note .post .article .show-content table thead th {
        vertical-align: middle;
        text-align: inherit
    }

    .note .post .article .show-content table td,.note .post .article .show-content table th {
        padding: 8px;
        border: 1px solid #ddd;
        line-height: 20px;
        vertical-align: middle
    }

    .note .post .article .show-content table th {
        font-weight: 700
    }

    .note .post .article .show-content table .image-package {
        width: auto;
        margin-left: 0
    }

    .note .post .article .show-content .image-package .image-container {
        z-index: 100;
        position: relative;
        background-color: #eee;
        transition: background-color .1s linear;
        margin: 0 auto
    }

    .note .post .article .show-content .image-package .image-container .image-container-fill {
        z-index: 50
    }

    .note .post .article .show-content .image-package .image-container .image-view {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .note .post .article .show-content .image-package .image-container .image-view img.image-loading {
        will-change: filter,opacity;
        -webkit-filter: blur(4px);
        filter: blur(4px);
        opacity: .3
    }

    .note .post .article .show-content .image-package .image-container .image-view img {
        transition: all .15s linear;
        z-index: 100;
        will-change: filter,opacity;
        -webkit-filter: blur(0);
        filter: blur(0);
        opacity: 1
    }

    .note .post .article .show-content .image-package {
        padding-bottom: 25px;
        width: 700px;
        margin-left: -40px;
        text-align: center
    }

    .note .post .article .show-content .image-package img {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
        border: 0;
        cursor: -webkit-zoom-in;
        transition: all .25s ease-in-out
    }

    .note .post .article .show-content .image-package .image-caption {
        min-width: 20%;
        max-width: 80%;
        min-height: 22px;
        display: inline-block;
        padding: 10px;
        margin: 0 auto;
        border-bottom: 1px solid #d9d9d9;
        font-size: 14px;
        color: #969696;
        line-height: 1.7
    }

    .note .post .article .show-content .image-package .image-caption:empty {
        display: none
    }

    .note .post .article .show-content .video-package {
        position: relative;
        margin: -20px auto 20px;
        text-align: center
    }

    .note .post .article .show-content .video-package .video-placeholder-area {
        position: relative;
        display: inline-block;
        height: 110px;
        padding: 10px;
        padding-left: 120px;
        box-sizing: border-box;
        border: 1px solid #d9d9d9;
        background-color: hsla(0,0%,71%,.1);
        text-align: left;
        cursor: pointer
    }

    .note .post .article .show-content .video-package .video-placeholder-area:after {
        content: " ";
        position: absolute;
        top: -1px;
        left: -1px;
        display: block;
        width: 110px;
        height: 110px;
        background-color: rgba(0,0,0,.3);
        background-image: url(//cdn2.jianshu.io/assets/common/play-btn-c4bc06b9dfe063495b6b8277b14bc5c3.png);
        background-position: 30px;
        background-size: 50px;
        background-repeat: no-repeat;
        transition: all .1s linear
    }

    .note .post .article .show-content .video-package .video-placeholder-area:hover:after {
        background-color: transparent
    }

    .note .post .article .show-content .video-package .video-placeholder-area .video-cover {
        position: absolute;
        top: -1px;
        left: -1px;
        display: block;
        width: 110px;
        height: 110px;
        opacity: .8;
        transition: opacity .1s linear
    }

    .note .post .article .show-content .video-package .video-description {
        min-width: 20%;
        min-height: 22px;
        display: none;
        padding: 10px;
        margin: 0 auto;
        border-bottom: 1px solid #d9d9d9;
        font-size: 13px;
        color: #999;
        line-height: 1.7
    }

    .note .post .article .show-content .video-package .video-description:empty {
        display: none
    }

    .note .post .article .show-content .video-package .video-close-button,.note .post .article .show-content .video-package .video-provider-button {
        text-align: left;
        font-size: 14px;
        padding: 0;
        line-height: 14px;
        cursor: pointer;
        transition: opacity .1s linear
    }

    .note .post .article .show-content .video-package .video-close-button i,.note .post .article .show-content .video-package .video-provider-button i {
        position: relative;
        top: 1px
    }

    .note .post .article .show-content .video-package .video-provider-button {
        float: right
    }

    .note .post .article .show-foot {
        margin: 40px 0 30px
    }

    .note .post .article .show-foot .notebook {
        font-size: 12px;
        color: #9b9b9b
    }

    .note .post .article .show-foot .notebook i {
        margin-right: 2px;
        font-size: 15px
    }

    .note .post .article .show-foot .copyright {
        float: right;
        margin-top: 5px;
        font-size: 12px;
        line-height: 1.7;
        color: #9b9b9b
    }

    .note .post .article .show-foot .modal-wrap {
        float: right;
        margin-top: 5px;
        margin-right: 20px;
        font-size: 12px;
        line-height: 1.7
    }

    .note .post .article .show-foot .modal-wrap>a {
        color: #9b9b9b
    }

    .note .post .follow-detail {
        padding: 20px;
        background-color: hsla(0,0%,71%,.1);
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        font-size: 12px
    }

    .note .post .follow-detail li {
        line-height: 20px
    }

    .note .post .follow-detail .avatar {
        float: left;
        margin-right: 10px;
        width: 48px;
        height: 48px
    }

    .note .post .follow-detail .info {
        min-height: 47px
    }

    .note .post .follow-detail .info img.badge-icon {
        margin-right: 3px;
        width: 20px;
        height: 20px;
        vertical-align: middle
    }

    .note .post .follow-detail .info .title {
        margin-right: 3px;
        font-size: 17px;
        line-height: 1.8;
        vertical-align: middle
    }

    .note .post .follow-detail .ic-man,.note .post .follow-detail .ic-woman {
        font-size: 15px;
        vertical-align: middle
    }

    .note .post .follow-detail .tag {
        padding: 1px 2px;
        font-size: 12px;
        color: #ea6f5a;
        border: 1px solid #ea6f5a;
        border-radius: 3px
    }

    .note .post .follow-detail .info p {
        margin-bottom: 0;
        color: #969696
    }

    .note .post .follow-detail .btn,.note .post .follow-detail .user-follow-button-footer {
        float: right;
        margin-top: 4px;
        padding: 8px 0;
        width: 100px;
        font-size: 16px
    }

    .note .post .follow-detail .signature {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #e1e1e1;
        color: #969696;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .note .post .dividing-line,.note .post .support-author {
        border-bottom: 1px solid #f0f0f0
    }

    .note .post .support-author {
        padding: 30px 0 20px;
        text-align: center;
        clear: both
    }

    .note .post .support-author p {
        padding: 0 30px;
        margin-bottom: 20px;
        min-height: 24px;
        font-size: 17px
    }

    .note .post .support-author .btn-pay {
        margin-bottom: 20px;
        padding: 8px 25px;
        font-size: 16px;
        color: #fff;
        background-color: #ea6f5a;
        border-radius: 20px
    }

    .note .post .support-author .btn-pay:hover {
        background-color: #ec6149
    }

    .note .post .support-author .supporter {
        height: 50px
    }

    .note .post .support-author .supporter .support-list {
        list-style: none;
        display: inline-block
    }

    .note .post .support-author .supporter .support-list li {
        margin: 0 -5px;
        display: inline-block
    }

    .note .post .support-author .supporter .support-list .avatar {
        width: 40px;
        height: 40px
    }

    .note .post .support-author .supporter .support-list .avatar img {
        border: 3px solid #fff
    }

    .note .post .support-author .supporter .modal-wrap {
        margin-left: 5px;
        font-size: 14px;
        color: #646464;
        vertical-align: -2px;
        cursor: pointer;
        display: inline-block
    }

    .note .post .support-author .supporter span {
        cursor: pointer;
        padding-left: 5px;
        margin-right: -10px;
        font-size: 13px
    }

    .note .post .meta-bottom {
        margin-top: 30px
    }

    .note .post .meta-bottom .like {
        display: inline-block
    }

    .note .post .meta-bottom .like-group {
        padding: 13px 0 15px;
        font-size: 0;
        border: 1px solid #ea6f5a;
        border-radius: 40px
    }

    .note .post .meta-bottom .like-group:hover {
        background-color: rgba(236,97,73,.05)
    }

    .note .post .meta-bottom .like-group .btn-like {
        font-size: 19px;
        display: inline-block
    }

    .note .post .meta-bottom .like-group .btn-like a {
        color: #ea6f5a;
        padding: 18px 15px 18px 30px
    }

    .note .post .meta-bottom .like-group .btn-like i {
        margin-right: 5px;
        font-size: 21px
    }

    .note .post .meta-bottom .like-group .modal-wrap {
        font-size: 18px;
        border-left: 1px solid rgba(236,97,73,.4);
        display: inline-block
    }

    .note .post .meta-bottom .like-group .modal-wrap a {
        color: #ea6f5a;
        padding: 18px 30px 18px 17px
    }

    .note .post .meta-bottom .like-group.active {
        background-color: #ea6f5a
    }

    .note .post .meta-bottom .like-group.active .btn-like>a {
        color: #fff
    }

    .note .post .meta-bottom .like-group.active .modal-wrap {
        border-left: 1px solid #fff
    }

    .note .post .meta-bottom .like-group.active .modal-wrap>a {
        color: #fff
    }

    .note .post .meta-bottom .share-group {
        float: right;
        margin-top: 6px
    }

    .note .post .meta-bottom .share-group .share-circle {
        width: 50px;
        height: 50px;
        margin-left: 5px;
        text-align: center;
        border: 1px solid #dcdcdc;
        border-radius: 50%;
        vertical-align: middle;
        display: inline-block
    }

    .note .post .meta-bottom .share-group .share-circle i {
        margin-top: 10px;
        font-size: 24px;
        line-height: 2
    }

    .note .post .meta-bottom .share-group .share-circle .ic-wechat {
        color: #00bb29
    }

    .note .post .meta-bottom .share-group .share-circle .ic-weibo {
        color: #e05244
    }

    .note .post .meta-bottom .share-group .share-circle .ic-picture {
        color: #9b9b9b
    }

    .note .post .meta-bottom .share-group .share-circle:hover {
        background-color: hsla(0,0%,71%,.1)
    }

    .note .post .meta-bottom .share-group .more-share {
        width: auto;
        padding: 4px 18px;
        font-size: 14px;
        color: #9b9b9b;
        line-height: 40px;
        border-radius: 50px
    }

    .note .post .meta-bottom .share-group .popover-content {
        padding: 0
    }

    .note .post .meta-bottom .share-group .share-list {
        margin: 0;
        list-style: none
    }

    .note .post .meta-bottom .share-group .share-list li {
        line-height: 20px
    }

    .note .post .meta-bottom .share-group .share-list a {
        padding: 5px 10px;
        display: block
    }

    .note .post .meta-bottom .share-group .share-list a:hover {
        background-color: #f0f0f0
    }

    .note .post .meta-bottom .share-group .share-list i {
        margin-right: 10px
    }

    .note .post .meta-bottom .share-group .share-list span {
        vertical-align: middle
    }

    .note .post .comment-list {
        padding-top: 100px
    }

    .note .post .comment-list .new-comment {
        position: relative;
        margin-left: 48px
    }

    .note .post .comment-list .new-comment .avatar {
        position: absolute;
        left: -48px
    }

    .note .post .comment-list .new-comment .sign-container,.note .post .comment-list .new-comment textarea {
        padding: 10px 15px;
        width: 100%;
        height: 80px;
        font-size: 13px;
        border: 1px solid #dcdcdc;
        border-radius: 4px;
        background-color: hsla(0,0%,71%,.1);
        resize: none;
        display: inline-block;
        vertical-align: top;
        outline-style: none
    }

    .note .post .comment-list .new-comment .sign-container {
        text-align: center
    }

    .note .post .comment-list .new-comment .btn-sign {
        width: 78px;
        margin: 11px 10px 0 0;
        padding: 7px 18px;
        font-size: 16px;
        border: none;
        border-radius: 20px;
        color: #fff!important;
        background-color: #3194d0;
        outline: none
    }

    .note .post .comment-list .new-comment .btn-sign:hover {
        background-color: #187cb7
    }

    .note .post .comment-list .new-comment .write-function-block {
        height: 50px
    }

    .note .post .comment-list .new-comment .write-function-block .emoji-modal {
        left: -48px
    }

    .note .post .comment-list .new-comment .emoji {
        float: left;
        margin-top: 14px
    }

    .note .post .comment-list .new-comment .emoji i {
        font-size: 20px;
        color: #969696
    }

    .note .post .comment-list .new-comment .emoji i:hover {
        color: #2f2f2f
    }

    .note .post .comment-list .new-comment .emoji-modal:after,.note .post .comment-list .new-comment .emoji-modal:before {
        left: 48px
    }

    .note .post .comment-list .new-comment .hint {
        float: left;
        margin: 20px 0 0 20px;
        font-size: 13px;
        color: #969696
    }

    .note .post .comment-list .new-comment .btn-send {
        float: right;
        width: 78px;
        margin: 10px 0;
        padding: 8px 18px;
        font-size: 16px;
        border: none;
        border-radius: 20px;
        color: #fff!important;
        background-color: #42c02e;
        cursor: pointer;
        outline: none;
        display: block
    }

    .note .post .comment-list .new-comment .btn-send:hover {
        background-color: #3db922
    }

    .note .post .comment-list .new-comment .cancel {
        float: right;
        margin: 18px 30px 0 0;
        font-size: 16px;
        color: #969696
    }

    .note .post .comment-list .new-comment .cancel:hover {
        color: #2f2f2f
    }

    .note .post .comment-list .new-comment span {
        font-size: 14px;
        vertical-align: -7px
    }

    .note .post .comment-list .top {
        padding-bottom: 20px;
        font-size: 17px;
        font-weight: 700;
        border-bottom: 1px solid #f0f0f0
    }

    .note .post .comment-list .top span {
        vertical-align: middle
    }

    .note .post .comment-list .comment {
        padding: 20px 0 30px;
        border-bottom: 1px solid #f0f0f0
    }

    .note .post .comment-list .comment:last-child {
        border-bottom: none
    }

    .note .post .comment-list .comment p {
        font-size: 16px
    }

    .note .post .comment-list .author {
        margin-bottom: 15px
    }

    .note .post .comment-list .avatar {
        margin-right: 5px;
        width: 38px;
        height: 38px;
        vertical-align: middle;
        display: inline-block
    }

    .note .post .comment-list .comment-wrap .comment-delete,.note .post .comment-list .comment-wrap .report {
        float: right;
        margin: 12px 0 0 10px;
        display: none
    }

    .note .post .comment-list .comment-wrap:hover .comment-delete,.note .post .comment-list .comment-wrap:hover .report {
        display: inherit
    }

    .note .post .comment-list p {
        margin: 10px 0;
        line-height: 1.5;
        font-size: 16px;
        word-break: break-word!important;
        word-break: break-all
    }

    .note .post .comment-list p a,.note .post .comment-list p a:hover {
        color: #3194d0
    }

    .note .post .comment-list .info {
        display: inline-block;
        vertical-align: middle
    }

    .note .post .comment-list .name {
        font-size: 15px;
        color: #333
    }

    .note .post .comment-list .name:hover {
        color: #2f2f2f
    }

    .note .post .comment-list .author-tag {
        margin-left: 2px;
        padding: 0 2px;
        font-size: 12px;
        color: #ea6f5a;
        border: 1px solid #ea6f5a;
        border-radius: 3px;
        vertical-align: middle
    }

    .note .post .comment-list .meta {
        font-size: 12px;
        color: #969696
    }

    .note .post .comment-list .meta span {
        margin-right: 6px
    }

    .note .post .comment-list .tool-group a {
        margin-right: 10px;
        font-size: 0;
        color: #969696;
        display: inline-block
    }

    .note .post .comment-list .tool-group a:hover {
        color: #333
    }

    .note .post .comment-list .tool-group a:hover .ic-zan {
        color: #ea6f5a
    }

    .note .post .comment-list .tool-group a i {
        margin-right: 5px;
        font-size: 18px;
        vertical-align: middle
    }

    .note .post .comment-list .tool-group a span {
        vertical-align: middle;
        font-size: 14px
    }

    .note .post .comment-list .tool-group a.active i {
        color: #ea6f5a
    }

    .note .post .comment-list .tool-group a.active span {
        color: #333
    }

    .note .post .comment-list .normal-comment-list {
        margin-top: 30px
    }

    .note .post .comment-list .normal-comment-list .top .author-only {
        margin-left: 10px;
        padding: 4px 8px;
        font-size: 12px;
        color: #969696;
        border: 1px solid #e1e1e1;
        border-radius: 12px
    }

    .note .post .comment-list .normal-comment-list .top .author-only.active {
        color: #fff;
        border: 1px solid #ea6f5a;
        background-color: #ea6f5a
    }

    .note .post .comment-list .normal-comment-list .top .close-btn {
        margin-left: 10px;
        font-size: 12px;
        color: #969696
    }

    .note .post .comment-list .normal-comment-list .top .pull-right a {
        margin-left: 10px;
        font-size: 12px;
        font-weight: 400;
        color: #969696;
        display: inline-block
    }

    .note .post .comment-list .normal-comment-list .top .pull-right .active,.note .post .comment-list .normal-comment-list .top .pull-right a:hover {
        color: #2f2f2f
    }

    .note .post .comment-list .normal-comment-list .close-comment,.note .post .comment-list .normal-comment-list .no-author-comment,.note .post .comment-list .normal-comment-list .no-comment {
        width: 226px;
        height: 92px;
        margin: 30px auto 20px;
        background: url(//cdn2.jianshu.io/assets/web/icon_comment_no-1b12627d360515e52c3c4dfc2f6b0eb7.png) no-repeat;
        background-size: contain
    }

    .note .post .comment-list .normal-comment-list .close-comment {
        background: url(//cdn2.jianshu.io/assets/web/icon_comment_close-1977c458f0eb7900b53b422cac10c713.png) no-repeat;
        background-size: contain
    }

    .note .post .comment-list .normal-comment-list .no-author-comment {
        background: url(//cdn2.jianshu.io/assets/web/icon_comment_no_writer-511f994389aa2409f189d680b13ff5ed.png) no-repeat;
        background-size: contain
    }

    .note .post .comment-list .normal-comment-list .text {
        margin-bottom: 50px;
        text-align: center;
        font-size: 12px;
        color: #969696
    }

    .note .post .comment-list .normal-comment-list .text a,.note .post .comment-list .normal-comment-list .text a:hover {
        color: #3194d0
    }

    .note .post .comment-list .normal-comment-list .open-block {
        padding: 30px 0 50px;
        text-align: center;
        border-top: 1px solid #f0f0f0
    }

    .note .post .comment-list .normal-comment-list .open-block .open-btn {
        padding: 10px 20px;
        font-size: 16px;
        color: #969696;
        border: 1px solid #dcdcdc;
        border-radius: 20px
    }

    .note .post .comment-list .sub-comment-list {
        margin-top: 20px;
        padding: 5px 0 5px 20px;
        border-left: 2px solid #d9d9d9
    }

    .note .post .comment-list .sub-comment-list p {
        margin: 0 0 5px;
        font-size: 14px;
        line-height: 1.5
    }

    .note .post .comment-list .sub-comment-list a,.note .post .comment-list .sub-comment-list a:hover {
        color: #3194d0
    }

    .note .post .comment-list .sub-comment-list .new-comment {
        margin: 0
    }

    .note .post .comment-list .sub-comment-list .new-comment .sign-container,.note .post .comment-list .sub-comment-list .new-comment textarea {
        width: 100%
    }

    .note .post .comment-list .sub-comment-list .new-comment .emoji {
        margin: 15px 0 0
    }

    .note .post .comment-list .sub-comment-list .emoji-modal-wrap .emoji-modal {
        left: -48px
    }

    .note .post .comment-list .sub-comment {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px dashed #f0f0f0
    }

    .note .post .comment-list .sub-comment:last-child {
        margin: 0;
        padding: 0;
        border: none
    }

    .note .post .comment-list .sub-comment .report,.note .post .comment-list .sub-comment .subcomment-delete {
        float: right;
        margin: 1px 0 0 10px;
        display: none
    }

    .note .post .comment-list .sub-comment:hover .report,.note .post .comment-list .sub-comment:hover .subcomment-delete {
        display: inherit
    }

    .note .post .comment-list .sub-tool-group {
        font-size: 12px;
        color: #969696
    }

    .note .post .comment-list .sub-tool-group a {
        margin-left: 10px;
        color: #969696
    }

    .note .post .comment-list .sub-tool-group a:hover {
        color: #333
    }

    .note .post .comment-list .sub-tool-group a i {
        margin-right: 5px;
        font-size: 14px;
        vertical-align: middle
    }

    .note .post .comment-list .sub-tool-group a span {
        vertical-align: middle
    }

    .note .post .comment-list .more-comment {
        font-size: 14px;
        color: #969696;
        border: none
    }

    .note .post .comment-list .add-comment-btn {
        color: #969696!important
    }

    .note .post .comment-list .add-comment-btn:hover {
        color: #333!important
    }

    .note .post .comment-list .add-comment-btn i {
        margin-right: 5px
    }

    .note .post .comment-list .line-warp {
        margin-left: 10px;
        padding-left: 10px;
        border-left: 1px solid #d9d9d9
    }

    .pay {
        text-align: center
    }

    .pay .modal-dialog {
        width: 620px
    }

    .pay .modal-header {
        padding: 15px 20px 0;
        border-bottom: none
    }

    .pay form {
        margin: 0 auto;
        padding: 0 60px
    }

    .pay .modal-body {
        padding-bottom: 25px
    }

    .pay .reward-intro {
        margin-bottom: 20px;
        font-size: 16px
    }

    .pay .reward-intro .avatar {
        cursor: default!important;
        width: 36px;
        height: 36px;
        margin-right: 10px;
        display: inline-block
    }

    .pay .reward-intro .intro {
        margin-right: 5px;
        font-weight: 700;
        vertical-align: middle
    }

    .pay .reward-intro i {
        color: #ea6f5a;
        vertical-align: middle
    }

    .pay .main-inputs {
        margin: 25px 0
    }

    .pay .main-inputs .amount-group {
        margin: 0 -5px
    }

    .pay .main-inputs .amount-group input {
        display: none
    }

    .pay .main-inputs .amount-group input:checked+.option {
        color: #ea6f5a;
        border-color: #ea6f5a
    }

    .pay .main-inputs .amount-group .custom-amount:checked+.option .custom-text {
        opacity: 0
    }

    .pay .main-inputs .amount-group .custom-amount:checked+.option .custom-amount-input {
        opacity: 1
    }

    .pay .main-inputs .amount-group .option {
        position: relative;
        margin: 0 5px 15px;
        width: 156px;
        height: 56px;
        line-height: 54px;
        border: 1px solid #e6e6e6;
        border-radius: 4px;
        font-weight: 400;
        color: #999;
        cursor: pointer
    }

    .pay .main-inputs .amount-group .option i {
        font-size: 16px;
        vertical-align: middle
    }

    .pay .main-inputs .amount-group .option .amount {
        font-size: 28px;
        vertical-align: middle
    }

    .pay .main-inputs .amount-group .option .piece {
        font-size: 13px;
        vertical-align: sub
    }

    .pay .main-inputs .amount-group .option .custom-amount-input {
        position: absolute;
        top: 0;
        z-index: -1;
        width: 100%;
        opacity: 0
    }

    .pay .main-inputs .amount-group .option .custom-amount-input i {
        position: absolute;
        top: 0;
        left: 10px
    }

    .pay .main-inputs .amount-group .option .custom-amount-input .piece {
        position: absolute;
        top: 4px;
        right: 10px
    }

    .pay .main-inputs .amount-group .option .custom-amount-input input {
        display: block;
        margin: 0 auto;
        width: 80px;
        height: 54px;
        line-height: 54px;
        border: none;
        font-size: 28px;
        text-align: center;
        background: transparent;
        -moz-appearance: textfield
    }

    .pay .main-inputs .amount-group .option .custom-amount-input input::-webkit-inner-spin-button,.pay .main-inputs .amount-group .option .custom-amount-input input::-webkit-outer-spin-button {
        -webkit-appearance: none!important
    }

    .pay .main-inputs .message {
        padding: 15px 20px;
        margin-bottom: 0;
        font-size: 14px;
        border: 1px solid #e6e6e6;
        color: #333;
        border-radius: 4px;
        background-color: hsla(0,0%,71%,.1)
    }

    .pay .main-inputs .message textarea {
        width: 100%;
        height: 44px;
        padding: 0;
        margin: 0;
        resize: none;
        background: none!important;
        border: none!important;
        box-sizing: border-box;
        box-shadow: none
    }

    .pay .main-inputs .message textarea:focus {
        outline: none
    }

    .pay .reward-info .amount {
        font-size: 28px;
        font-weight: 700;
        color: #ea6f5a
    }

    .pay .reward-info .pay-method {
        font-size: 14px
    }

    .pay .reward-info .pay-method a {
        color: #3194d0
    }

    .pay .choose-pay {
        margin: 0 -5px
    }

    .pay .choose-pay input {
        display: none
    }

    .pay .choose-pay input:checked+.option {
        color: #ea6f5a;
        border-color: #ea6f5a
    }

    .pay .choose-pay .option {
        margin: 20px 5px 10px;
        width: 156px;
        height: 56px;
        line-height: 54px;
        text-align: center;
        border: 1px solid #e6e6e6;
        border-radius: 4px;
        cursor: pointer
    }

    .pay .choose-pay .option img {
        height: 30px
    }

    .pay .choose-pay .option img.day.alipay,.pay .choose-pay .option img.night.alipay {
        min-width: 85px
    }

    .pay .choose-pay .option img.day.wechat,.pay .choose-pay .option img.night.wechat {
        min-width: 112px
    }

    .pay .choose-pay .option img.night {
        display: none
    }

    .pay .choose-pay .tooltip {
        width: 230px
    }

    .pay .modal-footer {
        padding: 0 15px 20px;
        border: none;
        background-color: transparent;
        text-align: center
    }

    .pay .modal-footer .btn {
        padding: 8px 45px;
        font-size: 24px
    }

    .pay .btn-pay {
        padding: 8px 25px;
        font-size: 16px;
        color: #fff;
        background-color: #f5a623
    }

    .success-pay,.weixin-pay {
        text-align: center
    }

    .success-pay .modal-dialog,.weixin-pay .modal-dialog {
        width: 350px
    }

    .success-pay .modal-header,.weixin-pay .modal-header {
        padding: 15px 20px 0;
        border-bottom: none
    }

    .success-pay .ic-successed,.weixin-pay .ic-successed {
        font-size: 60px;
        color: #3db922
    }

    .success-pay h2,.success-pay h3,.weixin-pay h2,.weixin-pay h3 {
        margin-bottom: 20px;
        color: #333
    }

    .success-pay h2,.weixin-pay h2 {
        margin: 0 0 40px;
        font-size: 24px
    }

    .success-pay .bind-text,.weixin-pay .bind-text {
        position: relative;
        margin-bottom: 30px;
        font-size: 14px;
        color: #999
    }

    .success-pay .bind-text:after,.success-pay .bind-text:before,.weixin-pay .bind-text:after,.weixin-pay .bind-text:before {
        content: "";
        border-top: 1px solid #999;
        display: block;
        position: absolute;
        width: 40px;
        top: 8px
    }

    .success-pay .bind-text:before,.weixin-pay .bind-text:before {
        left: 30px
    }

    .success-pay .bind-text:after,.weixin-pay .bind-text:after {
        right: 30px
    }

    .success-pay .share-bind,.weixin-pay .share-bind {
        display: block;
        margin-bottom: 30px
    }

    .success-pay .share-bind i,.weixin-pay .share-bind i {
        margin-right: 4px;
        font-size: 22px;
        vertical-align: middle
    }

    .success-pay .share-bind.wechat i,.weixin-pay .share-bind.wechat i {
        color: #00bb29
    }

    .success-pay .share-bind.weibo i,.weixin-pay .share-bind.weibo i {
        color: #e05244
    }

    .success-pay .wx-qr-code,.weixin-pay .wx-qr-code {
        display: inline-block
    }

    .success-pay .wx-qr-code img,.weixin-pay .wx-qr-code img {
        margin: 0 auto;
        padding: 10px;
        width: 200px;
        background-color: #fff
    }

    .success-pay .pay-amount,.weixin-pay .pay-amount {
        margin: 20px 0;
        color: #787878
    }

    .success-pay .pay-amount span,.weixin-pay .pay-amount span {
        color: #f5a623
    }

    .like-user,.reward-user {
        text-align: left
    }

    .like-user .modal-dialog,.reward-user .modal-dialog {
        width: 620px
    }

    .like-user .modal-body,.reward-user .modal-body {
        height: 500px
    }

    .like-user .modal-body ul,.reward-user .modal-body ul {
        margin: 0;
        list-style: none
    }

    .like-user .modal-body li,.reward-user .modal-body li {
        padding: 15px;
        border-bottom: 1px solid #f0f0f0
    }

    .like-user .modal-body .avatar,.reward-user .modal-body .avatar {
        margin-right: 5px;
        width: 32px;
        height: 32px;
        vertical-align: middle;
        display: inline-block
    }

    .like-user .modal-body .name,.reward-user .modal-body .name {
        font-size: 15px;
        color: #333;
        vertical-align: middle;
        display: inline-block
    }

    .like-user .modal-body .name:hover,.reward-user .modal-body .name:hover {
        color: #2f2f2f
    }

    .like-user .modal-body .time,.reward-user .modal-body .time {
        float: right;
        margin-top: 7px;
        font-size: 12px;
        color: #969696
    }

    .like-user .modal-footer,.reward-user .modal-footer {
        display: none
    }

    .add-self .modal-dialog,.requests .modal-dialog {
        width: 620px
    }

    .add-self .modal-body,.requests .modal-body {
        height: 500px
    }

    .add-self .modal-body ul,.requests .modal-body ul {
        margin: 0;
        list-style: none
    }

    .add-self .modal-body ul .default,.requests .modal-body ul .default {
        padding-top: 200px;
        font-size: 15px;
        color: #999;
        text-align: center
    }

    .add-self .modal-body ul .default a,.requests .modal-body ul .default a {
        color: #3194d0
    }

    .add-self .modal-body li,.requests .modal-body li {
        position: relative;
        padding: 20px;
        border-bottom: 1px solid #f0f0f0;
        line-height: normal
    }

    .add-self .modal-body .avatar-collection,.requests .modal-body .avatar-collection {
        margin-right: 5px;
        vertical-align: middle;
        display: inline-block
    }

    .add-self .modal-body .collection-info,.requests .modal-body .collection-info {
        vertical-align: middle;
        display: inline-block
    }

    .add-self .modal-body .collection-name,.requests .modal-body .collection-name {
        font-size: 15px;
        font-weight: 700;
        color: #333;
        display: block
    }

    .add-self .modal-body .collection-name:hover,.requests .modal-body .collection-name:hover {
        color: #2f2f2f
    }

    .add-self .modal-body .meta,.requests .modal-body .meta {
        font-size: 12px;
        color: #969696;
        display: inline-block
    }

    .add-self .modal-body .author-name,.add-self .modal-body .author-name:hover,.requests .modal-body .author-name,.requests .modal-body .author-name:hover {
        color: #3194d0
    }

    .add-self .modal-body .follow,.add-self .modal-body .follow-cancel,.add-self .modal-body .follow-each,.add-self .modal-body .following,.requests .modal-body .follow,.requests .modal-body .follow-cancel,.requests .modal-body .follow-each,.requests .modal-body .following {
        float: right;
        margin-top: 12.5px;
        padding: 5px 20px;
        width: 100px;
        font-size: 15px
    }

    .add-self .modal-body .search,.requests .modal-body .search {
        padding: 20px 22px 0
    }

    .add-self .modal-body .search input,.requests .modal-body .search input {
        width: 100%;
        padding: 7px 18px;
        background-color: hsla(0,0%,71%,.25);
        border: none;
        border-radius: 40px;
        font-size: 15px
    }

    .add-self .modal-body .search a,.requests .modal-body .search a {
        position: absolute;
        top: 25px;
        right: 37px;
        color: #969696
    }

    .add-self .modal-body .status,.requests .modal-body .status {
        font-size: 12px;
        vertical-align: middle
    }

    .add-self .modal-body span.has-add,.requests .modal-body span.has-add {
        color: #42c02e
    }

    .add-self .modal-body .action-btn,.requests .modal-body .action-btn {
        position: absolute;
        top: 50%;
        right: 20px;
        margin-top: -12px;
        padding: 2px 8px;
        font-size: 13px;
        border-radius: 12px;
        line-height: normal
    }

    .add-self .modal-body .push,.add-self .modal-body .repush,.requests .modal-body .push,.requests .modal-body .repush {
        color: #42c02e;
        border: 1px solid #42c02e
    }

    .add-self .modal-body .push:hover,.add-self .modal-body .repush:hover,.requests .modal-body .push:hover,.requests .modal-body .repush:hover {
        background-color: rgba(66,192,46,.05)
    }

    .add-self .modal-body .revoke,.requests .modal-body .revoke {
        color: #969696;
        border: 1px solid #969696
    }

    .add-self .modal-body .revoke:hover,.requests .modal-body .revoke:hover {
        background-color: hsla(0,0%,71%,.05)
    }

    .add-self .modal-body .remove,.requests .modal-body .remove {
        color: #ea6f5a;
        border: 1px solid #ea6f5a
    }

    .add-self .modal-body .remove:hover,.requests .modal-body .remove:hover {
        background-color: rgba(236,97,73,.05)
    }

    .add-self .modal-footer,.requests .modal-footer {
        display: none
    }

    .add-self .load-more,.requests .load-more {
        width: 200px;
        margin-bottom: 30px
    }

    .add-self .new-collection-btn,.requests .new-collection-btn {
        padding-left: 10px;
        font-size: 13px;
        font-weight: 400;
        vertical-align: middle
    }

    .add-self .new-collection-btn a,.requests .new-collection-btn a {
        color: #42c02e
    }

    .requests .modal-header .modal-title {
        display: inline-block
    }

    .requests .modal-header .search {
        position: absolute;
        top: 15px;
        right: 80px
    }

    .requests .modal-header .search input {
        display: inline-block;
        width: 240px;
        padding: 7px 18px;
        background-color: hsla(0,0%,71%,.25);
        border: none;
        border-radius: 40px;
        font-size: 15px
    }

    .requests .modal-header .search a {
        position: absolute;
        top: 6px;
        right: 12px;
        color: #969696
    }

    .requests .modal-dialog {
        width: 960px
    }

    .requests .modal-body {
        padding-bottom: 30px
    }

    .requests .modal-body li {
        display: inline-block;
        padding: 25px 20px;
        width: 33.3333%;
        border-right: 1px solid #f0f0f0
    }

    .requests .modal-body .collection-info {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        margin-left: 5px;
        width: 250px
    }

    .requests .modal-body .collection-info .collection-name {
        max-width: 180px
    }

    .requests .modal-body .avatar-collection {
        width: 40px;
        height: 40px
    }

    .requests .modal-body .meta {
        display: block;
        padding-top: 2px
    }

    .requests .new-collection-btn {
        padding-left: 10px;
        font-size: 13px;
        color: #42c02e
    }

    .requests .create-collection-btn {
        padding: 20px;
        font-size: 15px
    }

    .requests .create-collection-btn a {
        color: #42c02e
    }

    .requests .create-collection-btn i {
        padding-right: 3px
    }

    .requests .title {
        padding: 20px 0 10px 20px;
        font-size: 15px;
        color: #333;
        background-color: #f4f4f4;
        border-bottom: 1px solid #f0f0f0
    }

    .requests .show-more {
        padding: 10px 0;
        text-align: center;
        font-size: 13px
    }

    .requests .show-more a {
        color: #969696
    }

    .requests .show-more i {
        padding-left: 5px;
        margin-right: -15px
    }

    .modal-requests-placeholder {
        display: inline-block;
        margin-right: -5px;
        padding-bottom: 20px;
        width: 33.3333%
    }

    .modal-requests-placeholder .avatar {
        position: absolute;
        cursor: default!important;
        margin: 20px 0 0 20px;
        width: 40px;
        height: 40px;
        background-color: #eaeaea;
        border-radius: 5px
    }

    .modal-requests-placeholder .wrap {
        padding: 24px 20px 20px 70px!important;
        border-right: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0
    }

    .modal-requests-placeholder .wrap .btn {
        cursor: default!important;
        margin-top: 5px;
        float: right;
        width: 38px;
        height: 24px;
        background-color: #eaeaea;
        border-radius: 4px
    }

    .modal-requests-placeholder .wrap .name {
        position: inherit!important;
        width: 30px;
        height: 15px;
        background-color: #eaeaea
    }

    .modal-requests-placeholder .wrap .text {
        margin: 7px 0;
        width: 40%;
        height: 12px;
        background-color: #eaeaea;
        animation: shortLoading 1s ease-in-out -.5s infinite;
        -webkit-animation: shortLoading 1s ease-in-out -.5s infinite;
        -moz-animation: shortLoading 1s ease-in-out -.5s infinite;
        -o-animation: shortLoading 1s ease-in-out -.5s infinite;
        -ms-animation: shortLoading 1s ease-in-out -.5s infinite
    }

    .note-bottom {
        min-height: 213px;
        background-color: #f5f5f5;
        padding-top: 40px;
        padding-bottom: 40px
    }

    .note .iradio-square-green {
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

    .note .iradio-square-green.hover {
        background-position: -20px 0
    }

    .note .iradio-square-green.checked {
        background-position: -40px 0
    }

    .note .iradio-square-green.disabled {
        background-position: -60px 0;
        cursor: default
    }

    .note .iradio-square-green.checked.disabled {
        background-position: -80px 0
    }

    .note .social-icon-sprite {
        display: inline-block;
        *display: inline;
        vertical-align: middle;
        margin: 0;
        padding: 0;
        width: 18px;
        height: 18px;
        background: url(//cdn2.jianshu.io/assets/social_icons/social-e899099573ece117d8b1c274fd91563c.png) no-repeat
    }

    .note .social-icon-weibo {
        background-position: 0 0
    }

    .note .social-icon-weixin {
        background-position: -20px 0
    }

    .note .social-icon-picture {
        background-position: -40px 0
    }

    .note .social-icon-zone {
        background-position: -60px 0
    }

    .note .social-icon-twitter {
        background-position: -80px 0
    }

    .note .social-icon-facebook {
        background-position: -100px 0
    }

    .note .social-icon-google {
        background-position: -120px 0
    }

    .note .social-icon-douban {
        background-position: -140px 0
    }

    .note .social-icon-weibov {
        background-position: -160px 0
    }

    .note .social-icon-qq {
        background-position: -180px 0
    }

    .note .social-icon-index {
        background-position: -200px 0
    }

    .note .social-icon-knight {
        background-position: -220px 0
    }

    @media (-webkit-min-device-pixel-ratio: 1.25),(min-resolution:1.25dppx),(min-resolution:120dpi) {
        .note .iradio-square-green {
            background-image:url(//cdn2.jianshu.io/assets/radio/radio@2x-20f910c36563a491780c7cc3ed7e13b3.png);
            background-size: 100px 20px
        }

        .note .social-icon-sprite {
            background-image: url(//cdn2.jianshu.io/assets/social_icons/social@2x-4aa5a6de79e34c6a44ec157fd0a7b86b.png);
            background-size: 240px 20px
        }
    }

    @media (max-width: 1080px) {
        .requests .modal-dialog {
            width:750px
        }

        .requests .modal-body .collection-info {
            width: 304px
        }

        .requests .modal-body .collection-info .collection-name {
            max-width: 230px
        }

        .modal-requests-placeholder .wrap,.requests .modal-body li {
            width: 50%
        }
    }

    .comments-placeholder {
        padding: 20px 0 30px
    }

    .comments-placeholder .author {
        margin-bottom: 15px
    }

    .comments-placeholder .author .avatar {
        cursor: default!important;
        margin-right: 5px;
        width: 38px;
        height: 38px;
        background-color: #eaeaea;
        border-radius: 50%
    }

    .comments-placeholder .author .avatar,.comments-placeholder .author .info {
        vertical-align: middle;
        display: inline-block
    }

    .comments-placeholder .author .info .name {
        margin-bottom: 6px;
        height: 15px;
        width: 60px;
        background-color: #eaeaea
    }

    .comments-placeholder .author .info .meta {
        height: 12px;
        width: 120px;
        background-color: #eaeaea
    }

    .comments-placeholder .text {
        width: 100%;
        height: 16px;
        margin: 0 0 8px!important;
        background-color: #eaeaea;
        animation: loading 1s ease-in-out infinite;
        -webkit-animation: loading 1s ease-in-out infinite;
        -moz-animation: loading 1s ease-in-out infinite;
        -o-animation: loading 1s ease-in-out infinite;
        -ms-animation: loading 1s ease-in-out infinite
    }

    .comments-placeholder .animation-delay {
        animation: loading 1s ease-in-out -.5s infinite;
        -webkit-animation: loading 1s ease-in-out -.5s infinite;
        -moz-animation: loading 1s ease-in-out -.5s infinite;
        -o-animation: loading 1s ease-in-out -.5s infinite;
        -ms-animation: loading 1s ease-in-out -.5s infinite
    }

    .comments-placeholder .tool-group {
        margin: 0;
        padding-top: 6px;
        color: #eaeaea;
        font-size: 15px
    }

    .comments-placeholder .tool-group div {
        display: inline-block;
        vertical-align: middle;
        background-color: #eaeaea
    }

    .comments-placeholder .tool-group i {
        margin-right: 5px;
        vertical-align: middle
    }

    .comments-placeholder .tool-group .zan {
        height: 14px;
        width: 40px;
        margin-right: 10px
    }

    .sub-comments-placeholder {
        padding-top: 6px
    }

    .sub-comments-placeholder .text {
        width: 100%;
        height: 16px;
        margin: 0 0 8px!important;
        background-color: #eaeaea;
        animation: loading 1s ease-in-out infinite;
        -webkit-animation: loading 1s ease-in-out infinite;
        -moz-animation: loading 1s ease-in-out infinite;
        -o-animation: loading 1s ease-in-out infinite;
        -ms-animation: loading 1s ease-in-out infinite
    }

    .sub-comments-placeholder .animation-delay {
        animation: loading 1s ease-in-out .5s infinite;
        -webkit-animation: loading 1s ease-in-out .5s infinite;
        -moz-animation: loading 1s ease-in-out .5s infinite;
        -o-animation: loading 1s ease-in-out .5s infinite;
        -ms-animation: loading 1s ease-in-out .5s infinite
    }

    .sub-comments-placeholder .tool-group {
        margin-top: -2px;
        color: #eaeaea
    }

    .sub-comments-placeholder .tool-group div {
        display: inline-block;
        vertical-align: middle;
        background-color: #eaeaea
    }

    .sub-comments-placeholder .tool-group i {
        font-size: 13px;
        margin: 0 5px 0 10px;
        vertical-align: middle
    }

    .sub-comments-placeholder .tool-group .time {
        width: 96px;
        height: 12px
    }

    .sub-comments-placeholder .tool-group .comment {
        padding: 0!important;
        width: 24px;
        height: 12px
    }

    .tooltip-inner {
        max-width: none
    }

    .hljs,pre {
        background: #f6f6f6;
        color: #657b83;
        -webkit-text-size-adjust: none
    }

    .diff .hljs-header,.hljs-comment,.hljs-doctype,.hljs-pi,.lisp .hljs-string {
        color: #93a1a1
    }

    .css .hljs-tag,.hljs-addition,.hljs-keyword,.hljs-request,.hljs-status,.hljs-winutils,.method,.nginx .hljs-title {
        color: #859900
    }

    .hljs-command,.hljs-doctag,.hljs-hexcolor,.hljs-link_url,.hljs-number,.hljs-regexp,.hljs-rule .hljs-value,.hljs-string,.hljs-tag .hljs-value,.tex .hljs-formula {
        color: #2aa198
    }

    .css .hljs-function,.hljs-built_in,.hljs-chunk,.hljs-decorator,.hljs-id,.hljs-identifier,.hljs-localvars,.hljs-name,.hljs-title,.vhdl .hljs-literal {
        color: #268bd2
    }

    .hljs-attribute,.hljs-class .hljs-title,.hljs-constant,.hljs-link_reference,.hljs-parent,.hljs-type,.hljs-variable,.lisp .hljs-body,.smalltalk .hljs-number {
        color: #b58900
    }

    .css .hljs-pseudo,.diff .hljs-change,.hljs-attr_selector,.hljs-cdata,.hljs-header,.hljs-pragma,.hljs-preprocessor,.hljs-preprocessor .hljs-keyword,.hljs-shebang,.hljs-special,.hljs-subst,.hljs-symbol,.hljs-symbol .hljs-string {
        color: #cb4b16
    }

    .hljs-deletion,.hljs-important {
        color: #dc322f
    }

    .hljs-link_label {
        color: #6c71c4
    }

    .tex .hljs-formula {
        background: #eee8d5
    }

    /*# sourceMappingURL=entry-319cd8f71e179151094e.css.map*/
</style>
@section('content')
    <div class="note">
        <div class="post">
            <div class="article">
                <h1 class="title">{!! $data->title !!}</h1>

                <!-- 作者区域 -->
                <div class="author">
                    <a class="avatar" href="/u/{{$data->user->id}}">
                        <img src="{{$data->user->avatar}}" alt="96">
                    </a>
                    <div class="info">
                        <span class="name"><a href="/u/{{$data->user->id}}">{{$data->user->name}}</a></span>
                        <!-- 关注用户按钮 -->
                        <!-- 文章数据信息 -->
                        <div class="meta">
                            <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                            <span class="publish-time" data-toggle="tooltip" data-placement="bottom" title="">{{$data->created_at}}</span>
                        </div>
                    </div>
                    <!-- 如果是当前作者，加入编辑按钮 -->
                </div>
                <!-- -->

                <!-- 文章内容 -->
                <div data-note-content="" class="show-content">
                    {!! $data->resolved_content !!}
                </div>
            </div>

        {{--<div class="side-tool">--}}
            {{--<ul>--}}
                {{--<li data-placement="left" data-toggle="tooltip" data-container="body" data-original-title="回到顶部" style=""><a class="function-button" href="#"><i class="iconfont ic-backtop"></i></a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
    </div>
@endsection
