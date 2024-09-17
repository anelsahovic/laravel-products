<x-layout>
    <h1>Products</h1>
    <hr>
    <a href="/">Home</a>
    &nbsp &nbsp &nbsp
    <a href="{{ route('products.create') }}">New Product</a>
    <hr>
    <x-products.status />
    <br>
    @foreach ($products as $product)
        <div>
            <hr>
            <h4><small>SKU: </small>{{ $product->id }}</h4>
            <a href="{{ route('products.show', $product) }}"><h1>{{ $product->name }}</h1></a>
            <p>{{ $product->description }}</p>
            <p>Price: $<strong>{{ $product->price }}</strong></p>
            <hr>
            <br>
        </div>
    @endforeach

    {{ $products->links() }}
</x-layout>