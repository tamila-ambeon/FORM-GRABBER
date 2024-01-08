@extends('templates/main-page')
@section('title', "Datetime picker")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Datetime picker</h1>

<div class="p-3">

    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "datetime",
            'path' => "../resources/views/forms-usage/datetime-example.blade.php",
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
        @include('forms.datetime-picker', [
            'id' => "name",
            "disabled" => false,
            'value' => "2023-12-12T19:30" // format: YYYY-MM-DDTHH:MM
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "datetime",
            'path' => "../resources/views/forms/datetime-picker.blade.php",
            'lang' => "php",
        ])
    </div>


</div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection