@extends('Products.layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
       <div class="text-center">
           <h2 class="text-primary mt-3">Edit Product</h2>
       </div>
    </div>
</div>
  <form action="{{route('products.update',$product->id)}}" method="POST">
     @csrf
     @method('PUT')
      <div class="row">
         <div class="col-xs-12 col-md-12  col-lg-12 col-sm-12 mt-5">
            <div class="form-group">
               <strong>Name:</strong>
               <input type="text" name="name" value="{{$product->name}}" class="form-control">
            </div>
         </div>
         <div class="col-xs-12 col-md-12  col-lg-12 col-sm-12 mt-4">
            <div class="form-group">
               <strong>Detail:</strong>
                   <input type="text" name="detail" class="form-control" value="{{$product->detail}}">
            </div>
         </div>
         <div class="col-xs-12 col-md-12 col-lg-12 mt-4 text-center ">
                <input type="submit" value="Update" class="btn btn-primary" name="update">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
         </div>
      </div>
  </form>

@endsection
