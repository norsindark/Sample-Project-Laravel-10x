@extends('dashboard.layouts.master')


@section('title')
<title>DashboardOrder</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Order</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Order</a>
                </li>

            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>List of Orders</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Buyer</th>
                        <th>Recipient</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->user->name }}</td> <!-- Sử dụng relationship để lấy tên người dùng -->
                        <td>{{ $order->recipient }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>
                            @if ($order->status == 1)
                            Chưa xác nhận
                            @elseif ($order->status == 2)
                            Đã xác nhận
                            @elseif ($order->status == 3)
                            Đang giao hàng
                            @elseif ($order->status == 4)
                            Đã giao hàng
                            @elseif ($order->status == 5)
                            Đã hủy
                            @endif
                        </td>

                        <td>{{ $order->created_at }}</td>
                        <td>
                            @if($order->status != 5)
                            <form method="POST" action="{{ route('update-order-status', $order->id) }}">
                                @csrf
                                @method('PATCH')
                                <select name="status">
                                    <option value="0" disabled selected>Cập nhật trạng thái</option>
                                    <option value="1">Chưa xác nhận</option>
                                    <option value="2">Đã xác nhận</option>
                                    <option value="3">Đang giao hàng</option>
                                    <option value="4">Đã giao hàng</option>
                                    <option value="5">Hủy đơn hàng</option>
                                </select>
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Bạn có muốn cập nhật trạng thái đơn hàng này không?')">Update</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Recipient</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
 
                        </tr>
                    </tbody>
                </table> -->
        </div>
    </div>
</main>
<!-- MAIN -->

@endsection