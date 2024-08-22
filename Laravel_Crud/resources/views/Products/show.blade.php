@extends('Products.layout')

@section('content')
     <div class="row">
        <div class="text-center">
            <h2 class="text-primary mt-3">List of Product</h2>
        </div>
     </div>
       <table class="table table-bordered">
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Detail</th>
         </tr>
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->detail}}</td
            </tr>
       </table>
@endsection
