@csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}">

        <label for="description">Description</label>
        <textarea name="description" >{{ old('description', $product->description ?? '') }}</textarea>

        <label for="price">Price</label>
        <input type="text" name="price" placeholder="$50 USD" value="{{ old('price',$product->price ?? '') }}">
        
        <br>
        <button>Save</button>