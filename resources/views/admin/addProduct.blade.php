@extends('/admin/layout')


@section('content')

<div class="container">
<div>


    <form action="/admin/addproducts" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="input-group">
            <span class="input-group-addon">Name</span>
            <input  type="text" class="form-control" name="name" placeholder="Product name">
          </div>
          <div class="input-group">
            <span class="input-group-addon">Description</span>
            <input type="text" class="form-control" name="description" placeholder="Product description">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon">Category</span>
            <input  type="text" class="form-control" name="category" placeholder="Product category">
          </div>
          <div class="input-group">
            <span class="input-group-addon">Price</span>
            <input  type="text" class="form-control" name="price" placeholder="Product price">
          </div>

          <div class="input-group">
            <span class="input-group-addon">Image upload</span>
            <input  type="file" class="form-control" name="images" placeholder="Product image">
          </div>
          <br>
          <br><br>
          <div class="input-group">

            <button class="btn btn-success">Upload</button>
          </div>





    </form>
</div>



</div>




@endsection
