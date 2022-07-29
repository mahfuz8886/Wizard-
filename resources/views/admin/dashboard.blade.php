@extends('layouts.master')

@section('title', 'Blog Dashboard')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    @if (session('product_add'))
                        <h6 class="alert alert-success"> {{ session('product_add') }} </h6>
                    @endif
                    <div class="card-body fw-bold">Add Product</div>


                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="text" class="form-control" name="product_name" placeholder="Product Name"
                            value="{{ old('product_name') }}"><br>

                        <textarea name="product_desc" id="product_desc" cols="5" rows="5" class="form-control"
                            value="{{ old('product_desc') }}" placeholder="Product Description"></textarea><br>

                        <input type="text" class="form-control" name="price" placeholder="Product Price"
                            value="{{ old('price') }}"><br>

                        <input type="file" class="form-control" name="image" placeholder="Product Price"
                            value="{{ old('image') }}"><br>

                        <button type="submit" class="btn btn-success">Create</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
