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
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>ID Warehouse</th>
                        <th>ID Products</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($warehouses as $warehouse)
                    <tr>
                        <td>{{ $warehouse->id }}</td>

                        <td>{{ $warehouse->Id_Product }}</td>
                        <td>{{ $warehouse->products->ProductName }}</td>
                        <td>{{ $warehouse->quantity }}</td>
                        <td>
                            @if($warehouse->status == 1)
                            In stock
                            @elseif($warehouse->status == 2)
                            Out of stock
                            @endif
                        </td>
                        <td>{{ $warehouse->created_at }}</td>
                        <td>
                            <a class="status process" href="{{route('dashboard.warehouse.edit', ['id' => $warehouse->id])}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>


        </div>
    </div>
</main>
<!-- MAIN -->

@endsection