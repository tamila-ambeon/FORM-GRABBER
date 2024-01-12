<!--  -->
<html>
    <head>
        <base href="{{URL::to('/')}}">
        <title>@yield('title')</title>


        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@600&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">  
        <script src="{{URL::to('/')}}/other_libs/highlight_js/highlight.js"></script>
        <script src="{{URL::to('/')}}/other_libs/clipboard.js"></script>
        <link rel="stylesheet" href="{{URL::to('/')}}/other_libs/highlight_js/styles/base16/danqing.css">

        <!-- Це моя бібліотека -->
        <link href="{{URL::to('/')}}/form-grabber-bundle.css" rel="stylesheet">
        <script src="{{URL::to('/')}}/form-grabber-bundle.js"></script>
        

        <link href="{{URL::to('/')}}/doc-styles-bundle.css" rel="stylesheet">
        
    </head>
<body>

<div id="header">
    <a class="header-btn" href="{{URL::to('/')}}">Інсталяція</a>
    <a class="header-btn" href="{{URL::to('/')}}/inputs">Форми</a>
    <a class="header-btn" href="{{URL::to('/')}}/buttons">Кнопки</a>
</div>



<div class="container-fluid ps-0 pe-0" id="page-content">
    <div class="flexbox">
        <div class="grey">@yield('sidebar')</div>
        <div class="green">@yield('content')</div>
      </div>
</div>


@yield('scripts')

<div id="footer-box">
    #footer-box
</div>
<script>
hljs.highlightAll()
new ClipboardJS('.copy-btn')
</script>

</body>
</html>