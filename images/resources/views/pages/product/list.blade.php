
@extends("layout.app")
@section("content")

<div>
    
@foreach ($products as $item)
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$item->images}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text text-center">{{$item->name}}<br><a href="{{route('product.addtocart',['id'=>$item->id])}}" class="btn btn-primary" style="color: white"> Add to Cart </a></p>
   
  </div>
</div>

</div>

@endforeach

</table>
@endsection