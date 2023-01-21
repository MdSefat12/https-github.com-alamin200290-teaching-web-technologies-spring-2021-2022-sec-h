
@extends("layout.app")
@section("content")
<!-- {{Session::get("cart")}} -->
@if(Session::has('cart'))


<table class = "table table-border">
    <tr>
  
        <th>Name</th>
        <th>qty</th>
     
  


</tr>

@foreach ($cart as $cartt)
<tr>
    <td>{{$cartt->id}}</td>
    <td>{{$cartt->qty}}</td>
    
</tr>
@endforeach
</table>
@else
cart is empty
@endif



@endsection