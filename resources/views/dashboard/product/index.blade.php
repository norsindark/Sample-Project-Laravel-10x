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
                        <th>Sale</th>
                        <th>Expiration date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr style="font-size: 13px" class="two_hight">
                        <td>{{ $product->Id_Product }}</td>
                        <td style="width: 200px !important;">
                            @if ($product_images)
                            @foreach ($product_images as $product_image)
                            @if ($product_image->ProductId == $product->ProductId)
                            <img src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image">
                            @endif
                            @endforeach
                            @endif
                            <a class="status process" href="{{route('dashboard.product.edit_Image', ['ProductId' => $product->ProductId])}}">Edit Image</a>
                        </td>
                        </td>
                        <td style="width: 200px !important;">{{ $product->ProductName }}</td>
                        <td style="width: 200px !important;">
                            @foreach ($product->categories as $category)
                            {{ $category->CategoryName }}
                            @if (!$loop->last)
                            ,
                            @endif
                            @endforeach
                        </td>
                        <td>{{ $product->Price }}VNĐ</td>
                        <td>{{ $product->Sale }}%</td>
                        <td>
                            @php
                            $expireDate = \Carbon\Carbon::parse($product->expire);
                            $currentDate = \Carbon\Carbon::now();
                            $daysRemaining = $expireDate->diffInDays($currentDate);
                            echo $daysRemaining . ' days remaining';
                            @endphp
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
