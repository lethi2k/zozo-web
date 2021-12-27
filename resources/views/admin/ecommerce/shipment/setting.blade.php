@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Cài đặt vận chuyển</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Cài đặt vận chuyển</li>
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
                                <h4 class="card-title">Cài Đặt Vận Chuyển</h4>
                                <p class="text-muted mb-0">Thiết lập vận chuyển.</p>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                        <i class="mdi mdi-plus me-1"></i> Thêm mới
                                    </button>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <hr>

                        <div class="content-express mb-3">
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <h4 class="card-title">Hoả Tốc</h4>
                                    <p class="text-muted mb-0">Khi lựa chọn những phương thức vận chuyển được Shopee hỗ trợ, Người mua sẽ được cập nhật liên tục về trạng thái đơn hàng..</p>
                                </div>

                                <div class="col-sm-4">
                                    <div class="text-sm-end">
                                        <button class="btn btn-outline-light waves-effect" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExpress" aria-expanded="true" aria-controls="collapseExpress">
                                            Thu gọn <i class="bx bx-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse show" id="collapseExpress">
                                <div class="card shadow-none card-body text-muted mb-0">
                                    <div class="row">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-dark">Shopee Express Instant</label>
                                        <div class="col-md-10">
                                            <div class="form-switch form-switch-lg text-end" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked="">
                                                <i class="bx bx-chevron-down" data-bs-toggle="collapse" data-bs-target="#collapseExpressLT" aria-expanded="true" aria-controls="collapseExpressLT"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse" id="collapseExpressLT">
                                        <p class="text-muted mb-1">Thông tin về 'Shopee Express Instant'</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30kg/đơn hàng, kích thước mỗi chiều không quá 60cm'</p>
                                        <p class="text-muted mb-1">Giá trị đơn hàng tối đa: 03 triệu đồng</p>
                                        <p class="text-muted mb-1">Thời gian hoạt động: Thứ Hai-Chủ Nhật</p>
                                        <p class="text-muted mb-1">Lưu ý: vui lòng xác định vị trí lấy hàng trên bản đồ khi bật kênh vận chuyển này</p>
                                        <p class="text-muted mb-1">Giới hạn vận chuyển</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30000g</p>
                                        <p class="text-muted mb-0">Cân nặng tối thiểu: 10g</p>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-dark">GrabExpress</label>
                                        <div class="col-md-10">
                                            <div class="form-switch form-switch-lg text-end" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" >
                                                <i class="bx bx-chevron-down" data-bs-toggle="collapse" data-bs-target="#collapseExpressGrap" aria-expanded="true" aria-controls="collapseExpressGrap"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse" id="collapseExpressGrap">
                                        <p class="text-muted mb-1">Thông tin về 'Shopee Express Instant'</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30kg/đơn hàng, kích thước mỗi chiều không quá 60cm'</p>
                                        <p class="text-muted mb-1">Giá trị đơn hàng tối đa: 03 triệu đồng</p>
                                        <p class="text-muted mb-1">Thời gian hoạt động: Thứ Hai-Chủ Nhật</p>
                                        <p class="text-muted mb-1">Lưu ý: vui lòng xác định vị trí lấy hàng trên bản đồ khi bật kênh vận chuyển này</p>
                                        <p class="text-muted mb-1">Giới hạn vận chuyển</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30000g</p>
                                        <p class="text-muted mb-0">Cân nặng tối thiểu: 10g</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="content-fast mb-3">
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <h4 class="card-title">Nhanh</h4>
                                    <p class="text-muted mb-0">Khi lựa chọn những phương thức vận chuyển được Shopee hỗ trợ, Người mua sẽ được cập nhật liên tục về trạng thái đơn hàng..</p>
                                </div>

                                <div class="col-sm-4">
                                    <div class="text-sm-end">
                                        <button class="btn btn-outline-light waves-effect" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExpress" aria-expanded="true" aria-controls="collapseExpress">
                                            Thu gọn <i class="bx bx-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse show" id="collapseExpress">
                                <div class="card shadow-none card-body text-muted mb-0">
                                    <div class="row">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-dark">BEST Express</label>
                                        <div class="col-md-10">
                                            <div class="form-switch form-switch-lg text-end" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg">
                                                <i class="bx bx-chevron-down" data-bs-toggle="collapse" data-bs-target="#collapseExpressBest" aria-expanded="true" aria-controls="collapseExpressBest"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse" id="collapseExpressBest">
                                        <p class="text-muted mb-1">Thông tin về 'Shopee Express Instant'</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30kg/đơn hàng, kích thước mỗi chiều không quá 60cm'</p>
                                        <p class="text-muted mb-1">Giá trị đơn hàng tối đa: 03 triệu đồng</p>
                                        <p class="text-muted mb-1">Thời gian hoạt động: Thứ Hai-Chủ Nhật</p>
                                        <p class="text-muted mb-1">Lưu ý: vui lòng xác định vị trí lấy hàng trên bản đồ khi bật kênh vận chuyển này</p>
                                        <p class="text-muted mb-1">Giới hạn vận chuyển</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30000g</p>
                                        <p class="text-muted mb-0">Cân nặng tối thiểu: 10g</p>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-dark">Giao Hàng Nhanh</label>
                                        <div class="col-md-10">
                                            <div class="form-switch form-switch-lg text-end" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg"  >
                                                <i class="bx bx-chevron-down" data-bs-toggle="collapse" data-bs-target="#collapseExpressFast" aria-expanded="true" aria-controls="collapseExpressFast"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse" id="collapseExpressFast">
                                        <p class="text-muted mb-1">Thông tin về 'Shopee Express Instant'</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30kg/đơn hàng, kích thước mỗi chiều không quá 60cm'</p>
                                        <p class="text-muted mb-1">Giá trị đơn hàng tối đa: 03 triệu đồng</p>
                                        <p class="text-muted mb-1">Thời gian hoạt động: Thứ Hai-Chủ Nhật</p>
                                        <p class="text-muted mb-1">Lưu ý: vui lòng xác định vị trí lấy hàng trên bản đồ khi bật kênh vận chuyển này</p>
                                        <p class="text-muted mb-1">Giới hạn vận chuyển</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30000g</p>
                                        <p class="text-muted mb-0">Cân nặng tối thiểu: 10g</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="content-economical">
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <h4 class="card-title">Tiết kiệm</h4>
                                    <p class="text-muted mb-0">Khi lựa chọn những phương thức vận chuyển được Shopee hỗ trợ, Người mua sẽ được cập nhật liên tục về trạng thái đơn hàng..</p>
                                </div>

                                <div class="col-sm-4">
                                    <div class="text-sm-end">
                                        <button class="btn btn-outline-light waves-effect" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExpress" aria-expanded="true" aria-controls="collapseExpress">
                                            Thu gọn <i class="bx bx-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse show" id="collapseExpress">
                                <div class="card shadow-none card-body text-muted mb-0">
                                    <div class="row">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-dark">VNPost Tiết Kiệm</label>
                                        <div class="col-md-10">
                                            <div class="form-switch form-switch-lg text-end" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked="">
                                                <i class="bx bx-chevron-down" data-bs-toggle="collapse" data-bs-target="#collapseExpressVNPost" aria-expanded="true" aria-controls="collapseExpressVNPost"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse" id="collapseExpressVNPost">
                                        <p class="text-muted mb-1">Thông tin về 'Shopee Express Instant'</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30kg/đơn hàng, kích thước mỗi chiều không quá 60cm'</p>
                                        <p class="text-muted mb-1">Giá trị đơn hàng tối đa: 03 triệu đồng</p>
                                        <p class="text-muted mb-1">Thời gian hoạt động: Thứ Hai-Chủ Nhật</p>
                                        <p class="text-muted mb-1">Lưu ý: vui lòng xác định vị trí lấy hàng trên bản đồ khi bật kênh vận chuyển này</p>
                                        <p class="text-muted mb-1">Giới hạn vận chuyển</p>
                                        <p class="text-muted mb-1">Khối lượng tối đa: 30000g</p>
                                        <p class="text-muted mb-0">Cân nặng tối thiểu: 10g</p>
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