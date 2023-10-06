@extends('dashboard.layouts.master')

@section('title')
    <title>Edit Category</title>
@endsection

@section('content')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Categories</h1>
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

        <div class="Wrap-create">
            <button class="Btn_create">Add Category</button>
        </div>

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
            <div class="Edit-category">
                <h3>Edit Category</h3>
                <form method="POST" action="{{ route('dashboard.category.update', ['id' => $category->CategoryId]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" id="category_name" name="CategoryName" value="{{ $category->CategoryName }}" required>
                    </div>
                    <button type="submit" class="Btn_update">Update Category</button>
                </form>

                <!-- Button to delete category -->
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
