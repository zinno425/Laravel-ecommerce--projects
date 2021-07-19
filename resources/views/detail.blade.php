@extends('master')

@section('content')




<div class="container">

<div class="row">


    <div class="col-sm-6">
        <span class='zoom' id='imagePro'>
        <img style="height: 400px; padding: 50px" class="itemImage" src="{{$product['images']}}" alt="itemImage">
        </span>






    </div>
    <div class="col-sm-6">
        <a href="/">GO BACK</a>

        <h2>Name : {{$product['name']}}</h2>
        <h2>Price : {{$product['price']}}</h2>
        <h2>Category : {{$product['category']}}</h2>
        <h2>Description : {{$product['description']}}</h2>
        <br><br>

        <form action="/addToCart" method="POST">
            @csrf
            <input type="hidden" name="productID" value="{{$product['id']}}">
            <button class="btn btn-warning">Add to cart</button>
        </form>
        <br><br>
        <form action="">
            <button class="btn btn-primary">Buy now</button>
        </form>
        <br><br>
    </div>

</div>
</div>

@endsection
