@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Bài viết quan tâm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Bài viết quan tâm</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-0">

                            </div>
                            <div class="col-xxl-8 col-lg-12 mb-3">
                                <!-- <div class="d-md-flex flex-md-row-reverse flex-sm-column bd-highlight">

                                    <div class="mb-2 p-xxl-3 p-md-2 bd-highlight">
                                        <button type="button" class="btn btn-outline-light waves-effect"><i class="fa fa-fw fa-bars"></i></button>
                                    </div>

                                    <div class="p-xxl-3 p-md-2 bd-highlight">
                                        <button type="button" class="btn btn-outline-light waves-effect">Xuất dữ liệu</button>
                                    </div>


                                    <div class="p-xxl-3 p-md-2 bd-highlight row">
                                        <label for="example-text-input" class="col-md-3 col-form-label">Ngày Đặt hàng</label>
                                        <div class="col-md-9">
                                            <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="text" class="form-control" name="start" placeholder="Start Date">
                                                <input type="text" class="form-control" name="end" placeholder="End Date">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="input-group mb-3 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Ngày Đặt hàng</label>
                                    <div class="col-md-9">
                                        <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                            <input type="text" class="form-control" name="start" placeholder="Start Date">
                                            <input type="text" class="form-control" name="end" placeholder="End Date">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-md-10">
                                <div class="mb-3 row">
                                    <div class="d-flex col-md-12">
                                        <div class="w-25">
                                            <div class="input-group">
                                                <select class="rounded-end-none form-select">
                                                    <option>Tất cả</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-75 bd-highlight">
                                            <div class="search-product-right">
                                                <div class="position-relative">
                                                    <input type="text" class="rounded-start-none form-control" placeholder="Tìm kiếm">
                                                    <i class="bx bx-search-alt search-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-2">
                                <div class="d-flex flex-wrap gap-2 float-end">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Tìm kiếm</button>
                                    <button type="button" class="btn btn-outline-light waves-effect">Nhập lại</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <!-- <div class="search-box me-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <a href="{{URL::asset('admin/product/add')}}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                        <i class="mdi mdi-plus me-1"></i> Thêm mới
                                    </a>

                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-check">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;" class="align-middle">
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th class="align-middle">Tên Bài viết quan tâm</th>
                                        <th class="align-middle text-end">Trạng thái</th>
                                        <th class="align-middle text-end">Lượt xem</th>
                                        <th class="align-middle text-end">Danh mục</th>
                                        <th class="align-middle text-end">Tác giả</th>
                                        <th class="align-middle text-end">Ngày đăng</th>
                                        <th class="align-middle text-end">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                <label class="form-check-label" for="orderidcheck01"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex" style="align-items: center">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="rounded avatar-sm" src="{{URL::asset('admin/assets/images/users/avatar-3.jpg')}}" alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="text-body fw-bold font-size-14 my-1">Áo thun tay lỡ nam nữ form rộng chữ kiểu cá tính</h5>
                                                    <p class="text-muted mb-1">SKU: SPA</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Đánh giá">
                                                            <i class="bx bx-comment-dots me-1"></i> 183
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Lượt thích">
                                                            <i class="bx bx-heart"></i> 55
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                        <div class="form-switch form-switch-lg mb-3 text-end" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked="">
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            2.000
                                        </td>
                                        <td class="text-end">
                                            Thời trang
                                        </td>
                                        <td class="text-end">
                                            lê thi
                                        </td>
                                        <td class="text-end">
                                            20/12/2021
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 float-end">
                                                <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <i class="mdi mdi-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <i class="mdi mdi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
@endsection