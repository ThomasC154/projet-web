@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <title>Article {{ $article->id }}</title>
    <link rel="stylesheet" media="all" type="text/css" href="/css/styleShowShop.css" />
  </head>
  <body>


        <h1> Voulez vous Supprimer l'article ?              </h1>
    <!-- <h1>Article {{ $article->id }}</h1> -->
    <ul>
        <!-- <li>Image: {{ $article->image }}</li>
        <li>Campus: {{ $article->campus_id }}</li>
        <li>Categorie: {{ $article->category_id }}</li>
        <li>Name: {{ $article->name }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->description }}</li> -->


        <div class='col-md-3 col-sm-6 my-3 my-md-0'>
      <form action='shop' method='post'>
        <div class='card shadow'>
        <!-- <h1>Article {{ $article->id }}</h1> -->
          <div class='image'>
            <img src='/Images/{{ $article->image }}' alt='Image1' class='img-fluid card-img-top'>
          </div>
          <div class='card-body'>
          <a  href="{{ route('shop.show', $article) }}" > <h5 class='card-title'>{{ $article->name }} </h5> </a>
            <p class='card-text'>
            Description: {{ $article->description }}
            </p>
            <h5>
              <span>{{ $article->price }} €</span>
            </h5>

            <!-- <button type='submit' class='btn btn-warning' name='add'>Add to Cart <i class='fas fa-shopping-cart'></i></button> -->
            
           
          </div>
        </div>
      </form>
      
      
  </div>



        
    </ul>
    <div id="conteneur">
    <form action="{{ route('shop.destroy', $article)}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <input type="submit" class='btn btn-warning' value="Supprimer" style="width: 200px; height: 80px " >        
           </form>

</div>
  </body>
</html>

@endsection