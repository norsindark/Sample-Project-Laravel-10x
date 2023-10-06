<div class="quickViewWrap xv-hide ">
    <div class="quickView">
        <ul class="quickActions clearfix">
            <li title="Profile">
                <!--<span class="userAlerts-count qvCount">01</span>-->
                <a data-wide="true" href="#qvt-user">
                    <img src="/Duanmautemplate/assets/img/basic/avatar83.png" alt="" />
                    <span>Login</span>
                </a>
            </li>
            <li title="shopping cart">
                <span class="cartItems-count qvCount">1</span>
                <a data-wide="false" href="#qvt-cart">
                    <img src="/Duanmautemplate/assets/img/basic/bag45.png" alt="" />
                    <span>Your Cart</span>
                </a>
            </li>
            <li>
                <!--<span class="compare-count qvCount">03</span>-->
                <a data-wide="false" href="#qvt-wishlist" title="Wish List">
                    <img src="/Duanmautemplate/assets/img/basic/heart365.png" alt="" />
                    <span>Your Wishlist</span>
                </a>
            </li>
            <li>
                <!--<span class="compare-count qvCount">03</span>-->
                <a data-wide="false" href="#qvt-compare" title="Compare List">
                    <img src="/Duanmautemplate/assets/img/basic/line.png" alt="" />
                    <span>Compare List</span>
                </a>
            </li>
        </ul>

        <div class="quickviewTabs">
            <div id="qvt-user" class="qv-panel">
                <a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Form đăng nhập -->
                <div class="form-container" id="login-form">
                    <form method="post" action="{{ route('login') }}" id="login">
                        @csrf
                        <p class="text-center">
                            <img src="/Duanmautemplate/assets/img/basic/padlock106.png" alt="" />
                        </p>
                        <input type="text" name="username" placeholder="Username" id="login-username" />
                        <input type="password" name="password" placeholder="Password" id="login-password" />
                        <a href="#" class="lost">Lost your password?</a><br /><br />
                        <input type="submit" name="submit" value="Đăng Nhập" class="btn-blue btn" />
                    </form>
                </div>

                <!-- Liên kết "Đăng ký" -->
                <div class="input_signup">
                    <span style="color: floralwhite" href="#" class="lost" id="show-signup-link">Đăng kí tại đây?</span><br /><br />
                    <button class="btn-blue btn" id="show-signup-button">Đăng kí</button>
                </div>

                <!-- Form đăng ký (ẩn ban đầu) -->
                <div class="form-container" id="signup-form" style="display: none;">
                    <form method="post" action="{{ route('register') }}" id="signup">
                        @csrf
                        <p class="text-center">
                            <i class="fa-solid fa-user-plus" style="color: #ffffff; font-size: 52px; margin: auto"></i>
                            {{--<img src="/Duanmautemplate/assets/img/basic/padlock106.png" alt="" />--}}
                        </p>
                        <input type="text" name="username" placeholder="Username" id="signup-username" />
                        <input type="text" name="email" placeholder="email" id="signup-email" />
                        <input type="password" name="password" placeholder="Password" id="signup-password" />
                        <input type="password" name="confirmpassword" placeholder="Nhập lại Password" id="signup-confirmpassword" />
                        <input type="submit" name="submit" value="Đăng kí" class="btn-blue btn" />
                    </form>
                </div>

                <!-- Liên kết "Đăng nhập" (ẩn ban đầu) -->
                <div class="input_login form-hide">
                    <span style="color: floralwhite" href="#" class="lost" id="show-login-link">Đăng nhập tại đây?</span><br /><br />
                    <button class="btn-blue btn" id="show-login-button">Đăng nhập</button>
                </div>

            </div>


            <div id="qvt-cart" class="qv-panel">
                <a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
                <ul class="quickShoping-list">
                    <li>
                        <a data-pid="xyz101" data-qty="2" class="qv-remove-prod fa fa-remove" href="#"></a>
                        <a href="#"><img src="/Duanmautemplate/assets/img/news-img-2.png" alt="" /></a>
                        <span>x2</span>
                    </li>
                </ul>

                <a href="#" class="btn btn-blue triggerCart" title="check out">
                    <i class="fa fa-cart-arrow-down"></i>
                    <span>Visit Checkout Page</span>
                </a>
            </div>

            <div id="qvt-wishlist" class="qv-panel">
                <a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
                <ul class="quickShoping-list empty"></ul>
                <a href="#" class="btn btn-blue triggerCart" title="View Wishlist Page">
                    <i class="fa fa-heart"></i>
                    <span>Visit Checkout Page</span>
                </a>
            </div>

            <div id="qvt-compare" class="qv-panel">
                <a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
                <ul class="quickShoping-list empty"></ul>
                <a href="#" class="btn btn-blue triggerCompare" title="Compare Items">
                    <i class="fa fa-exchange"></i>
                    <span>Visit Checkout Page</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="qv-alert">
    <img src=/Duanmautemplate/assets/img/basic/shopping102.png" alt="" /> Product Added
    Successfully
</div>