@extends('layouts.app')
@section('title_pagina')
    index
@endsection
@section('content')
<h2> Componenti Amatori Rugby Novara</h2>
<div class="container index">
    @foreach ($components as $component)
        <ul class="index__box">
            <li>{{$component->nome}}</li>
            <li>{{$component->cognome}}</li>
            <li>{{$component->data_nascita}}</li>
            <li>{{$component->telefono}}</li>
            <li>{{$component->email}}</li>
            <li>{{$component->ruolo}}</li>
            <button>
                <a href="{{route("component.show", $component->id)}}">Mostra</a>
            </button>
            </ul>
            @endforeach
</div>
@endsection


