@extends('dashboard.layouts.master')

@section('title')
<title>Edit Category</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Edit Product</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">User</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- <div class="Wrap-create">
            <button class="Btn_create">Add Category</button>
        </div> -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="table-data">
        <div class="Edit-product">
            <h3>Edit Product</h3>
            <form class="form_edit-product" method="POST" action="{{ route('dashboard.product.update', ['ProductId' => $product->ProductId]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="ProductId">Product ID</label>
                    <input class="form-control" type="text" id="ProductId" name="Id_Product" value="{{$product->Id_Product}}" required>
                </div>
                <div class="form-group">
                    <label for="ProductName">Product Name</label>
                    <input class="form-control" type="text" id="ProductName" name="ProductName" value="{{$product->ProductName}}" required>
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input class="form-control"  type="text" id="Description" name="Description" value="{{$product->Description}}" required>
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input class="form-control" type="number" id="Price" name="Price" step="0.01" value="{{$product->Price}}" required>
                </div>
                <div class="form-group">
                    <label for="Sale">Sale</label>
                    <input class="form-control" type="number" id="Sale" name="Sale" step="0.01" value="{{$product->Sale}}" required>
                </div>
                <div class="form-group">
                    <label for="Image">Image</label>
                    <img src="{{ asset($product->Image) }}" alt="{{ $product->ProductName }} Image" width="300">
                    <input class="form-control" type="file" id="Image" name="Image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="expire">Expire</label>
                    <input class="form-control" type="datetime-local" id="expire" name="expire" value="{{$product->expire}}" required>
                </div>
                <div class="form-group">
                    <label for="Category">Categories</label>
                    @foreach ($categories as $category)
                    <div class="category-checkbox" style="display: flex; align-items: center" >
                        <input style="width: 18px; height: 18px; margin-right: 5px"  type="checkbox" id="category_{{ $category->CategoryId }}" name="categories[]" value="{{ $category->CategoryId }}" {{ in_array($category->CategoryId, $product->categories->pluck('CategoryId')->toArray()) ? 'checked' : '' }}>
                        <label for="category_{{ $category->CategoryId }}">{{ $category->CategoryName }}</label>
                    </div>
                    @endforeach
                </div>
                <button type="submit" style="margin-top: 20px" class="Btn_create">Update Product</button>
            </form>

        </div>
</main>
<!-- MAIN -->
@endsection
