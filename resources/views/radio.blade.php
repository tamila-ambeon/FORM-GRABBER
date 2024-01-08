@extends('templates/main-page')
@section('title', "Radio Field")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Radio Field</h1>

<div class="p-3">
    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "select",
            'path' => "../resources/views/forms-usage/radio-example.blade.php",
            'lang' => "php",
        ])
    </div>

    <!------------------->
    <h3>Додаткова інформація:</h3>
    <div class="mb-3">
        У масив items слід передати перелік ключів та значень. Значення будуть відображатися навпроти кружочків.
    </div>



    <!------------------->
    <h3>Приклад:</h3>
    <div class="mb-3">
        @include('forms.radio', [
            'id' => "gender",  
            "disabled" => false,
            'items' => [0 => "Жінка", 1 => "Чоловік"], // [value => label]
            'checked_value' => 1
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "select",
            'path' => "../resources/views/forms/radio.blade.php",
            'lang' => "php",
        ])
    </div>

</div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection