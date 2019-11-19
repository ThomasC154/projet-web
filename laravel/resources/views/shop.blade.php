@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<!-- Le corps -->
<div class="container">

<input class="form-control" type="text" placeholder="Search" aria-label="Search">


@guest
@else
<?php if( Auth::user()->status == 5) { ?>
<div class="addRmButtons">
  <div id="button">
					<hr class="main-hr" />
					<button onclick="javascript:location.href='shop/create'" id='addButton' class="icon-btn add-btn">
						<div type="button" class="add-icon"></div>
						<a  class="btn-txt">Add</a>
					</button>			
  </div>
</div>
 <?php } ?>
 @endguest




<!-- end button -->
  <div class="row text-center py-5">

  @foreach ($articles as $article)
	<div class='col-md-3 col-sm-6 my-3 my-md-0'>
      <form action='shop' method='post'>
        <div class='card shadow'>
        <!-- <h1>Article {{ $article->id }}</h1> -->
          <div class='image'>
            <img src='Images/{{ $article->image }}' alt='Image1' class='img-fluid card-img-top'>
          </div>
          <div class='card-body'>
           <h5 class='card-title' style="color:dodgerblue">{{ $article->name }} </h5> 
            <p class='card-text'>
            Description: {{ $article->description }}
            </p>
            <h5>
              <span>{{ $article->price }} €</span>
            </h5>


            @guest
            @else
            <a href="{{ route('article.addToCart', ['id' => $article->id]) }}" class="btn btn-warning" role="button">
            Add to Cart <i class='fas fa-shopping-cart'></i></a>
             <br><br>
            <?php if( Auth::user()->status == 5) { ?>
                <a  href="{{ route('shop.show', $article) }}" class='btn btn-warning' > Delete </a>
            <?php } ?>

              @endguest
       
            

          </div>
        </div>
      </form>
  </div>

  @endforeach


  <!-- @foreach ($articles as $article)
    <h1>Article {{ $article->id }}</h1>
        <ul>
        <li>{{ $article->image }}</li>
        <li>Name: {{ $article->name }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->description }}</li>
        </ul>
        @endforeach -->

  <!--  component("Pull Swag CESI", 20, "../../resources/Produits/p1.png");
    component("Jersey CESI", 20, "../../resources/Produits/p2.png");
    component("Mug CESI", 10, "../../resources/Produits/p3.png");
    component("Album Galimatias", 15, "../../resources/Produits/p4.png");
    component("Sweat Galimatias", 15, "../../resources/Produits/p5.png");-->
  </div>
</div>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/shop.js"></script>

  @endsection