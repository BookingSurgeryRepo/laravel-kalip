<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
    
</div>


<script type="text/javascript">
    window.onload = () => {
        window.editor = grapesjs.init({
            height: '100%',
            showOffsets: true,
            noticeOnUnload: false,
            storageManager: false,
            container: '#gjs',
            fromElement: true,

            plugins: ['grapesjs-preset-webpage'],
            pluginsOpts: {
                'grapesjs-preset-webpage': {}
            }
        });
    };
</script>
</body>
</html>