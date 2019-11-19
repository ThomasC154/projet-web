@extends('layouts.main')

@section('title', 'Page Title')

@section('content')


@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<section id="section_event">

    <!-- Left Box -->
    <div class="leftBox">
        <div class="content">
            <h1>Évenements</h1>
            <p>Les Évenements dont participe le bde cesi nice sont listés ici: </p>
        </div>
        
        @if(Auth::check())
        @if (Auth::user()->status == 5)


        <h3 class="marginTitle">Gestion des Évenements</h3>
        <div class="addRmButtons">
            <div id="button">
                <hr class="main-hr" />
                <!-- Button trigger modal -->
                <button class="icon-btn add-btn" data-toggle="modal" data-target="#exampleModal">
                    <div type="button" class="add-icon"></div>
                    <a class="btn-txt">Add</a>
                </button>
            </div><!-- end button -->
            <p class="text-muted">Uniquement pour l'administration.</p>
        </div><!-- end addRmButtons -->
        @endif
        @else
        <h5 class="marginTop-Bot"> <a href="/login">Connectez-vous</a> pour pouvoir participer à un évenement </h5>
        @endif
        <hr>
        <h3 class="marginTitle">Évenements passés</h3>
        <a id="noDecorLink" href="#">
            <div class="card mb-3">
                <img id="imgEvntOld" src="Images/evenements_passés.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voir les évenements passés</h5>
                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p> -->
                </div>
            </div>
        </a>

        {{-- Start Add Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un évenement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ action('EventController@store') }}" class="create_form" method="POST">

                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Titre de l'évenement</label>
                                <input type="text" name="name" class="form-control" placeholder="Titre">
                            </div>
                            <div class="md-form">
                                <label>Date</label>
                                <input type="text" name="date" class="form-control datepicker"
                                    placeholder="sélectionnez une date">
                            </div>
                            <div class="form-group">
                                <label>Localisation de l'évenement</label>
                                <input type="text" name="location" class="form-control" placeholder="Lieu">
                            </div>
                            <div class="form-group">
                                <label>Prix</label>
                                <input type="text" name="price" class="form-control" placeholder="Montant en €">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control rounded-0"
                                    id="exampleFormControlTextarea2" rows="3"></textarea>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Add Modal --}}

    </div>
    <!-- Right Box -->

    <div class="rightBox">
        <h2 id="colorWhite">Évenements du mois</h2><br>
        @if(count($events) > 0)
        @foreach ($events as $event)
        <div id="cardMargin" class="card">
            <a href="events/{{ $event->id }}" class="card-header">{{ $event->name }}</a>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $event->description }}</li>
                    <h6 class="list-group-item">Date de déroulement: {{ $event->date }}</h6>
                    <li class="list-group-item">Lieu: {{ $event->location }}</li>
                    <li class="list-group-item">Prix: {{ $event->price }}€</li>
                </ul>
                <p id="margin-top">



                    @if(Auth::check())
                    @if (Auth::user()->status == 5)
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal{{ $event->id }}-lg">Liste des
                        Inscrits</a>

                    <!-- Modal -->
                    <!-- Large modal -->
                    <div class="modal fade bd-example-modal{{ $event->id }}-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div id="modalPadding" class="modal-content">
                                <h4>Liste de l'évenement: {{ $event->id }}</h4>
                                <ul>
                                    <li>{{ $event->user->firstname }}</li>
                                    <li>{{ $event->user->lastname }}</li>
                                </ul>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif



                    <button class="btn btn-link " type="button" data-toggle="collapse"
                        data-target="#collapse{{ $event->id }}" aria-expanded="false" aria-controls="collapseExample">
                        voir les commentaires
                    </button>
                    @if(Auth::check())
                    <form action="{{ action('ParticipatesController@store', $event['id']) }}" method='POST'>
                        {{ csrf_field() }}
                        <input type='hidden' name="event_id" value="{{ $event->id }}">
                        <button class="btn btn-primary participate" type="submit">Participer</button>
                    </form>
                    @else
                    <p><a href="/login">Connectez-vous</a> pour participer</p>
                    @endif
                    @if(Auth::check())
                    @if (Auth::user()->status == 5)
                    <form action="{{ action('EventController@destroy', $event['id']) }}" class="delete_form"
                        method='POST'>
                        {{ csrf_field() }}
                        <input type='hidden' name="_method" value="DELETE">
                        <button class="btn btn-sm btn-link text-danger text-uppercase" type="submit">supprimer</button>
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
        </div>
        @endforeach
        @else
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Aucun évenement pour le moment ...
        </div>
        @endif
    </div>
    <script type="text/js" src="../js/event.js"></script>
</section>
@endsection