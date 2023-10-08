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

        {{--  <div class="Wrap-create">
              <a class="status process" href="#"><button class="Btn_create">Add Product</button></i></a>
          </div>--}}
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>List of Cart</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Categories</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Sale</th>
                        <th>Quantity</th>
                        <th>Expiration date</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>
                        </td>
                        <td></td>
                        <td>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td </td>
                        <td></td>
                        <td>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->

@endsection
