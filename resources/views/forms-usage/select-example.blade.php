@include('forms.select', [
    'id' => "gender",  
    'items' => [0 => "Жінка", 1 => "Чоловік"],
    "disabled" => false,
    'selected_value' => 1
])