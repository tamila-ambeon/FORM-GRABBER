@extends('templates/main-page')
@section('title', "Форми Laravel")

@section('content')
<div id="article" class="mt-3">
<h1 style="text-align: center;">Form Grabber</h1>
<h2>Що вміє ця бібліотека?</h2>
<p>Мета в тому, щоб економити час і зусилля. <br>Всі форми вже запрограмовані, залишилось лише скопіювати їх і вставити у потрібному місці.</p>


<h2>Інсталяція поетапно</h2>
<p><span class="badge bg-info">Крок 1 з X</span> Підключи скрипти у секцію HEAD. Сюди входить: <b>bootstrap v5.3.2</b>, <b>Quill Editor v1.3.6</b> і моя бібліотека <b>FormGrabber</b>.</p>
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

<p>Що робити далі?</p>

<h2>Код для обробки даних форми...</h2>
</div>
@endsection

@section('sidebar')
<div class="sb">
    <div class="sb-item">Що вміє ця бібліотека?</div>
    <div class="sb-item">Інсталяція поетапно</div>
</div>
@endsection