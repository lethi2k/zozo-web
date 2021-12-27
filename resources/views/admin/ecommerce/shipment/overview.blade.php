@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Tổng quan vận chuyển</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Vận chuyển</li>
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
                        <div class="row">
                            <h4 class="card-title">Thống kê vận chuyển </h4>
                            <p class="card-title-desc mb-3">Thống kê đơn hàng vận chuyển</p>

                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Chưa vận chuyển</p>
                                                <h4 class="mb-1">10 Đơn <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span>
                                                    <span class="ms-2 text-truncate">Từ kì trước</span>
                                                </div>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Giao không gặp khách</p>
                                                <h4 class="mb-1">20 Đơn <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span>
                                                    <span class="ms-2 text-truncate">Từ kì trước</span>
                                                </div>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Chờ chuyển hoàn</p>
                                                <h4 class="mb-1">100 Đơn <i class="mdi mdi-chevron-down ms-1 text-warning"></i></h4>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-warning font-size-12"> - 2% </span>
                                                    <span class="ms-2 text-truncate">Từ kì trước</span>
                                                </div>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Đã giao chưa nhận</p>
                                                <h4 class="mb-1">200.000.000.đ <i class="mdi mdi-chevron-down ms-1 text-warning"></i></h4>
                                                <p class="text-muted mb-1 text-truncate">20 đơn</p>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-warning font-size-12"> - 0.2% </span> 
                                                    <span class="ms-2 text-truncate">Từ kì trước</span>
                                                </div>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-money font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Đã đối xoát chưa nhận</p>
                                                <h4 class="mb-1">200.000.000.đ <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                                <p class="text-muted mb-1 text-truncate">10 đơn</p>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> 
                                                    <span class="ms-2 text-truncate">Từ kì trước</span>
                                                </div>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-money font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Tổng đơn đã chuyển thành công</p>
                                                <h4 class="mb-1">1.200.000.000.đ <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                                <p class="text-muted mb-1 text-truncate">120 đơn</p>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-success font-size-12"> + 12% </span> 
                                                    <span class="ms-2 text-truncate">Từ kì trước</span>
                                                </div>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-money font-size-24"></i>
                                                    </span>
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
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
@endsection