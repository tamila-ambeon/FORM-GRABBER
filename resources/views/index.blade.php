@extends('templates/main-page')
@section('title', "Форми Laravel")

@section('content')
<div id="article" class="mt-3">
<h1 style="text-align: center;">Form Grabber</h1>
<h2>Що вміє ця бібліотека?</h2>
<p>Мета в тому, щоб економити час і зусилля. <br>Всі форми вже запрограмовані, залишилось лише скопіювати їх і вставити у потрібному місці.</p>


<h2>Інсталяція поетапно</h2>
<p>Підключи скрипти у секцію head:</p>
@include("templates.code", [
    "id" => "bundles-code",
    'path' => "../resources/views/codes/bundles.stub",
    'lang' => "xml",
])

<p>Сюди входить: bootstrap v5.3.2, Quill Editor v1.3.6 і моя бібліотека FormGrabber.</p>

<h2>Як це працює? Суть</h2>

<p>Що робити далі?</p>
</div>
@endsection

@section('sidebar')
<div class="sb">
    <div class="sb-item">Що вміє ця бібліотека?</div>
    <div class="sb-item">Інсталяція поетапно</div>
</div>
@endsection