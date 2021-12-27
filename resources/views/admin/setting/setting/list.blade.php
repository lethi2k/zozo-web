@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Cấu hình chung</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Cấu hình chung</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <h4 class="card-title">9 Cấu hình chung </h4>
                                <p class="card-title-desc mb-3">Danh sách Cấu hình chung trong hệ thống</p>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                        <i class="mdi mdi-plus me-1"></i> Thêm mới
                                    </button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs me-3">
                                                <img src="http://127.0.0.1:8000/admin/assets/images/brands/github.png" alt="Github">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-0">Cấu hình chung</h5>
                                                <p class="text-muted mb-0">Cấu hình thông tin chung cửa hàng của bạn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs me-3">
                                                <img src="http://127.0.0.1:8000/admin/assets/images/brands/github.png" alt="Github">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-0">Tài khoản</h5>
                                                <p class="text-muted mb-0">Quản lý tài khoản, nhóm tài khoản và phân quyền</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs me-3">
                                                <img src="http://127.0.0.1:8000/admin/assets/images/brands/github.png" alt="Github">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-0">Nhóm tài khoản</h5>
                                                <p class="text-muted mb-0">Quản lý nhóm quyền tài khoản</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs me-3">
                                                <img src="http://127.0.0.1:8000/admin/assets/images/brands/github.png" alt="Github">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-0">Nhóm phân công</h5>
                                                <p class="text-muted mb-0">Quản lý phân công tài khoản</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs me-3">
                                                <img src="http://127.0.0.1:8000/admin/assets/images/brands/github.png" alt="Github">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-0">Địa chỉ và kho hàng</h5>
                                                <p class="text-muted mb-0">Quản lý danh sách địa chỉ và kho hàng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs me-3">
                                                <img src="http://127.0.0.1:8000/admin/assets/images/brands/github.png" alt="Github">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-0">Vận chuyển</h5>
                                                <p class="text-muted mb-0">Quản lý, cấu hình phương thức vận chuyển</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
@endsection