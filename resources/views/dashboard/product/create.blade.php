@extends('dashboard.layouts.master')


@section('title')
<title>Create Category</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Create Product</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Create</a>
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
        <div class="Create-product">
            <form class="form_create" style="height: 830px" method="POST" action="{{ route('dashboard.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ProductId">Product ID</label>
                    <input class="form-control" type="text" id="ProductId" name="Id_Product" required>
                </div>
                <div class="form-group">
                    <label for="ProductName">Product Name</label>
                    <input class="form-control" type="text" id="ProductName" name="ProductName" required>
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input class="form-control" type="text" id="Description" name="Description" required>
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input class="form-control" type="number" id="Price" name="Price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="Sale">Sale</label>
                    <input class="form-control" type="number" id="Sale" name="Sale" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="Image">Image</label>
                    <input class="form-control" type="file" id="Image" name="Image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input class="form-control" type="number" id="quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="expire">Expire</label>
                    <input class="form-control" type="datetime-local" id="expire" name="expire" required>
                </div>
                <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" id="Status" name="Status" required>
                        <option value="1">Available</option>
                        <option value="2">Out of stock</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Category">Categories</label>
                    @foreach ($categories as $category)
                    <div class="category-checkbox" style="display: flex; align-items: center">
                        <input style="width: 18px; height: 18px; margin-right: 5px"  type="checkbox" id="category_{{ $category->CategoryId }}" name="categories[]" value="{{ $category->CategoryId }}">
                        <label for="category_{{ $category->CategoryId }}">{{ $category->CategoryName }}</label>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="Btn_create ">Create Product</button>
            </form>

        </div>
    </div>
</main>
<!-- MAIN -->
@endsection
