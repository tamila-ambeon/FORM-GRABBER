@extends('templates/main-page')
@section('title', "Форми Laravel")

@section('content')
<div id="article" class="pt-4 ps-4 pe-4 pb-4 bg-white">
<h1 style="text-align: center;">Form Grabber</h1>
<h2>Що вміє ця бібліотека?</h2>
<p>Мета в тому, щоб економити час і зусилля. <br>Всі форми вже запрограмовані, залишилось лише скопіювати їх і вставити у потрібному місці.</p>


<h2>Інсталяція поетапно</h2>
<p><span class="badge bg-info">Крок 1 з X</span> Підключи скрипти у секцію HEAD. Сюди входить: 
    <b><a href="https://getbootstrap.com/docs/5.2/getting-started/introduction" target="_blank" class="bg-light rounded pt-1 pb-1 ps-2 pe-2 border">bootstrap v5.3.2</a></b>, 
    <b><a href="https://quilljs.com" target="_blank" class="bg-light rounded pt-1 pb-1 ps-2 pe-2 border">Quill Editor v1.3.6</a></b>,
    <b><a href="https://apvarun.github.io/toastify-js" target="_blank" class="bg-light rounded pt-1 pb-1 ps-2 pe-2 border">Toastify</a></b>
    і моя бібліотека <b>FormGrabber</b>.</p>
@include("templates.code", [
    "id" => "bundles-code",
    'path' => "../resources/views/codes/bundles.stub",
    'lang' => "xml",
])

<p><span class="badge bg-info">Крок 2 з X</span> Встав у секцію HEAD.</p>
@include("templates.code", [
    "id" => "basehref",
    'path' => "../resources/views/codes/base-href.stub",
    'lang' => "xml",
])


<p><span class="badge bg-info">Крок 3 з X</span> Скопіюй шаблони у новий проекту в папку <b>view/forms</b>.</p>
<p><span class="badge bg-info">Крок 4 з X</span> Створи новий .js файл який буде розширювати клас і стане обробником кнопки. Шлях до файлу має співпадати з роутом. Дай назву класу таку, щоб це відображало суть форми:</p>

@include("templates.code", [
    "id" => "extend-formgrabber",
    'path' => "../resources/views/codes/extend-formgrabber.stub",
    'lang' => "js",
])
<p><span class="badge bg-info">Крок 5 з X</span> Підключи цей файл внизу на сторінці форми:</p>
@include("templates.code", [
    "id" => "extend-formgrabber",
    'path' => "../resources/views/codes/script-extender.stub",
    'lang' => "xml",
])



<h2>Як це працює? Суть</h2>

<p>
    <ul>
        <li>Вказую ідентифікатори інпутів, з яких потрібно взяти дані</li>
        <li>Вказую ідентифікатор кнопки, яка активує збір даних. А також switch_button_id. Основна кнопка буде прихована, а друга показана на час виконання запиту. </li>
        <li>Метод по-дефолту POST, можна вказати PATCH.</li>
        <li>Файли передавати не вміє, загружай на гугл диск.</li>
        <li>Ендпоінт повинен завжди повертати JSON. Нехай формат буде таким:
            @include("templates.code", [
                "id" => "json-response",
                'path' => "../resources/views/codes/json-response.stub",
                'lang' => "php",
            ])            
        </li>
    <ul>
</p>

</div>
@endsection

@section('sidebar')
<div class="sb">
    <div class="sb-item">Що вміє ця бібліотека?</div>
    <div class="sb-item">Інсталяція поетапно</div>
</div>
@endsection