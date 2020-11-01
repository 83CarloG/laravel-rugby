@extends('layouts.app')
@section('title_pagina')
    Nuovo Componente
@endsection
@section('content')

<h2> Creazione nuovo componente Amatori Rugby Novara</h2>
<div class="container create">
    <form action="{{route('component.store')}}" method="POST" class="create__form">
        @csrf
        @method('POST')
        <div class="create__field">
            <label class="create__label" for="name">Nome: </label>
            <input type="text" name="nome" placeholder="Nome" id="nome">
        </div>
        <div class="create__field">
            <label class="create__label" for="cognome">Cognome: </label>
            <input type="text" name="cognome" placeholder="Cognome" id="cognome">
        </div>
        <div class="create__field">
            <label class="create__label" for="data_nascita">Data di nascita: </label>
            <input type="date" name="data_nascita" placeholder="Data di Nascita" id="data_nascita">
        </div>
        <div class="create__field">
            <label class="create__label" for="comune_nascita">Comune di nascita: </label>
            <input type="text" name="comune_nascita" placeholder="Comune di nascita" id="comune_nascita">
        </div>
        <div class="create__field">

            <label class="create__label" for="provincia_nascita">Provincia di nascita: </label>
            <input type="text" name="provincia_nascita" placeholder="Provincia di nascita" id="provincia_nascita">
        </div>
        <div class="create__field">
            <label class="create__label" for="stato_nascita">Stato di nascita: </label>
            <input type="text" name="stato_nascita" placeholder="Stato di Nascita" id="stato_nascita">
        </div>
        <div class="create__field">
            <label class="create__label" for="comune_residenza">Comune di residenza: </label>
            <input type="text" name="comune_residenza" placeholder="Comune di residenza" id="comune_residenza">
        </div>
        <div class="create__field">
            <label class="create__label" for="provincia_residenza">Provincia di residenza: </label>
            <input type="text" name="provincia_residenza" placeholder="Provincia di residenza" id="provincia_residenza">
        </div>
        <div class="create__field">
            <label class="create__label" for="indirizzo_residenza">Indirizzo di residenza: </label>
            <input type="text" name="indirizzo_residenza" placeholder="Indirizzo di residenza" id="indirizzo_residenza">
        </div>
        <div class="create__field">
            <label class="create__label" for="civico_residenza">Numero civico: </label>
            <input type="number" name="civico_residenza" placeholder="Numero civico" id="civico_residenza">
        </div>
        <div class="create__field">
            <label class="create__label" for="stato_residenza">Stato di residenza: </label>
            <input type="text" name="stato_residenza" placeholder="Stato di residenza" id="stato_residenza">
        </div>
        <div class="create__field">
            <label class="create__label" for="telefono">Telefono: </label>
            <input type="phone" name="telefono" placeholder="Telefono" id="telefono">
        </div>
        <div class="create__field">
            <label class="create__label" for="email">Email: </label>
            <input type="email" name="email" placeholder="Email" id="email">
        </div>
        <div class="create__field">
            <label class="create__label" for="ruolo">Ruolo: </label>
            <input type="text" name="ruolo" placeholder="Ruolo" id="ruolo">
        </div>
        <div class="create__field">
            <label class="create__label" for="tesserino">Tesserino: </label>
            <input type="text" name="tesserino" placeholder="Tesserino" id="tesserino">
        </div>
        <div class="create__field">
            <label class="create__label" for="note">Note: </label>
            <input type="text" name="note" placeholder="Note" id="note">
        </div>

        <button type="submit" class="create__submit">Salva</button>

    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

@endsection
