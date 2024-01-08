@extends('templates/main-page')
@section('title', "Quill Text Editor")

@section('content')
<div id="article" class="pt-3 pb-3 bg-white">
<h1 style="text-align: center;">Quill Text Editor</h1>

    <div></div>

</div>
@endsection

@section('sidebar')
    @include("parts.sidebar-inputs")
@endsection