@extends('templates/main-page')
@section('title', "Number Field")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Number Field</h1>
<div class="p-3">
    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "text",
            'path' => "../resources/views/forms-usage/number-example.blade.php",
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
        @include('forms.number', [
            'id' => "age", 
            'placeholder' => "Ім'я", 
            "min" => "10", "max" => "50", "step" => "0.1",
            "disabled" => false,
            'value' => 10
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "number",
            'path' => "../resources/views/forms/number.blade.php",
            'lang' => "php",
        ])
    </div>

</div>
</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection