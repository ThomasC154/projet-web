@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" media="all" type="text/css" href="/css/styleCreateShop.css" />


    </head>
    <body>
    <div class="container">
        <form action="{{ route('shop.store') }}" method="post">
        
        
        {{ csrf_field() }}

        <div class="row">
            <div class="col-25">
            <label for="image">Image</label>
            </div>
            <div class="col-75">
            <input type="file" name="image">
            </div>

        </div>
            <!-- <input type="text" name="campus_id" placeholder="campus_id"> -->
            
        <div class="row">    
        <div class="col-25">
        <label for="Campus">Campus</label>
            </div>
            <div class="col-75">
            <select name="campus_id" size="1">
            <option value="">--Choix du BDE--</option>
            <option value="1" >Nice</option>
            </select>
            </div>
            </div>

            <!-- <input type="text" name="category_id" placeholder="category_id"> -->
            <div class="row">    
        <div class="col-25">
        <label for="Categorie">Categorie</label>
            </div>
            <div class="col-75">
            <select name="category_id" size="1">
            <option value="">--Choix de la categorie--</option>
            <option value="1" >t-shirt</option>
            <option value="2" >goodies</option>
            <option value="3" >pull</option>
            </select>
            </div>
            </div>

            <div class="row">    
            <div class="col-25">
            <label for="name">Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="name" placeholder="name">
            </div>
            </div>

            <div class="row">    
            <div class="col-25">
            <label for="price">Price</label>
        </div>
        <div class="col-75">
            <input type="text" name="price" placeholder="price">
            </div>
            </div>

            <div class="row">    
            <div class="col-25">
            <label for="country">Description</label>
        </div>
        <div class="col-75">
            <input type="text" name="description" placeholder="description">
        </div>
            </div>

            
        <div class="row">
        <div class="col-25">
        <p><a class="stylebouton" href="http://localhost:3000/shop">Annuler</a></p>
        </div>
        <div class="col-75">
        <input type="submit" value="Confirm your article">
        </div>        
        </div>

        </form>




    </div>
    </body>
</html>



@endsection