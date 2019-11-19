
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

         <!-- Le contenu --> 
        <div id="contenu">

        <div id="wrapper" style="min-height: 50px;"><h1> Requêtes administrateur</h1></div>
        <div id="barre_boutons_admin">
            <div class="bouton_admin">  <div style="height:50px;"><img src="Images/shoesList.png" alt="Shoe" height="75" ></div>  
            Lister les articles </div>
            <a href="shop/create"><div class="bouton_admin"> <div style="height:50px;"><img src="Images/shoesAdd.png" alt="Shoe" height="75" ></div>
            Ajouter un article </div></a>
           <a href="shop/delete"> <div class="bouton_admin"> <div style="height:50px;"><img src="Images/shoesDel.png" alt="Shoe" height="75" ></div>
            Supprimer un article </div></a>
            <div class="bouton_admin"> <div style="height:50px;"><img src="Images/shoesChange.png" alt="Shoe" height="75" ></div>
            Modifier un article </div>
        </div>
        <div id="wrapper" style="min-height: 120px;">
            
         <!-- TODO : Ajouter de quoi visualiser le résultat des requêtes ou de quoi saisir des commandes en fonction des options possibles -->
            
        </div>
        </div>  
    </div>
    

@endsection