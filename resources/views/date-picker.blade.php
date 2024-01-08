@extends('templates/main-page')
@section('title', "Date picker")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Date picker</h1>

<div class="p-3">

    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "date",
            'path' => "../resources/views/forms-usage/date-example.blade.php",
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
        @include('forms.date-picker', [
            'id' => "name",
            "disabled" => false,
            'value' => "2023-12-12" // format: YYYY-MM-DD
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "date",
            'path' => "../resources/views/forms/date-picker.blade.php",
            'lang' => "php",
        ])
    </div>


</div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection