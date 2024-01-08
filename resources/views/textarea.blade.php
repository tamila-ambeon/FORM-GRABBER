@extends('templates/main-page')
@section('title', "Textarea")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Textarea</h1>

<div class="p-3">
    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "textarea",
            'path' => "../resources/views/forms-usage/textarea-example.blade.php",
            'lang' => "php",
        ])
    </div>

    <!------------------->
    <h3>Додаткова інформація:</h3>
    <div class="mb-3">
        Немає.
    </div>



    <!------------------->
    <h3>Приклад:</h3>
    <div class="mb-3">
        @include('forms.textarea', [
            'id' => "gender",  
            'placeholder' => "Ім'я", 
            "minlength" => "1", "maxlength" => "50", 
            "rows" => "3", "cols" => "50", 
            "readonly" => true, "disabled" => false,
            'value' => "Привіт"
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "textarea",
            'path' => "../resources/views/forms/textarea.blade.php",
            'lang' => "php",
        ])
    </div>

</div>
</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection