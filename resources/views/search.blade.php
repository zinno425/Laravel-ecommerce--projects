@extends('master')

@section('content')

<div class="product">




      <div class="trending" style="padding: 100px">

        <h1 style="text-align: center">Search result</h1>

        <div >
            @foreach ($products as $item)
              <div  style=" padding:40px">
                <a href="detail/{{$item['id']}}">
              <img style="height: 100px" src="{{$item['images']}}" >

                <h3>{{$item['name']}}</h3>
            </a>
                <h3>{{$item['description']}}</h3>


              </div>
              @endforeach
            </div>
           </div>





  </div>

@endsection
