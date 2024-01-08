@extends('templates/main-page')
@section('title', "Text Field")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Text Field</h1>

<div class="p-3">

    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "text",
            'path' => "../resources/views/forms-usage/text-example.blade.php",
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
        @include('forms.text', [
            'id' => "name",  //'class' => '',
            'placeholder' => "Ім'я", 
            "minlength" => "1",  "maxlength" => "50", 
            "disabled" => false,
            'value' => ''
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "hidden",
            'path' => "../resources/views/forms/text.blade.php",
            'lang' => "php",
        ])
    </div>


</div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection