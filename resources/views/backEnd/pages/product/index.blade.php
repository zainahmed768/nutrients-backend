@extends('backEnd.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Products</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        {{-- @dd($products) --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
                <a href="{{ route('product.create') }}" class="btn btn-primary">Create <i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>image</th>
                                <th>title</th>
                                <th>Description</th>
                                <th>price</th>
                                <th>category</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($products->count() > 0)
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" ;
                                                    style="width: 150px;height: 100px;" class="img-fluid" alt="">
                                            @endif
                                        </td>

                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>${{ $product->price }}</td>
                                       
                                        <td>{{ $product->category->category_name ?? 'No Category' }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form class="d-inline"
                                                    action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>No Categories Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
