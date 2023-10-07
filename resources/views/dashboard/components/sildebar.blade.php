<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>

    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ route('dashboard.index') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.user.index') }}">
                <i class='bx bxs-user'></i>
                <span class="text">User</span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.category.index') }}">
                <i class='bx bx-category'></i>
                <span class="text">Category</span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.product.index') }}">
                <i class='bx bxs-cart-add'></i>
                <span class="text">Product</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-message-dots'></i>
                <span class="text">Comment</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-cart-download'></i>
                <span class="text">Order</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-cylinder'></i>
                <span class="text">Warehouse</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class='bx bxl-paypal'></i>
                <span class="text">Pay</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-cable-car'><img style="height: 24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAbRJREFUSEvt1rFrFEEUx/FPRBEhYCEWikUaqxASrAQLjahRsFM7g/+CKSxjlLSi+QsE0VI7BUkMSexsRJHY2FiEIEICgpVEDC/M4WZv9+727pJr7sE2OzPvu+/3ezOzA3oUAz3i2k/wIRzDjyh2r8HDuJye83iEB3sBPo6JBLqEkzkrH3YLfARRyUVcxUhJz/zFB8zibTsVhzVnMvKdw+ES2Fe8wwKW8Ts7rxWPT+XkiwYpinUsJlDAdpqoLIrAgwh/avKdbrLlHuMpVqtszSw4muI+zuJASZJvmMcmptOc8SRlFe6u7RRtPpNb/TPJF14FcC2NX8BSN8H38D7TFF/wr6CUroJPYAN/MqDw9zqO5uBDuJPePcP33PgvvEZYUxiNuvoK3uBgJfP+T97CtaReXYpG4Je40Sa0tixy3CrK0Qgcmz5OpRWEp9lo5nGjtTt5+uCsnDW5PuNuTuoxPEnvpvApNz6H0RKbWpa6k/4q6o8+uE7Rmsd9qaso0FZzdePIfIWbVY/M23hepbyCuZN4URUc8+PHLs7r/LXY7HviWgyZP7ZzLTZL3tF4K3+ZHQHKFm8D4c9gH3guz7EAAAAASUVORK5CYII=" /></i>
                <span class="text">transport</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li class="logout">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class='bx bxs-log-out-circle'></i>
                {{ __('LOGOUT') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</section>

