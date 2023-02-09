@extends('layouts.app')
@section('title', $viewData["title"])
@section('description', $viewData["subtitle"])
@section('content')
<style>
  .form-text{
    display: none;
  }
  </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $viewData["product"]->getName() }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('img/' . $viewData["product"]->getImage()) }}" alt="{{ $viewData["product"]->getName() }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p>{{ $viewData["product"]->getDescription() }}</p>
                            <p><strong>Precio: {{ $viewData["product"]->getPrice() }}€</strong></p>
                        </div>
                        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData["product"]->getId()]) }}">
                          <div class="row">
                            @csrf
                            <div class="col-auto">
                              <div class="input-group col-auto">
                                <div class="input-group-text">Cantidad</div>
                                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
                              </div>
                            </div>
                            <div class="col-auto">
                              <button class="btn bg-primary text-white" type="submit">Añadir al carrito</button>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Calificar producto</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form action="{{ url('/add-rating') }}" method="POST">
                      @csrf
                      <input type="hidden" name="product_id" value="{{  $viewData["product"]->getId() }}">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">{{  $viewData["product"]->getname() }}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="rating-css">
                  <div class="star-icon">
                      <input type="radio" value="1" name="product_rating" checked id="rating1">
                      <label for="rating1" class="fa fa-star"></label>
                      <input type="radio" value="2" name="product_rating" id="rating2">
                      <label for="rating2" class="fa fa-star"></label>
                      <input type="radio" value="3" name="product_rating" id="rating3">
                      <label for="rating3" class="fa fa-star"></label>
                      <input type="radio" value="4" name="product_rating" id="rating4">
                      <label for="rating4" class="fa fa-star"></label>
                      <input type="radio" value="5" name="product_rating" id="rating5">
                      <label for="rating5" class="fa fa-star"></label>
                  </div>
              </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Valorar</button>
                    </div>
              </form>
                  </div>
                </div>
              </div>
              
              <div class="rating2-css">
                          <div class="star2-icon">
                            <?php
                            if(!isset($viewData["rating"]) || count($viewData["rating"]) == 0){
                                echo "No hay valoraciones para este producto";
                            }else{
                          //Calcula la media de las valoraciones de un producto
                            $total = 0;
                            $count = 0;
                            foreach ($viewData["rating"] as $rating) {
                                $total += $rating->getStarsRated();
                                $count++;
                            }
                            $average = $total / $count;
                            echo "Valoración media del producto: ";
                            //Muestra las estrellas de valoración
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $average) {
                                    echo '<i class="fa fa-star"></i>';
                                } else {
                                    echo '<i class="fa fa-star-o"></i>';
                                }
                                
                            }
                            echo $average;
                          }
                            ?>
                        </div>
                        </div>

<div>
@comments(['model' => $viewData["product"]])
</div>
             

                        
@endsection