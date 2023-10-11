document.addEventListener('DOMContentLoaded', function () {
    const radioButtons = document.querySelectorAll('input[name="brandFilter-radio"]');
    
    // Lọc sản phẩm dựa trên radio button được chọn
    function filterProducts(categoryId) {
        if (categoryId === 'all') {
            // Hiển thị tất cả sản phẩm 
            console.log('Hiển thị tất cả sản phẩm');
        } else {
            // Xử lý việc lọc sản phẩm dựa trên categoryId 
            console.log(`Lọc sản phẩm theo danh mục có ID: ${categoryId}`);
        }
    }

    // Thêm trình nghe sự kiện cho các nút radio
    radioButtons.forEach(function (radio) {
        radio.addEventListener('change', function () {
            filterProducts(radio.id);
        });
    });
});
