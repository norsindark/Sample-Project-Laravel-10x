@extends('frontend/layouts.master')

@section('title')
<title>manageruser page</title>
@endsection

@section('content')

<!--=======Page Content Area=========-->
<main id="pageContentArea">
    <!--========================================
            Page Head
            ===========================================-->
    <div class="page-head text-center">
        <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
            <div class="overlay"></div>
            <div class="container">
                <h2>QUẢN LÍ TÀI KHOẢN</h2>
                <p>Hiển thị thông tin tài khoản và các thông tin khác.</p>
            </div>
        </div>
    </div>
    <!--========================================
            grid and list view
            ===========================================-->
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <div class="product-overview pt-50 pb-50  fix_product">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs fix_position">
                    @include('frontend.manageruser.components.sidebar')
                </div>
                <div class="col-xs-12 col-sm-9">
                    <header class="sec-heading style text-center fix_secheading">
                        <div class="category-wrap">
                            <span class="categorise" style="font-size: 20px;
    font-weight: 700;">Đơn hàng của bạn</span>
                        </div>
                        <div class="search_addresss">
                            <input type="text" placeholder="Từ khóa tìm kiếm..." />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </header>
                    <div class="wrap_informaiton">
                        <table class="table table_layout">
                            <thead>
                                <tr>
                                    <th>Mã</th>
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
                                    <td>{{ $order->user->name }}</td>
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
                                        <form method="POST" action="{{ route('remove-order', $order->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button name="status" value="5" id="status" type="submit" class="btn btn-primary" onclick="return confirm('Bạn có muốn hủy đơn hàng này?')">Hủy</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if(empty($orders))
                        <div class="imgnoproduct_block">
                        </div>
                        <div class="text-center text-center-fix">
                            <h4>Bạn chưa có đơn hàng nào</h4>
                            <span>Khám phá thêm sản phẩm tại trang website</span>
                        </div>
                        <button type="button" class="btn btn-primary btn_location">Khám phá ngay</button>
                        @endif

                    </div>
                </div>
            </div><!--row-->
        </div><!--product overview-->
    </div><!--container-->

</main><!--pageContentArea-->


@endsection