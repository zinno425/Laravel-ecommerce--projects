@extends('master')
@section('content')
<?php
    $i = 1;

    ?>
<div class="container">
    <h2>Order history</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No. </th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Date</th>
                <th>Address</th>
                <th>Payment method</th>
                <th>Payment status</th>
                <th>Order status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><img style="height: 100px" src="{{ $item->images }}" alt=""></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->paymentMethod }}</td>
                    <td>{{ $item->paymentStatus }}</td>
                    <td>{{ $item->status }}</td>
                    <td><button class="btn btn-success">Return</button> <button class="btn btn-warning">feedback</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
