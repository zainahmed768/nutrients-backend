@extends('backEnd.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
            </div>
            <form action="{{ route('category.store') }}" method="POST" class="m-3">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" placeholder="Title" class="form-control">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
             
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
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
