
@extends('Products.layout')

@section('content')
   <div class="row">
     <div class="col-lg-12 ">
        <div class="pull-left">
           <h2 class="text-primary text-center mt-3">Laravel 8 Crud Example</h2>
        </div>
     </div>
     <div class="pull-right text-center">
        <a href="{{route('products.create')}}" class="btn btn-success mt-4">Create New Product</a>
     </div>
  </div>
   </div>
   <table class="table table-bordered mt-4">
           <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Detail</th>
            <th width="280px">Actions</th>
           </tr>
           @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->detail}}</td>
                    <td>
                   <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    <a href="{{route('products.show' ,$product->id)}}" class="btn btn-info">Show</a>
                    <a href="{{route('products.edit' ,$product->id)}}" class="btn btn-primary">Update</a>
                  @csrf
                  @method('DELETE')
                   <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                   </td>
                </tr>
           @endforeach
   </table>
@endsection
