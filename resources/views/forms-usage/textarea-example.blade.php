@include('forms.textarea', [
    'id' => "gender", //'class' => '',  
    'placeholder' => "Ім'я", 
    "minlength" => "1", "maxlength" => "50", 
    "rows" => "3", "cols" => "50", 
    "disabled" => false,
    'value' => "Привіт"
])