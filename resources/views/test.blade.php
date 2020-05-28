@include('layouts.header')

<h1>Product Description</h1>

@foreach($product as $product)
<p>{{$product->name}}</p>
<p>{{$product->description}}</p>

    @endforeach
