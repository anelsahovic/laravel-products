<x-layout>
    <hr>
    <a href="/">Home</a>
    &nbsp &nbsp &nbsp
    <a href="{{ route('products.index') }}">Products</a>
    <hr>
    <h1>Edit Product</h1> 

    <x-errors />

    <br>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @method('PATCH')
        <x-products.form :product="$product"/>
    </form>
    
</x-layout>