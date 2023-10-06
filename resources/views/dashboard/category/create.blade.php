@extends('dashboard.layouts.master')


@section('title')
<title>Create Category</title>
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
        <div class="Create-category">
            <h3>Create New Category</h3>
            <form method="POST" action="{{ route('dashboard.category.store') }}">
                @csrf
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" id="category_name" name="name" required>
                </div>
                <button type="submit" class="Btn_create">Create Category</button>
            </form>
        </div>
    </div>
</main>
<!-- MAIN -->
@endsection