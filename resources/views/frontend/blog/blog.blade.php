@extends('frontend/layouts.master')

@section('title')
    <title>Blog page</title>
@endsection

@section('content')
    <!--=======Page Content Area=========-->
    <main id="pageContentArea">
        <!--========================================
        Main Content Area
        ===========================================-->

        <div class="page-head text-center">
            <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
                <div class="overlay"></div>
                <div class="container">
                    <h2>TIN TỨC</h2>
                    <p>Hiện thị các thông tin liên quan đến lĩnh vực y tế và thuốc</p>
                </div>
            </div>
        </div>
        <div class="page-contentArea pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <aside class="sidebar">
                            <section class="widget widget-category pb-30">
                                <header>
                                    <h3>THỂ LOẠI</h3>
                                </header><!--Widget header-->
                                <div class="widget-content">
                                    <ul>
                                        <li class="parent"><a href="#">Tin Tức</a>
                                            <ul>
                                                <li><a href="#">Thông Tin Thuốc</a></li>
                                                <li><a href="#">Tin Tức Y Tế</a></li>
                                                <li><a href="#">Cẩm Nang Sử Dụng Thuốc</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Sản Phẩm Thuốc Mới</a>
                                            <ul>
                                                <li><a href="#">Danh Sách Thuốc Mới</a></li>
                                                <li><a href="#">Thông Tin Về Công Dụng</a></li>
                                                <li><a href="#">Đánh Giá Sản Phẩm</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Hướng Dẫn Sử Dụng</a>
                                            <ul>
                                                <li><a href="#">Hướng Dẫn Sử Dụng Thuốc</a></li>
                                                <li><a href="#">Lời Khuyên Về Sử Dụng</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Về Y Tế</a>
                                            <ul>
                                                <li><a href="#">Tin Tức Về Sức Khỏe</a></li>
                                                <li><a href="#">Tin Tức Về Bệnh Lý</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!--widget-content-->
                            </section><!--widget-->
                            <section class="widget widget_tag_cloud">
                                <header>
                                    <h3>TÌM KIẾM PHỔ BIẾN</h3>
                                </header><!--Widget header-->
                                <div class="widget-content">
                                    <a href="#">Bệnh dịch</a>
                                    <a href="#">Gía thuốc</a>
                                    <a href="#">Sốt</a>
                                    <a href="#">Dịch bệnh 2023</a>
                                    <a href="#">Thương hiệu</a>
                                    <a href="#">Covid</a>
                                    <a href="#">Hạt nhân</a>
                                    <a href="#">Phóng xạ</a>

                                </div>
                            </section><!--widget-->
                        </aside>
                    </div><!--sidebar Column-->
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <div class="articleWrap">
                            <article class="xv-article">
                                <figure>
                                    <a href="#"><img class="img_bloc-fix" src="/Duanmautemplate/assets/img/blog/blog1.jpg" alt=""></a>
                                </figure><!--fig-->

                                <div class="xv-art-content mb-60 shadow-around">
                                    <header>
                                        <a href="#"><h2 class="title_fontweight">Sốt xuất huyết Dengue là gì? Nguyên nhân gây bệnh và nguyên tắc điều trị, phòng ngừa</h2></a>
                                        <time datetime="2015-12-01">Posted by Van Duc Thang 10 -2023</time>
                                    </header><!--header-->
                                    <h4 class="title_fontweight">Tìm hiểu chung</h4>
                                    <h4 class="title_fontweight">Sốt xuất huyết Dengue là gì?</h4>
                                    <p>Sốt xuất huyết Dengue là một bệnh truyền nhiễm do muỗi Aedes truyền từ người sang người, xảy ra ở các khu vực nhiệt đới, cận nhiệt đới trong đó có Việt Nam. Bệnh xảy ra quanh năm nhưng thường tăng vào mùa mưa.</p>
                                    <p>Sốt xuất huyết có thể gặp ở cả trẻ em và người lớn. Một bệnh nhân mắc sốt xuất huyết có thể có nhiều triệu chứng khác nhau từ mức độ nhẹ đến nặng. Đặc điểm chính của sốt xuất huyết Dengue là sốt, xuất huyết và thoát huyết thương.</p>
                                    <p>Đôi khi bệnh có thể gây ra biến chứng sốc giảm thể tích, rối loạn đông máu, suy tạng và nếu không được chẩn đoán sớm và điều trị kịp thời, bệnh có thể dẫn đến tử vong.</p>
                                    <p>Hiện tại bệnh chưa có thuốc điều trị đặc hiệu cho bệnh sốt xuất huyết vì vậy điều trị triệu chứng là chủ yếu. Hầu hết bệnh nhân đều hồi phục trong vòng một tuần hoặc lâu hơn. Ở một số trường hợp, bệnh có thể nặng lên và gây đe doạ tính mạng.</p>
                                    <p>Tình trạng này gọi là sốt xuất huyết Dengue nặng. Do đó bệnh nhân cần được khám, dặn dò các dấu hiệu cảnh báo bệnh chuyển nặng và liên hệ với cơ sở y tế gần nhất nếu có các biến chứng do sốt xuất huyết xảy ra.</p>
                                    <p></p>
                                    <blockquote>
                                        Sốt xuất huyết Dengue là một bệnh truyền nhiễm do muỗi Aedes truyền từ người sang người, thường xảy ra ở các khu vực nhiệt đới, cận nhiệt đới trong đó có Việt Nam. Có bốn loại vi rút gây sốt xuất huyết (DENV-1, -2, -3 và -4). Sốt xuất huyết có thể gặp ở cả trẻ em và người lớn. Bệnh nhân mắc sốt xuất huyết do 1 trong 4 loại vi rút Dengue chỉ có miễn dịch với đúng loại vi rút đó. Vì vậy, một người theo lý thuyết có thể bị nhiễm tới bốn lần.
                                    </blockquote><!--blockquote-->
                                    <p>Bệnh nhân mắc sốt xuất huyết có thể có nhiều triệu chứng khác nhau với mức độ từ nhẹ đến nặng. Triệu chứng thường xuất hiện sau 4 - 10 ngày từ khi bệnh nhân bị muỗi chích mang mầm bệnh vào máu và các triệu chứng này có thể nhầm lẫn với các bệnh khác như cúm, cảm lạnh…

                                        Bệnh nhân mắc sốt xuất huyết Dengue thường sốt cao (39 - 40 độ C), đột ngột, liên tục kéo dài 3 - 4 ngày và có thể kèm các triệu chứng sau:

                                        Đau đầu;

                                        Đau nhức cơ, xương, khớp;

                                        Nhức hốc mắt;

                                        Buồn nôn, nôn ói;

                                        Nổi ban da, da niêm xung huyết.

                                        Ngoài ra cần lưu ý đến các dấu hiệu cảnh báo, thường xuất hiện sau khi hết giai đoạn sốt khoảng 24 - 48 giờ như:

                                        Đau bụng nhiều và liên tục hoặc tăng cảm giác đau nhất là ở vùng gan;

                                        Vật vã, lừ đừ, li bì;

                                        Nôn ói nhiều (ít nhất 3 lần trong 24 giờ);

                                        Chảy máu nướu răng, chảy máu mũi;

                                        Nôn ra máu hoặc đi cầu phân đen.</p>
                                </div><!--article content-->

                            </article><!--article-->
                        </div><!--articleWrap-->

                        <div class="commentWrap shadow-around">
                            <div class="comments">
                                <h2>12 Đánh giá</h2>
                                <div class="comment">
                                    <figure>
                                        <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="">
                                    </figure>
                                    <div class="pad">
                                        <h4>Van Duc</h4>
                                        <div class="date-stamp">Tháng 10 - 2023 Lúc 2:15 Chiều</div>
                                        <p>Tôi là một người quan tâm đến vấn đề sức khỏe và môi trường, và trong một thời gian dài, tôi đã theo dõi và tham gia vào các cuộc thảo luận về dịch sốt rết trên mạng xã hội. Dịch sốt rết không chỉ là một vấn đề y tế toàn cầu mà còn liên quan mật thiết đến môi trường và sự phát triển bền vững. </p>
                                        <a class="reply add-reply" href="#comment-form">Hồi đáp<i class="fa fa-share"></i></a>
                                    </div>

                                    <div class="comment reply">
                                        <figure>
                                            <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="">
                                        </figure>
                                        <div class="pad">
                                            <h4>Van Duc</h4>
                                            <div class="date-stamp">Tháng 10 - 2023 Lúc 2:15 Chiều</div>
                                            <p>Tôi là một người quan tâm đến vấn đề sức khỏe và môi trường, và trong một thời gian dài, tôi đã theo dõi và tham gia vào các cuộc thảo luận về dịch sốt rết trên mạng xã hội. Dịch sốt rết không chỉ là một vấn đề y tế toàn cầu mà còn liên quan mật thiết đến môi trường và sự phát triển bền vững. </p>
                                            <a class="reply add-reply" href="#comment-form">Hồi đáp<i class="fa fa-share"></i></a>
                                        </div>
                                    </div><!--comment-->
                                </div><!--comment-->



                                <div class="comment">
                                    <figure>
                                        <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="">
                                    </figure>
                                    <div class="pad">
                                        <h4>Van Duc</h4>
                                        <div class="date-stamp">Tháng 10 - 2023 Lúc 2:15 Chiều</div>
                                        <p>Tôi là một người quan tâm đến vấn đề sức khỏe và môi trường, và trong một thời gian dài, tôi đã theo dõi và tham gia vào các cuộc thảo luận về dịch sốt rết trên mạng xã hội. Dịch sốt rết không chỉ là một vấn đề y tế toàn cầu mà còn liên quan mật thiết đến môi trường và sự phát triển bền vững. </p>
                                        <a class="reply add-reply" href="#comment-form">Hồi đáp<i class="fa fa-share"></i></a>
                                    </div>
                                </div><!--comment-->

                            </div><!--comments-->

                            <div class="comment-form">
                                <h2>Để lại câu trả lời</h2>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <input type="text" id="name1" placeholder="Tên:">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <input type="text" id="email1" placeholder="Email:">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <textarea id="message1" placeholder="Message:"></textarea>
                                        </div>
                                    </div>
                                    <input class="btn" id="submit1" type="submit" value="Giử dánh giá">
                                </form>
                            </div><!--reply-->
                        </div>


                    </div><!--conten Coloumn-->
                </div><!--Main row-->
            </div><!--container-->
        </div><!--page-contentArea-->

    </main>
@endsection



