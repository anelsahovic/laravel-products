<x-layout>
    <hr>
    <a href="/">Home</a>
    &nbsp &nbsp &nbsp
    <a href="{{ route('products.index') }}">Products</a>
    <hr><br>
    <x-products.status />
     <br> <br>
    <h1><small>Product: </small></h1>
    <div>
        <hr>
        <h4><small>SKU: </small>{{ $product->id }}</h4>
        <h3>Created : {{ $product->created_at }}</h3>
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: $<strong>{{ $product->price }}</strong></p>
        
        <a href="{{ route('products.edit', $product) }}"><button>Edit</button></a>

        <form action="{{ route('products.destroy', $product) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
        <hr>
        <br>
    </div>
    <br><br>
</x-layout>