@include('layouts.header')

@include('customer.partials._navbar')

<h1>Products</h1>

@foreach($products as $product)

    <div>
        <p>{{$product->name}}</p>
        <img src="storage/images/{{ $product->path }}" >
    </div>

@endforeach
