@extends('layouts.app')
@section('title_pagina')
    show {{ $component->nome }} {{ $component->cognome }}
@endsection
@section('content')
<ul>
    <li>{{$component->nome}}</li>
    <li>{{$component->cognome}}</li>
    <li>{{$component->data_nascita}}</li>
    <li>{{$component->comune_nascita}}</li>
    <li>{{$component->provincia_nascita}}</li>
    <li>{{$component->stato_nascita}}</li>
    <li>{{$component->comune_residenza}}</li>
    <li>{{$component->provincia_residenza}}</li>
    <li>{{$component->indirizzo_residenza}}</li>
    <li>{{$component->civico_residenza}}</li>
    <li>{{$component->stato_residenza}}</li>
    <li>{{$component->telefono}}</li>
    <li>{{$component->email}}</li>
    <li>{{$component->ruolo}}</li>
    <li>{{$component->tesserino}}</li>
    <li>{{$component->note}}</li>
    <div class="show__button">
        <form action="{{ route('component.destroy', $component->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>
        <button><a href="{{ route('component.edit', $component->id) }}">Edit</a></button>
    </div>
</ul>
@endsection

