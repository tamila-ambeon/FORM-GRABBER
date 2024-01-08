<div class="d-none">
    @include('forms.text-editor', [
        'id' => $id, 
        'placeholder' => "...", 
        "readonly" => true, 
        'value' => $value
    ])
</div>
<div class="quill-content" id="{{$id}}-content"></div>

<script>
document.getElementById("{{$id}}-content").innerHTML = TextEditors.getInstance().findEditorById("adresses").core.root.innerHTML
</script>
