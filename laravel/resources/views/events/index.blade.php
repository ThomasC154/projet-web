@extends('layouts.main')

@section('title', 'Page Title')

@section('content')




<section id="section_event">

    <!-- Left Box -->
    <div class="float-left">
        <div class="leftBox">
            <div class="content">
                <h2>ÉVENEMENTS</h2>
                <p>Les Évenements dont participe le bde cesi nice sont listés ici: </p>
            </div>

            @if(Auth::check())
            @if (Auth::user()->status == 5)


            <h3 class="marginTitle colorWhite">Gestion des Évenements</h3>
            <div class="addRmButtons">
                <div id="button">
                    <hr class="main-hr">
                    <!-- Button trigger modal -->
                    <button class="icon-btn add-btn" data-toggle="modal" data-target="#exampleModal">
                        <div type="button" class="add-icon"></div>
                        <a class="btn-txt">Add</a>
                    </button>
                </div><!-- end button -->
                <p class="text-muted">Uniquement pour l'ssadministration.</p>
            </div><!-- end addRmButtons -->
            @endif
            @else
            <h5 class="marginTop-Bot"> <a href="/login">Connectez-vous</a> pour pouvoir participer à un évenement </h5>
            @endif
            <hr>
            <h3 class="colorWhite marginTitle">Évenements passés</h3>
            <a class="noDecorLink" href="events_old">
                <div class="card mb-3">
                    <img id="imgEvntOld" src="Images/evenements_passés.png" class="card-img-top w-120" alt="évenements passés">
                    <div class="card-body">
                        <h5 class="card-title">Voir les évenements passés</h5>
                        <p class="card-text">Venez voir les évenements passés </p>
                    </div>
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
                            <div class="form-group shadow-sm">
                                <label>Titre de l'évenement</label>
                                <input type="text" name="name" class="form-control" placeholder="Titre">
                            </div>
                            <br>
                            <div class="md-form shadow-sm">
                                <label>Date</label>
                                <input type="text" name="date" class="form-control datepicker"
                                    placeholder="sélectionnez une date">
                            </div>
                            <br>
                            <div class="form-group shadow-sm">
                                <label>Localisation de l'évenement</label>
                                <input type="text" name="location" class="form-control" placeholder="Lieu">
                            </div>
                            <br>
                            <div class="form-group shadow-sm">
                                <label>Prix</label>
                                <input type="text" name="price" class="form-control" placeholder="Montant en €">
                            </div>
                            <br>
                            <div class="form-group shadow-sm">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control rounded-0"
                                    id="exampleFormControlTextarea2" rows="3"></textarea>
                            </div>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-warning">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- End Add Modal --}}

    </div>
    <!-- Right Box -->

    <div class="float-right">

        <h2 class="colorWhite">ÉVENEMENTS DU MOIS</h2>

        @if($message = Session::get('success'))
        <div id="top-success" class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @else

        @endif

        <hr class="main-hr"><br>
        @if(count($events) > 0)
        @foreach ($events as $event)


        <div id="cardMargin" class="shadow row no-gutters bg-light position-relative">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="Images/event_1.jpg" class="w-100" alt="Images évenement {{ $event->id }}">
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0 overflow-auto">
                <h5 class="mt-0">{{ $event->name }}</h5>
                <p>{{ $event->description }}</p>
                <a href="events/{{ $event->id }}" class="stretched-link noDecorLink">Plus de détails</a>
            </div>
        </div>

        @endforeach

        @else
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Aucun évenement pour le moment ...
        </div>
        @endif
    </div>
</section>

<script type="text/javascript" src="../js/event.js"></script>
@endsection