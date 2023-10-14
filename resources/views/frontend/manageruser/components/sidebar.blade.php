<aside class="sidebar">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
        <li><a href="#">Quản lí tài khoản</a></li>

    </ul>
    <div class="wrap_user">
        <div class="icon_user"></div>
        <span class="name_user">{{auth()->user()->name}}</span>
    </div>
    <ul class="customeField clearfix">
        <ul class="customeField clearfix">
            <li>
                <input name="brandFilter-radio" id="pcheck1" class="required-check" type="radio">
                <label for="pcheck1" style="font-size: 20px">
                    <i class="fa-solid fa-user"></i>
                    Thông tin tài khoản
                    <span><i></i></span>
                </label>
            </li>
            <li>
                <input name="brandFilter-radio" id="pcheck2" class="required-check" type="radio">
                <label for="pcheck2" style="font-size: 20px">
                    <i class="fa-solid fa-box"></i>
                    Đơn hàng của bạn
                    <span><i></i></span>
                </label>
            </li>
            <li>
                <input name="brandFilter-radio" id="pcheck3" class="required-check" type="radio">
                <label for="pcheck3" style="font-size: 20px">
                    <i class="fa-solid fa-location-dot"></i>
                    Quản lí số địa chỉ
                    <span><i></i></span>
                </label>
            </li>
            <li>
                <input name="brandFilter-radio" id="pcheck4" class="required-check" type="radio">
                <label for="pcheck4" style="font-size: 20px">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Đăng xuất
                    <span><i></i></span>
                </label>
            </li>
            <!-- Các radio input và mục khác tương tự -->
        </ul>

    </ul>

</aside>



<!-- Script JavaScript để xử lý sự kiện chọn radio -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="brandFilter-radio"]').change(function() {
            var selectedRadio = $(this).attr('id'); // Lấy id của radio được chọn
            switch (selectedRadio) {
                case 'pcheck1':
                    window.location.href = "{{ route('manageruser') }}";
                    break;
                case 'pcheck2':
                    window.location.href = "{{ route('manageroder') }}";
                    break;
                case 'pcheck3':
                    window.location.href = "{{ route('manageraddress') }}";
                    break;
                case 'pcheck4':
                    window.location.href = "";
                    break;
                // Thêm các case cho các radio input khác
                default:
                    break;
            }
        });
    });
</script>
