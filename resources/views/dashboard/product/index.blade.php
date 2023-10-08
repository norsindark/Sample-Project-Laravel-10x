@extends('dashboard.layouts.master')


@section('title')
<title>DashboardHome</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Product</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Product</a>
                </li>
            </ul>
        </div>

    </div>



    <div class="Wrap-create">
        <a class="status process" href="{{ route('dashboard.product.create')}}"><button class="Btn_create">Add Product</button></i></a>
    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>List of Products</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>

            </div>
            <table>
                <thead>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Categories</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Sale</th>
                        <!-- <th>Quantity</th> -->
                        <!-- <th>Expiration date</th> -->
                        <th>Status</th>
                        <!-- <th>Created At</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->Id_Product }}</td>
                        <td>
                            <img src="{{ asset($product->Image) }}" alt="{{ $product->ProductName }} Image" width="300">
                        </td>
                        <td>{{ $product->ProductName }}</td>
                        <td>
                            @foreach ($product->categories as $category)
                            {{ $category->CategoryName }}
                            @if (!$loop->last)
                            , <!-- Dấu phẩy nếu không phải danh mục cuối cùng -->
                            @endif
                            @endforeach
                        </td>
                        <td>{{ $product->Price }}</td>
                        <td>{{ $product->Description }}</td>
                        <td>{{ $product->Sale }}%</td>
                        <!-- <td style="padding-left: 6px;">{{ $product->quantity }}</td> -->
                        <!-- <td>{{ $product->expire }}</td> -->
                        <td>
                            <span class="status {{ $product->Status == 1 ? 'completed' : 'pending' }}">
                                {{ $product->Status == 1 ? 'Available' : 'Out of stock' }}
                            </span>
                        </td>
                        <!-- <td>{{ $product->created_at }}</td> -->
                        <td>
                            <a class="status process" href="{{route('dashboard.product.edit', ['ProductId' => $product->ProductId])}}">Edit</a>

                            <form method="POST" action="{{ route('dashboard.product.destroy', ['ProductId' => $product->ProductId]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="status process" style="background-color: red; border: none; margin-top: 0;" onclick="return confirm('Are you sure you want to delete this category?')">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- MAIN -->
<script>
    function confirmDelete(categoryId) {
        if (confirm('Are you sure you want to delete this category?')) {
            document.getElementById('delete-form-' + categoryId).submit();
        }
    }
</script>
@endsection