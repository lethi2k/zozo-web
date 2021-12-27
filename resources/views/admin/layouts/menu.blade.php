<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Dashboard</li>

                <li>
                    <a href="{{URL::asset('admin/dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards">Ecommerce</span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::asset('admin/dashboard/blog')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">01</span>
                        <span key="t-dashboards">Blog</span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::asset('admin/dashboard/crm')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">02</span>
                        <span key="t-dashboards">Crm</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Thương mại điện tử</li>

                <!-- product -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-basket"></i>
                        <span key="t-product">Sản phẩm</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/product/list/all')}}" key="t-products">Tất cả sản phẩm</a></li>
                        <li><a href="{{URL::asset('admin/category/list')}}" key="t-product-detail">Danh mục</a></li>
                        <li><a href="{{URL::asset('admin/variant/list')}}" key="t-orders">Tùy Chọn</a></li>
                        <li><a href="{{URL::asset('admin/attribute/list')}}" key="t-orders">Thuộc tính</a></li>
                        <li><a href="{{URL::asset('admin/manufacturer/list')}}" key="t-customers">Nhà sản xuất</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-component"></i>
                        <span key="t-product">Kho hàng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/warehouse/list/all')}}" key="t-products">Quản lý kho</a></li>
                        <li><a href="{{URL::asset('admin/warehouse/import/list')}}" key="t-product-detail">Nhập kho</a></li>
                        <li><a href="{{URL::asset('admin/warehouse/export/list')}}" key="t-orders">Xuất kho</a></li>
                        <li><a href="{{URL::asset('admin/warehouse/cancel/list')}}" key="t-customers">Hủy hàng</a></li>
                        <li><a href="{{URL::asset('admin/warehouse/supplier/list')}}" key="t-cart">Nhà cung cấp</a></li>
                    </ul>
                </li>

                <!-- order -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-truck"></i>
                        <span key="t-shop">Vận chuyển</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/shipment/overview')}}" key="t-products">Tổng quan</a></li>
                        <li><a href="{{URL::asset('admin/shipment/list')}}" key="t-product-detail">Giao hàng</a></li>
                        <li><a href="{{URL::asset('admin/shipment/setting')}}" key="t-product-detail">Cài đặt vận chuyển</a></li>

                    </ul>
                </li>

                <!-- order -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-cart"></i>
                        <span key="t-shop">Đơn hàng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/order/list/all')}}" key="t-products">Tất cả</a></li>
                        <li><a href="{{URL::asset('admin/order/list/cancel')}}" key="t-product-detail">Đơn hủy</a></li>
                        <li><a href="{{URL::asset('admin/order/list/refund')}}" key="t-product-detail">Trả hàng/Hoàn tiền</a></li>
                    </ul>
                </li>

                <!-- order -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-discount"></i>
                        <span key="t-shop">Khuyến mãi</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/discount/portal')}}" key="t-products">Công cụ tạo mã</a></li>
                        <li><a href="{{URL::asset('admin/discount/list/all')}}" key="t-product-detail">Mã của tôi</a></li>

                    </ul>
                </li>

                <!-- order -->
                <li>
                    <a href="{{URL::asset('admin/datacenter/list/all')}}" class="waves-effect">
                        <i class="bx bx-chart"></i>
                        <span key="t-shop">Phân tích bán hàng</span>
                    </a>
                </li>

                <!-- order -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-shop">Khách hàng</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/contact/list/all')}}" key="t-products">Tất cả người dùng</a></li>
                        <li><a href="ecommerce-product-detail.html" key="t-product-detail">Góp ý</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Quản lý shop</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/store/list')}}" key="t-list-store">Danh sách cửa hàng</a></li>
                        <li><a href="{{URL::asset('admin/store/rating')}}" key="t-rating">Đánh giá</a></li>
                        <li><a href="ecommerce-product-detail.html" key="t-product-detail">Hồ sơ</a></li>
                        <li><a href="{{URL::asset('admin/store/report')}}" key="t-cart">Báo cáo</a></li>
                        <li><a href="ecommerce-cart.html" key="t-cart">Kết nối API</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Bài viết</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Tin tức</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/post/blog/list')}}" key="t-blog-list">Tất cả tin tức</a></li>
                        <li><a href="{{URL::asset('admin/post/category/list')}}" key="t-blog-grid">Danh mục tin tức</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-station"></i>
                        <span key="t-blog">Tương tác</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/post/interactive/list')}}" key="t-blog-list">Bài viết quan tâm</a></li>
                        <li><a href="blog-grid.html" key="t-blog-grid">Khách hàng đăng ký</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-blog">Tác giả</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/post/author/list')}}" key="t-blog-list">Danh sách tác giả</a></li>
                        <li><a href="{{URL::asset('admin/post/author/blog')}}" key="t-blog-grid">Quản lý bài đăng</a></li>
                    </ul>
                </li>

                <!-- order -->
                <li>
                    <a href="{{URL::asset('admin/post/report/list')}}" class="waves-effect">
                        <i class="bx bx-chart"></i>
                        <span key="t-shop">Báo cáo</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">CRM</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">Lịch</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/crm/calendar/tui')}}" key="t-tui-calendar">TUI Calendar</a></li>
                        <li><a href="{{URL::asset('admin/crm/calendar/full')}}" key="t-full-calendar">Full Calendar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Công việc</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/crm/task/list')}}" key="t-task-list">Danh sách công việc</a></li>
                        <li><a href="{{URL::asset('admin/crm/task/kanban')}}" key="t-kanban-board">Kanban</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Dự án</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/crm/project/overview')}}" key="t-p-overview">Tổng quan dự án</a></li>
                        <li><a href="{{URL::asset('admin/crm/project/list')}}" key="t-p-list">Danh sách dự án</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Nhân viên</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/crm/staff/list')}}" key="t-blog-list">Tất cả nhân viên</a></li>
                        <li><a href="blog-grid.html" key="t-blog-grid">Cộng tác viên</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{URL::asset('admin/crm/email/list')}}" key="t-inbox">Hòm thư đến</a></li>
                        <li><a href="email-read.html" key="t-read-email">Email đã gửi</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge rounded-pill badge-soft-success float-end" key="t-new">New</span>
                                <span key="t-email-templates">Mẫu Email</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Tương tác</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-comment-detail"></i>
                        <span key="t-file-manager">Bình luận</span>
                    </a>

                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="email-template-basic.html" key="t-basic-action">Bài viết</a></li>
                        <li><a href="email-template-alert.html" key="t-alert-email">Sản phẩm</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Tài chính</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-file-manager">Doanh Thu</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-wallet-alt"></i>
                        <span key="t-file-manager">Số dư</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-credit-card-alt"></i>
                        <span key="t-file-manager">Ngân hàng liên kết</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span key="t-file-manager">Thiết lập thanh toán</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Bố cục</li>
                <li>
                    <a href="apps-filemanager.html" class="waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-file-manager">Tùy chỉnh website</span>
                    </a>
                </li>
                <li>
                    <a href="apps-filemanager.html" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-file-manager">Tùy chỉnh css</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Cấu hình</li>
                <li>
                    <a href="{{URL::asset('admin/setting/setting/list')}}" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-file-manager">Cài đặt hệ thống</span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::asset('admin/setting/application/list')}}" class="waves-effect">
                        <i class="bx bxs-widget"></i>
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <span key="t-file-manager">Ứng dụng</span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::asset('admin/setting/file/list')}}" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-file-manager">File Manager</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->