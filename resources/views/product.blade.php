@extends('master')

@section('content')



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($products as $item)


                <div class="item {{ $item['id'] == 2 ? 'active' : '' }}">
                    <a href="detail/{{ $item['id'] }}">
                        <img src="{{ $item['images'] }}" style="height: 400px; padding : 0;">
                        <div class="carousel-caption">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                </div>
            @endforeach



        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>







    <div class="trending" style="padding: 100px ; ">

        <h1 style="text-align: center">Featured products</h1>

        <div>
            @foreach ($products as $item)
                <div class="pro" style="float: left; padding:40px">
                    <a href="detail/{{ $item['id'] }}">
                        <img style="height: 100px" src="{{ $item['images'] }}">

                        <h3>{{ $item['name'] }}</h3>
                        <h3>${{ $item['price'] }}</h3>
                        <form action="/addToCart" method="POST">
                            @csrf
                            <input type="hidden" name="productID" value="{{$item['id']}}">
                            <button class="btn btn-warning">Add to cart</button>
                        </form>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>







@endsection
