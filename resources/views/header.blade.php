<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(\Auth::user()){
$total = ProductController :: cartItem();
}

?>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Ecommerce</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Categories</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/search" method="GET">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartList"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>
     @if (\Auth :: user())


        <li class="dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{\Auth::user('')->fullName}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">LogOut</a></li>
              <li><a href="#">Account</a></li>
              <li><a href="/myOrders">Your orders</a></li>

            </ul>
          </li>
          @else
          <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          @endif
      </ul>



    </div>
  </nav>





