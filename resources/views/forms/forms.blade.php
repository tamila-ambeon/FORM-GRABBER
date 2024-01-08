<!--  -->
<html>
    <head>
        <title>Формочки</title>
        
        <link href="{{URL::to('/')}}/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="{{URL::to('/')}}/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
    </head>
    <body>

<!-------------------------------------->
<div class="container-fluid p-0">
    <ul class="nav justify-content-center text-bg-dark">

        <li class="nav-item">
            <a class="nav-link link-light" aria-current="page" href="{{ URL::to('/')}}">Головна</a>
        </li>
    </ul>
</div>
<!-------------------------------------->

<div class="container-fluid">
<div class="row">

      <!--- MAIN CONTENT: ---->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>Section title</h2>
  
      </main>
      <!--- /MAIN CONTENT ---->
</div>
<!--- /MAIN ROW ---->
</div>
<!--- /MAIN CONTAINER ---->



<div class="container-fluid">

    <!---------------->
    <div class="row border mt-3 mb-3 ms-2 me-2">
        <div class="col-8 pt-3">

<code>
<pre>@@include('forms.text', [
    'id' => "name", 
    'placeholder' => "Ім'я", 
    "minlength" => "1", 
    "maxlength" => "50", 
    "readonly" => true, 
    'value' => $person->name
])</pre>
</code>
        </div>
        <div class="col-4">
            <div class="d-flex m-1 p-1 border">
                @include('forms.text', ['id' => "test-id", 'title' => 'Назва кнопки', 'value' => 44])
            </div>

        </div>
    </div>
    <!---------------->




    <!---------------->
    <div class="row border mt-3 mb-3 ms-2 me-2">
        <div class="col-8 pt-3">

<code>
<pre>@@include('forms.datepicker', [
    'id' => "name",  
    'value' => "2023-12-12" // format: YYYY-MM-DD
])</pre>
</code>
        </div>
        <div class="col-4">
            <div class="d-flex m-1 p-1 border">
                @include('forms.datepicker', ['id' => "date", 'value' => "2023-12-12"])
            </div>

        </div>
    </div>
    <!---------------->




    <!---------------->
    <div class="row border mt-3 mb-3 ms-2 me-2">
        <div class="col-8 pt-3">

<code>
<pre>@@include('forms.select', [
    'id' => "gender",  
    'items' => [0 => "Жінка", 1 => "Чоловік"],
    'selected_value' => 1
])</pre>
</code>
        </div>
        <div class="col-4">
            <div class="d-flex m-1 p-1 border">
                @include('forms.select', [
                    'id' => "gender",  
                    'items' => [0 => "Жінка", 1 => "Чоловік"],
                    'selected_value' => 1
                ])
            </div>

        </div>
    </div>
    <!---------------->




    <!---------------->
    <div class="row border mt-3 mb-3 ms-2 me-2">
        <div class="col-8 pt-3">
number, radio, checkbox, text
        </div>
        <div class="col-4">
            <div class="d-flex m-1 p-1 border">
                
            </div>

        </div>
    </div>
    <!---------------->





    
</div>

<link href="{{URL::to('/')}}/buttons/button-template.css" rel="stylesheet">

<div class="container-fluid pt-3 pb-3 text-bg-dark">
footer
</div>


    </body>
</html>