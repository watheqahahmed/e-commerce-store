@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="on_sale" id="on_sale" class="form-check-input" {{ $product->on_sale ? 'checked' : '' }}>
                <label class="form-check-label" for="on_sale">On Sale</label>
            </div>
            <div class="form-group">
                <label for="image">Current Image:</label>
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 200px; display: block; margin-bottom: 10px;">
                @else
                    <p>No image uploaded.</p>
                @endif
                <label for="image">Upload New Image (optional):</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
