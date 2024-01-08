@include('forms.radio', [
    'id' => "gender",  
    "disabled" => false,
    'items' => [0 => "Жінка", 1 => "Чоловік"], // [value => label]
    'checked_value' => 1
])