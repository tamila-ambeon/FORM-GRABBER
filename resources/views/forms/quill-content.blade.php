@if(isset($id))
<div class="d-none">
    @include('forms.text-editor', [
        'id' => $id, 
        "readonly" => true, 
        @if(isset($value)) 'value' => $value @endif
    ])
</div>
<div class="quill-content" id="{{$id}}-content"></div>

<script>
document.getElementById("{{$id}}-content").innerHTML = TextEditors.getInstance().findEditorById("adresses").core.root.innerHTML
</script>

@else 
Error: Specify ID form Quill editor.
@endif