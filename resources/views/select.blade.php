@extends('templates/main-page')
@section('title', "Select Field")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Select Field</h1>


<div class="p-3">
    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "select",
            'path' => "../resources/views/forms-usage/select-example.blade.php",
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
        @include('forms.select', [
            'id' => "gender",  
            'items' => [0 => "Жінка", 1 => "Чоловік"],
            "disabled" => false,
            'selected_value' => 1
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "select",
            'path' => "../resources/views/forms/select.blade.php",
            'lang' => "php",
        ])
    </div>

</div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection