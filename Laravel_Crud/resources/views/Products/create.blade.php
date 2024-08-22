@extends('Products.layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
       <div class="text-center">
           <h2 class="text-primary mt-3">Add New Product</h2>
       </div>
    </div>
</div>
  <form action="{{route('products.store')}}" method="POST">
     @csrf
      <div class="row">
         <div class="col-xs-12 col-md-12  col-lg-12 col-sm-12 mt-5">
            <div class="form-group">
               <strong>Name:</strong>
               <input type="text" name="name" placeholder="ProductName" class="form-control">
            </div>
         </div>
         <div class="col-xs-12 col-md-12  col-lg-12 col-sm-12 mt-4">
            <div class="form-group">
               <strong>Detail:</strong>
                   <input type="text" name="detail" class="form-control" placeholder="product detail">
            </div>
         </div>
         <div class="col-xs-12 col-md-12 col-lg-12 mt-4 text-center ">
                <input type="submit" class="btn btn-primary" name="send">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
         </div>
      </div>
  </form>

@endsection
