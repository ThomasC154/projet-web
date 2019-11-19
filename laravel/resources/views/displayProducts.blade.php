<?php

function component($productname, $productprice, $productimg){
  $element="
  
  @foreach ($articles as $article)
	<div class='col-md-3 col-sm-6 my-3 my-md-0'>
      <form action='shop' method='post'>
        <div class='card shadow'>
        <h1>Article {{ $article->id }}</h1>
          <div class='image'>
            <img src='{{ $article->image }}' alt='Image1' class='img-fluid card-img-top'>
          </div>
          <div class='card-body'>
            <h5 class='card-title'>{{ $article->name }}</h5>
            <p class='card-text'>
            Description: {{ $article->description }}
            </p>
            <h5>
              <span>{{ $article->price }} €</span>
            </h5>

            <button type='submit' class='btn btn-warning' name='add'>Add to Cart <i class='fas fa-shopping-cart'></i></button>

          </div>
        </div>
      </form>
  </div>

  @endforeach
	";
	echo $element;
}

function cartElement($productname, $productprice, $productimg){
  $element="
  
  <form action='cart' method='post' class='cart-items'>
                    <div class='border rounded'>
                        <div class='row bg-white'>
                            <div class='col-md-3 pl-0'>
                                <img src='$productimg' alt='Image1' class='img-fluid'>
                            </div>
                            <div class='col-md-6'>
                                <h5 class='pt-2'>$productname</h5>
                                <small class='text-secondary'>Seller: BDE en fait</small>
                                <h5 class='pt-2'>$productprice</h5>
                                <button type='submit' class='btn btn-warning'>Save for Later</button>
                                <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
                            </div>
                            <div class='col-md-3 py-5'>
                                <div>
                                    <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-minus'></i></button>
                                    <input type='text' value='1' class='form-control w-25 d-inline'>
                                    <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-plus'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

  ";
  echo $element;
}

?>