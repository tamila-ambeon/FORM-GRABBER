<?php $content = file_get_contents(resource_path($path)); ?>
<pre><code id="{{$id}}" class="language-{{$lang}}">{{$content}}</code></pre>
<div class="flex-start mb-3">
    <div class="copy-btn" data-clipboard-target="#{{$id}}">Копіювати</div>
</div>
