@extends('master')
@section('content')
<?php
    $i = 1;
    $amount = 0;
    ?>



    <div class="container">
        <h2>Cart list</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)

                    <input type="hidden" value=" {{ $amount += $item->price }}">


                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img style="height: 100px" src="{{ $item->images }}" alt=""></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>

                        <td> <button type="submit" class="btn btn-danger"> <a
                                    href="/removeItem/{{ $item->cartID }}">Delete</a> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td>Total amount</td>
                    <td>{{ $amount }}</td>
                </tr>

               @if ($amount != 0)



                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><button class="btn btn-success"> <a href="/"> Continue Shopping</a></button></td>
                    <td><button class="btn btn-warning"><a href="/orderNow"> Order now </a></button></td>
                </tr>
                @else

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td>No item in your cart</td>
                    <td><button class="btn btn-primary">Continue Shopping</button></td>
                </tr>


                @endif
            </tbody>
        </table>
    </div>

@endsection
