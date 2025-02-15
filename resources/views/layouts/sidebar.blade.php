<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @if (auth()->guard('admin')->check())
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif

        @if (auth()->guard('merchant')->check())
            <li class="nav-item">
                <a class="nav-link " href="{{ route('merchant.store-list.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Store</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('merchant.store-category.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Store Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('merchant.product-list.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Product</span>
                </a>
            </li>
        @endif
    </ul>

</aside><!-- End Sidebar-->
