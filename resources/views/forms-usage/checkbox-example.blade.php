@include('forms.checkbox', [
    'id' => "gender", 
    "disabled" => false, 
    'items' => [0 => "Жінка", 1 => "Чоловік"], // [value => label]
    'checked_values' => [0, 1]
])