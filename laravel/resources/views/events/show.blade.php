@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<div id="cardMargin" class="card shadow ">
    <img class="pull-left mr-2 w-100" src="../Images/event_1_clicked.jpg" height="400px" alt="evenement">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <h2 class="list-group-item">{{ $event->name }}</h2>
            <li class="list-group-item">Description: {{ $event->description }}</li>
            <h6 class="list-group-item"><strong>Date de déroulement:</strong> {{ $event->date }}</h6>
            <p class="list-group-item"><strong>Lieu:</strong> {{ $event->location }}</p>
            <p class="list-group-item"><strong>Prix:</strong> {{ $event->price }}€</p>
        </ul>
        <p id="margin-top">
            <button class="btn btn-button" type="button">Accéder à la liste des inscrits</button>
            <div>
                @if(Auth::check())
                <form action="{{ action('ParticipatesController@store', $event['id']) }}" method='POST'>
                    {{ csrf_field() }}
                    @php
                    $user_id2 = Auth::user()->id; @endphp
                    <input type='hidden' name="event_id" value="{{ $event->id }}">
                    <button id ="addButton{{ $event->id }}" class="btn btn-primary participate" type="submit">Participer</button>
                    @else
                    <a href="/login">Connectez-vous</a> pour pouvoir participer à un évenement </h5>
                    @endif
                    <button class="btn btn-link float-right" type="button" data-toggle="collapse"
                        data-target="#collapse{{ $event->id }}" aria-expanded="false" aria-controls="collapseExample">
                        voir les commentaires
                    </button><br>
                    <br>
                </form>
            </div>

        </p>
        <div class="collapse" id="collapse{{ $event->id }}">
            <div class="card card-body">
                @comments(['model' => $event])
            </div>
        </div>
        @javascript('event_id', "{{ $event->id }}")
    </div>
</div>
@if(Auth::check())
@if(Auth::user()->status == 5)
<form action="{{ action('EventController@destroy', $event['id']) }}" class="delete_form" method='POST'>
    {{ csrf_field() }}
    <input type='hidden' name="_method" value="DELETE">
    <button id="margin_right" class="btn btn-sm btn-danger text-light text-uppercase float-right"
        type="submit"><strong>Supprimer cet évenement</strong></button>
</form>
@endif
@endif

<a href="/events" id="centered-text">>> Tous les évenements</a>

<script type="text/javascript" src="{{ asset('js/event.js') }}"></script>
@endsection
