@extends('templates/main-page')
@section('title', "Quill Text Editor")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Quill Text Editor</h1>
<div class="p-3">
    <!------------------->
    <h3>Код редактору для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "text",
            'path' => "../resources/views/forms-usage/text-editor-example.blade.php",
            'lang' => "php",
        ])
    </div>

    <!------------------->
    <h3>Додаткова інформація:</h3>
    <div class="mb-3">
        Поле value можна не передавати. У полі value потрібно передати спеціальний об'єкт редактору Quill. І його ж треба зберігати в базу в форматі JSON.
    </div>


    <!------------------->
    <h3>Як вивести вміст тестового редактору на сайті:</h3>
    <div class="mb-3">
        quil-content
    </div>


    <!------------------->
    <h3>Приклад:</h3>
    <div class="mb-3">
        @include('forms.text-editor', [
            'id' => "content", 
            "readonly" => false, 
            //'value' => ''
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "text-editor",
            'path' => "../resources/views/forms/text-editor.blade.php",
            'lang' => "php",
        ])
    </div>

</div>
</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection