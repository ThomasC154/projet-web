@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<div id="cardMargin" class="card">
    <img class="pull-left mr-2" src="../Images/campus.jpg" width="400px" height="400px" alt="evenement">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <h2 class="list-group-item">{{ $event->name }}</h2>
            <li class="list-group-item">Description: {{ $event->description }}</li>
            <h6 class="list-group-item">Date de déroulement: {{ $event->date }}</h6>
            <p class="list-group-item">Lieu: {{ $event->location }}</p>
            <p class="list-group-item">Prix: {{ $event->price }}€</p>
        </ul>
        <p id="margin-top">
            <button class="btn btn-button" type="button">Accéder à la liste des inscrits</button>
            <button class="btn btn-link float-right noDecorLink" type="button" data-toggle="collapse"
                data-target="#collapse{{ $event->id }}" aria-expanded="false" aria-controls="collapseExample">
                voir les commentaires
            </button>
            @if(Auth::check())
            <form action="{{ action('ParticipatesController@store', $event['id']) }}" method='POST'>
                    {{ csrf_field() }}
                    <input type='hidden' name="event_id" value="{{ $event->id }}">
                    <button class="btn btn-primary participate" type="submit">Participer</button>
            </form>
            @if (Auth::user()->status == 5)
            <form action="{{ action('EventController@destroy', $event['id']) }}" class="delete_form" method='POST'>
                {{ csrf_field() }}
                <input type='hidden' name="_method" value="DELETE">
                <button class="btn btn-sm btn-link text-danger text-uppercase float-right" type="submit">supprimer</button>
            </form>
            @endif
            @endif
        </p>
        <div class="collapse" id="collapse{{ $event->id }}">
            <div class="card card-body">
            @comments(['model' => $event])
            </div>
        </div>
    </div>
    <a href="/events" id="centered-text">Tous les évenements</a>
</div>

<script type="text/javascript" src="../js/event.js"></script>
@endsection