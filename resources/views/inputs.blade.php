@extends('templates/main-page')
@section('title', "Інпути Laravel")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Приклад використання форм</h1>

    <!----- form: ----->
    <div id="form" class=" mt-2">
        
        <!----- row: ----->
        <div class="container">
        <div class="row">
            <div class="col-4 ps-4 pe-4 ">

                <div class="mb-2">
                    @include('forms.hidden', [
                        'id' => "hidden_id", 
                        'value' => 42
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.number', [
                        'id' => "age", //'class' => '',
                        'placeholder' => "Ім'я", 
                        "min" => "0", "max" => "150", "step" => "1",
                        "disabled" => false,
                        'value' => 33
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.text', [
                        'id' => "some_text",  //'class' => '',
                        'placeholder' => "Текстове поле", 
                        "minlength" => "1",  "maxlength" => "50", "disabled" => false,
                        'value' => 'Якийсь текст'
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.textarea', [
                        'id' => "some_text_area", //'class' => '',  
                        'placeholder' => "Багато тексту", 
                        "rows" => "3", "cols" => "10", 
                        "disabled" => false,
                        'value' => "Привіт світе!"
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.text-editor', [
                        'id' => "quill_content", 
                        "readonly" => false, 
                        //'value' => ''
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.select', [
                        'id' => "drink",  
                        'items' => [0 => "Сок", 1 => "Живчик", 2 => "Кока-кола"],
                        "disabled" => false,
                        'selected_value' => 1
                    ])  
                </div>


                <div class="mb-2">
                    @include('forms.radio', [
                        'id' => "youtube",  
                        "disabled" => false,
                        'items' => [0 => "ASMR", 1 => "Code"], // [value => label]
                        'checked_value' => 0
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.checkbox', [
                        'id' => "locations", 
                        "disabled" => false, 
                        'items' => [0 => "Gludin", 1 => "Gludio", 2 => "Dion", 3 => "Giran"], // [value => label]
                        'checked_values' => [0, 1, 3]
                    ])  
                </div>


                <div class="mb-2">
                    @include('forms.date-picker', [
                        'id' => "date",
                        "disabled" => false,
                        'value' => "1991-04-14" // format: YYYY-MM-DD
                    ])
                </div>

                <div class="mb-2">
                    @include('forms.datetime-picker', [
                        'id' => "time",
                        "disabled" => false,
                        'value' => "2024-01-01T01:01" // format: YYYY-MM-DDTHH:MM
                    ])
                </div>

                <div class="mb-2 d-flex flex-row">
                    @include('forms.button', [
                        'id' => 'done_button', // ідентифікатор кнопки
                        'title' => 'Отримати дані', // надпис на кнопці
                        'size' => 'middle', // small, middle, big
                        'type' => 'green', // green, red, disabled, default
                    ])

                    @include('forms.button', [
                        'id' => 'waiting_button', // ідентифікатор кнопки
                        'title' => 'Обробляю дані', // надпис на кнопці
                        'size' => 'middle', // small, middle, big
                        'type' => 'disabled', // green, red, disabled, default
                        'display' => false,
                        'icon' => 'spinner'
                    ])
                </div>


            </div>
            <!---- /col-4 --->

            <!---- col-8 --->
            <div class="col-8">
                <div class="p-3 bg-light" >
                    <pre id="result"></pre>
                </div>
            </div>
            <!---- /col-8 --->

        </div>
        </div>
        <!----- /row ----->


    </div>
    <!----- /form ----->

</div>
<script src="{{URL::to('/')}}/js/inputs/done-form.js"></script>

@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection