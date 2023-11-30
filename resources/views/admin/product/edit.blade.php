@extends('admin.admin-master')
@section('title')
    Edit Product
@endsection

@section('page-content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-md-6 grid-margin stretch-card mx-auto mt-5">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Edit Product</h6>

                        <form class="forms-sample" action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product
                                    Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"
                                        id="exampleInputUsername2" value="{{$product->name}}" placeholder="Enter Product Name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Quantity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="quantity"
                                        id="exampleInputEmail2" autocomplete="off"
                                        value="{{$product->quantity}}" placeholder="Enter Product Quantity">
                                    @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="price"
                                        id="exampleInputEmail2" autocomplete="off"
                                        value="{{$product->price}}" placeholder="Enter Product Price">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-inverse-success me-2">Update Product</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
