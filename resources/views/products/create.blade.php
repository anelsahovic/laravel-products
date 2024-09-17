<x-layout>
    <h1>Add New Product</h1>
    <hr>
    <a href="/">Home</a>
    &nbsp &nbsp &nbsp
    <a href="{{ route('products.index') }}">Products</a>
    <hr>
    <br>
    
    <x-errors />

    <form action="{{ route('products.store') }}" method="POST">
        <x-products.form />
    </form>
</x-layout>