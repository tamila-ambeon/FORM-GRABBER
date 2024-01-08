@include('forms.number', [
    'id' => "age", //'class' => '',
    'placeholder' => "Ім'я", 
    "min" => "10", "max" => "50", "step" => "0.1",
    "disabled" => false,
    'value' => 10
])