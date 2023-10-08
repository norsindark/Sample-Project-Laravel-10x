@extends('dashboard.layouts.master')


@section('title')
<title>DashboardHome</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>

    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>1020</h3>
                <p>New Order</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>2834</h3>
                <p>Visitors</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>$2543</h3>
                <p>Total Sales</p>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Recent Orders</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr> -->
                </tbody>
            </table>
        </div>

        <div class="todo">
            <div class="head">
                <h3>Warehouse Status</h3>
                <i class='bx bx-plus'></i>
                <i class='bx bx-filter'></i>
            </div>
            <ul class="todo-list">
                @foreach ($warehouses as $warehouse)
                <li>
                    <p>Product Name: <a href="#">{{ $warehouse->ProductName }}</a></p>
                    <p>Quantity: {{ $warehouse->quantity }}</p>
                    <p>Expire:
                        @php
                        $expireDate = \Carbon\Carbon::parse($warehouse->expire);
                        $currentDate = \Carbon\Carbon::now();
                        $daysRemaining = $expireDate->diffInDays($currentDate);
                        echo $daysRemaining . ' days remaining';
                        @endphp
                    </p>
                    <p>Created At: {{ $warehouse->created_at }}</p>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</main>
<!-- MAIN -->
@endsection