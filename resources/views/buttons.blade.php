@extends('templates/main-page')
@section('title', "Кнопки Laravel")

@section('content')
<div id="article" class="mt-3">
<h1 style="text-align: center;">Кнопки</h1>

    <div class="p-3">
        <h3>Види кнопок:</h3>
        <div class="mb-3"> 
 
            @foreach(["small", "middle", "big"] as $size)
            <div class="d-flex flex-row">
                @foreach(["green", "red", "default", "disabled"] as $type)
                   <div class="m-1">
                       
                        @include('forms.button', [
                            'id' => 'btn-' . $size . '-' . $type, // ідентифікатор кнопки
                            'title' => 'Button ' . $size . ' ' . $type, // надпис на кнопці
                           // 'title' => 'Ще одна кнопка', // надпис на кнопці
                            'size' => $size, // small, middle, big
                            'type' => $type, // green, red, disabled, default
                        ])
                   </div> 
                @endforeach
            </div>
            @endforeach
   
        </div>



        <h3>Код для копіювання:</h3>
        <div class="mb-3"> 
            @include("templates.code", [
                "id" => "text",
                'path' => "../resources/views/forms-usage/button-example.blade.php",
                'lang' => "php",
            ]) 
        </div>
        <div class="mb-3"> 
            <p>Вказаний ідентифікатор слід передати обробнику Form Grabber.</p>
        </div>

    </div>
</div>
@endsection

@section('sidebar')

@endsection