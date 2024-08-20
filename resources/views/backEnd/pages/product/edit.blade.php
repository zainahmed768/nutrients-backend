@extends('backEnd.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Product</h1>
        {{-- @dd($product) --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
            </div>
            <form action="{{ route('product.update', $product->id) }}" method="POST" class="m-3"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="Title"
                        class="form-control">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    @if ($product->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                style="max-width: 150px;">

                        </div>
                    @endif
                    <input type="file" value="{{ old('image', asset('storage/' . $product->image)) }}" name="image"
                        placeholder="image" class="form-control">

                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="number" value="{{ old('price', $product->price) }}" name="price" placeholder="price"
                        class="form-control">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Select Category</label>
                    <select name="category" id="" class="form-control">
                        <option value="Select a category" disabled>Select a category</option>
                        @foreach ($categories as $key => $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
