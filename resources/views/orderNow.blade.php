@extends('master')
@section('content')

<div class="container">
 <div>
      <h3 style="text-align: center">order details</h3>
 </div>
    <div class="row">
        <div class="col-sm-6">
            <input type="hidden" value="   {{  $user = \Auth::user();}} ">


            <form action="/orderPlace" method="POST">
                @csrf
                <input type="hidden" value="{{$total + 100}}">

                <table class="table">
                    <thead>
                      <tr>
                        <th>Billing Information </th>

                      </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td>Name  : </td>
                        <td>{{$user->fullName}}</td>

                      </tr>

                      <tr >
                        <td>Email :  </td>
                        <td>{{$user->email}}</td>

                      </tr>

                      <tr >
                        <td>Address </td>
                        <td><textarea name="address"  cols="30" rows="5"></textarea></td>

                      </tr>
                      <tr>
                          <td>Payment Method</td>
                          <td>
                              <select name="paymentMethod" >

                                <option value="cod">cash on delivery</option>
                                <option value="onlinePayment">online payment</option>
                                <option value="card">credit / debit card</option>
                              </select>
                          </td>
                      </tr>
                      <tr >


                        <td><button class="btn btn-info"> Proceed</button></td>
                      </tr>

                    </tbody>
                  </table>
            </form>


        </div>
        <div class="col-sm-6">

            <table class="table">
                <thead>
                  <tr>
                    <th>Billing Amount</th>

                  </tr>
                </thead>
                <tbody>
                    <tr class="success">
                    <td>Total amount : </td>
                    <td>{{$total}}</td>

                  </tr>

                  <tr class="danger">
                    <td>Tax : </td>
                    <td>0 </td>

                  </tr>
                  <tr class="info">
                    <td>SHipping cost : </td>
                    <td>100</td>

                  </tr>
                  <tr class="warning">
                    <td>Billing amount</td>
                    <td>{{$total + 100}}</td>

                  </tr>

                </tbody>
              </table>


        </div>

    </div>

</div>





@endsection
