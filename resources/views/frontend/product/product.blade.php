@extends('frontend/layouts.master')

@section('title')
    <title>DetailProduc page</title>
@endsection

@section('content')
    <!--=======Page Content Area=========-->
    <main id="pageContentArea">

        <!--========================================
        Product Details
        ===========================================-->

        <div class="page-head style text-center">
            <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
                <div class="overlay"></div>
                <div class="container">
                    <h2>CHI TIẾT SẢN PHẨM</h2>
                    <p>Hiển thị các thông tin đầy đủ về sản phẩm</p>
                </div>
            </div>
        </div>

        <!--========================================
        single product details
        ===========================================-->

        <div class="container">
            <div class="single-product-detail pt-60 pb-30">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="product-slider-wrap text-center shadow-around">
                            <div class="product-slide">
                                <figure>
                                    <img src="/Duanmautemplate/assets/img/CTproduct/product1anh1_1.jpg" alt="">
                                </figure>
                            </div><!--product-slide-->
                            <div class="product-slider styleDetail">
                                <div class="detail-slider">
                                    <div class="owl-carousel slider_controls5"  data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="20" data-slides="4" data-slides-md="3" data-slides-sm="1" data-loop="false" data-nav="true">
                                        <figure class="border-around">
                                            <a href="#"><img src="/Duanmautemplate/assets/img/CTproduct/product1anh1_1.jpg" alt=""></a>
                                        </figure>
                                        <figure class="border-around">
                                            <a href="#"><img src="/Duanmautemplate/assets/img/CTproduct/product1anh2_1.jpg" alt=""></a>
                                        </figure>

                                        <figure class="border-around">
                                            <a href="#"><img src="/Duanmautemplate/assets/img/CTproduct/produc1anh3.jpg" alt=""></a>
                                        </figure>


                                        <figure class="border-around">
                                            <a href="#"><img src="/Duanmautemplate/assets/img/CTproduct/produc1anh4.jpg" alt=""></a>
                                        </figure>
                                        <figure class="border-around">
                                            <a href="#"><img src="/Duanmautemplate/assets/img/CTproduct/product1anh5.jpg" alt=""></a>
                                        </figure>

                                    </div>

                                </div><!--product-slider-->
                            </div>
                        </div><!--column-6-->

                    </div><!--column-6-->
                    <div class="col-xs-12 col-md-6">
                        <div class="single-product-overview">
                            <h2>Viên uống Elevit cho bà bầu (Hộp 30 viên)</h2>
                            <div class="xv-rating stars-5"></div>
                            <ul class="review">
                                <li>15 Đánh giá</li>
                                <li><a href="#">Tạo một đánh giá</a></li>

                            </ul>

                            <p class="no-mar">Elevit bổ sung acid folic, sắt và các vitamin, khoáng chất cần thiết cho phụ nữ chuẩn bị mang thai, đang mang thai và cho con bú. Hỗ trợ tăng cường sức khỏe, nâng cao sức đề kháng, giảm nguy cơ thiếu hụt vitamin và khoáng chất, hỗ trợ thai kỳ khỏe mạnh.</p>
                            <ul class="product-description mt-35 mb-35">
                                <li><span>Thương hiệu</span>: Bayer</li>
                                <li><span>Chọn đơn vị tính</span>: Hộp</li>
                                <li><span>Nhà sản xuất</span>: DELPHARM GAILLARD</li>
                                <li><span>Nước sản xuất</span>: Pháp</li>
                                <li><span>Thành phần</span>: Vitamin A, Vitamin D, Vitamin E, Vitamin C, Vitamin B1, Vitamin B2, Vitamin B3, Vitamin B5, Vitamin B6, Vitamin B12, Biotin, Acid folic, Canxi, Magie, Sắt, Kẽm, Mangan, Đồng, Selen, iodo</li>
                            </ul>
                            <div class="cart-options">
                                <a href="#" class="price"><span>329.000 VNĐ</span></a>
                                <ul class="cart-buttons mt-45 clearfix">

                                    <li>
                                        <div class="quantity-control">
                                            <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                            <input type="text" data-invalid="Enter valid quantity" data-maxalert="Maximum limit reached" data-max="10" data-minalert="Minimum limit reached" data-min="1" value="2">
                                            <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-cart btn-square">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-cart btn-square">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </li>
                                </ul><!--cart-buttons-->
                                <a class="btn btn-continue">THÊM VÀO GIỎ HÀNG</a>
                            </div><!--cart-options-->
                        </div><!--single-product-overview-->
                    </div><!--column-6-->
                </div><!--single-product-detail-->
                <div class="tabs-pane mt-60">
                    <ul class="tab-sections">
                        <li class="active"><a href="#tab01" class="btn-cart">Mô tả</a></li>
                        <li><a href="#tab02" class="btn-cart">Công dụng</a></li>
                        <li><a href="#tab03" class="btn-cart">Cách dùng</a></li>
                        <li><a href="#tab04" class="btn-cart">Tác dụng phụ</a></li>
                        <li><a href="#tab05" class="btn-cart">Đánh giá</a></li>
                    </ul>
                    <div class="tab-panels">
                        <div id="tab01" class="tab-content active">
                            <h4>Elevit là gì ?</h4>
                            <h4>Mô tả sản phẩm </h4>
                            <p>Sự chuẩn bị hoàn hảo để chào đón bé yêu khỏe mạnh
                                Mẹ có biết, nhu cầu tiêu thụ khuyến nghị của một số chất dinh dưỡng tăng lên đến 50% khi có thai? Elevit là thực phẩm bảo vệ sức khỏe được nhập khẩu từ Pháp, giúp bổ sung acid folic và sắt, các vitamin, khoáng chất cần thiết cho phụ nữ chuẩn bị mang thai, đang mang thai và cho con bú, hỗ trợ tăng cường sức khỏe, nâng cao sức đề kháng, giảm nguy cơ thiếu hụt vitamin và khoáng chất, hỗ trợ thai kỳ khỏe mạnh.
                            </p>
                            <h4>Thành phầm</h4>
                            <ul>
                                <li>Vitamin A - Hàm lượng: 2566 IU</li>
                                <li>Vitamin D - Hàm lượng: 200 IU</li>
                                <li>Vitamin E - Hàm lượng: 10 mg</li>
                                <li>Vitamin C - Hàm lượng: 85 mg</li>
                                <li>Vitamin B1 - Hàm lượng: 1.4 mg</li>
                                <li>Vitamin B2 - Hàm lượng: 1.4mg</li>
                                <li>Vitamin B3 - Hàm lượng: 18mg</li>
                            </ul>
                        </div><!--tab content-->
                        <div id="tab02" class="tab-content">
                            <h4>Công dụng của Elevit ?</h4>
                            <P>Elevit bầu bổ sung acid folic, sắt và các vitamin, khoáng chất cần thiết cho phụ nữ chuẩn bị mang thai, đang mang thai và cho con bú.</P>
                            <p>Hỗ trợ tăng cường sức khỏe, nâng cao sức đề kháng, giảm nguy cơ thiếu hụt vitamin và khoáng chất, hỗ trợ thai kỳ khỏe mạnh.</p>

                        </div><!--tab content-->
                        <div id="tab03" class="tab-content">
                            <h4>Cách dùng Elevit ?</h4>
                            <P>Mỗi ngày uống 1 viên.</P>
                            <p>Nên uống ít nhất 1 tháng trước khi mang bầu.</p>
                            <h4>Đối tượng sử dụng</h4>
                            <p>Elevit thích hợp sử dụng cho phụ nữ chuẩn bị mang thai, đang mang thai và cho con bú.
                            </p>

                        </div><!--tab content-->
                        <div id="tab04" class="tab-content">
                            <h4>Tác dụng phụ</h4>
                            <p>Chưa có thông tin về tác dụng phụ của sản phẩm.
                            </p>
                            <h4>Lưu ý: <p>Không sử dụng cho người mẫn cảm với bất kỳ thành phần nào của sản phẩm.

                                    Không dùng quá liều khuyến cáo.

                                    Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.

                                    Đọc kỹ hướng dẫn sử dụng trước khi dùng.</p></h4>
                        </div><!--tab content-->
                        <div id="tab05" class="tab-content">
                            <h4>Đánh giá về sản phẩm</h4>
                            <p> Không có đánh giá nào về sản phẩm
                            </p>
                        </div><!--tab content-->

                    </div>

                </div><!--tabs pane-->
            </div><!--container-->
        </div>

        <!--========================================
        related products
        ===========================================-->

        <div class="container">
            <div class="xv-featured pt-25 ">
                <header class="sec-heading text-center">
                    <div class="category-wrap style">
                     <span class="categorise"
                     ><i class="fa fa-bars"></i>Danh mục sản phẩm<i
                             class="fa style fa-caret-down"
                         ></i
                         ></span>
                        <ul class="cat-dropDown">
                            <li><a href="#">Dinh dưỡng</a></li>
                            <li><a href="#">Vitamin & Khoáng chất</a></li>
                            <li><a href="#">Sức khoẻ tim mạch</a></li>
                            <li><a href="#">Tăng sức đề kháng, miễn dịch</a></li>
                            <li><a href="#">Hỗ trợ tiêu hóa</a></li>
                    </div>
                    <h2><span>SẢN PHẨM LIÊN QUAN</span></h2>
                    <span>Tháng 10 - 2023</span>
                </header><!--header-->
                <div class="xv-product-slides mt-25 mb-25">
                    <div class="owl-carousel slider_controls1"  data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-slides="4" data-slides-md="2" data-slides-sm="1" data-margin="24" data-loop="true" data-nav="true">
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img  class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt=""/></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist"  class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                    </div><!--owl carousel-->
                </div>
            </div><!--xv-featured-->
        </div><!--container-->

        <!--========================================
        sign up
        ===========================================-->

        <div class="container">
            <div class="xv-sign-up text-center pt-20 pb-60">
                <h3>Đăng ký bên dưới để cập nhật sớm</h3>
                <form class="sign-up-form">
                    <i class="fa fa-envelope"></i>
                    <input type="text" placeholder="Nhập gmail..." />
                    <button type="submit">Đăng kí</button>
                </form>
                <!--signup-form-->
                <p>
                    Vui lòng đăng ký vào danh sách gửi thư để nhận được thông tin cập nhật mới, <br />
                    ưu đãi đặc biệt và thông tin giảm giá khác.
                </p>
            </div><!--xv-signup-->
        </div><!--container-->

    </main>
@endsection







