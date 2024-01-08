@extends('templates/main-page')
@section('title', "Checkbox Field")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Checkbox Field</h1>

<div class="p-3">
    <!------------------->
    <h3>Код для копіювання:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "checkbox",
            'path' => "../resources/views/forms-usage/checkbox-example.blade.php",
            'lang' => "php",
        ])
    </div>

    <!------------------->
    <h3>Додаткова інформація:</h3>
    <div class="mb-3">
        У масив items слід передати перелік ключів та значень. Значення будуть відображатися навпроти кружочків. <br>JS бібліотека Form Grabber буде збирати дані орієнтуючись на клас: <code><?php echo 'class="{{$id}}-input"'; ?></code>.
    </div>



    <!------------------->
    <h3>Приклад:</h3>
    <div class="mb-3">
        @include('forms.checkbox', [
            'id' => "gender", 
            "disabled" => false, 
            'items' => [0 => "Жінка", 1 => "Чоловік"], // [value => label]
            'checked_values' => [0, 1]
        ])
    </div>


    <!------------------->
    <h3>Код шаблону:</h3>
    <div class="mb-3">
        @include("templates.code", [
            "id" => "checkbox",
            'path' => "../resources/views/forms/checkbox.blade.php",
            'lang' => "php",
        ])
    </div>

</div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection