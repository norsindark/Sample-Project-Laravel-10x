@extends('dashboard.layouts.master')


@section('title')
<title>DashboardOrder</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Warehouse</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Warehouse</a>
                </li>

            </ul>
        </div>

    </div>

    {{-- <div class="Wrap-create">
              <a class="status process" href="#"><button class="Btn_create">Add Product</button></i></a>
          </div>--}}
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Warehouse</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID Products</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Expiration Date</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($warehouses as $warehouse)
                    <tr>
                        <td>{{ $warehouse->Id_Product }}</td>
                        <td>
                            <img src="{{ asset($warehouse->Image) }}" alt="{{ $warehouse->ProductName }} Image" width="300">
                        </td>
                        <td>{{ $warehouse->ProductName }}</td>
                        <td>{{ $warehouse->quantity }}</td>
                        <td>
                            @php
                            $expireDate = \Carbon\Carbon::parse($warehouse->expire);
                            $currentDate = \Carbon\Carbon::now();
                            $daysRemaining = $expireDate->diffInDays($currentDate);
                            echo $daysRemaining . ' days remaining';
                            @endphp
                        </td>
                        <td>{{ $warehouse->created_at }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
</main>
<!-- MAIN -->

@endsection