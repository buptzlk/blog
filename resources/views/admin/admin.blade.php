<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>Simple example - Editor.md examples</title>
        <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/markdown.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="#" type="image/x-icon" /> 
    </head>
    <body>
        <div id="layout">
            <header>
                <h1>Simple example</h1>
            </header>
            <div id="test-editormd">
                <textarea style="display:none;">

</textarea>
            </div>
        </div>
        <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
        <script src="{{ asset('js/admin/editormd.js') }}"></script>
        <script type="text/javascript">
			var testEditor;

            $(function() {
                testEditor = editormd("test-editormd", {
                    width   : "90%",
                    height  : 640,
                    syncScrolling : "single",
                    path    : "../lib/"
                });
                
                /*
                // or
                testEditor = editormd({
                    id      : "test-editormd",
                    width   : "90%",
                    height  : 640,
                    path    : "../lib/"
                });
                */
            });
        </script>
    </body>
</html>
