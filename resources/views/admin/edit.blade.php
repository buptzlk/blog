<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>Themes - Editor.md examples</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    </head>
    <body>
    <form action="/article/add" method="post">
       <input name="title" />
        <textarea name="summary"></textarea>
        <textarea name="contents"></textarea>
        <input name="tags" />
        <input name="cover"/>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="submit"/>

        </form>
    </body>
</html>
