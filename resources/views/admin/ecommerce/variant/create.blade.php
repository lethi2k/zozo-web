@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Thêm mới sản phẩm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <form method="post" action="{{$action}}" enctype="multipart/form-data" class="category-validation">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="text-sm-start">
                        <a href="{{URL::asset('admin/variant/list')}}" class="btn btn-outline-secondary waves-effect waves-light mb-4 me-2 pe-4">
                            <i class="bx bx-arrow-back me-1"></i> Trở lại
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-sm-end">
                        <button type="submit" class="btn btn-outline-success waves-effect">
                            <i class="bx bxs-save me-1"></i> Lưu thay đổi
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thông tin nhóm tùy chọn</h4>
                            <p class="card-title-desc">Thông số gồm các thuộc tính như màu sắc, kích thước ...</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="option_name">Tên tùy chọn</label>
                                        <input id="option_name" name="option_name" type="text" class="form-control" placeholder="nhập vào bắt buộc">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="control-label">Kiểu bấm</label>
                                        <select class="form-control select2">
                                            <option value="Radio">Radio</option>
                                            <option value="checkbox">Checkbox</option>
                                            <option value="select">select</option>
                                            <option value="text">Văn bản</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Giá trị thuộc tính</h4>
                            <p class="card-title-desc">các giá trị của nhóm vd: đen, đỏ, vàng ...</p>

                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="name">Tên Tùy chọn</label>
                                </div>
                                <div class="col-lg-4">
                                    <label for="email">Hình ảnh</label>
                                </div>
                                <div class="col-lg-3">
                                    <label for="email">Số thứ tự</label>
                                </div>
                                <hr>
                            </div>
                            <form class="outer-repeater">
                                <div data-repeater-list="outer-group" class="outer">
                                    <div data-repeater-item="" class="outer">
                                        <div class="inner-repeater mb-4">
                                            <div data-repeater-list="inner-group" class="inner mb-1">
                                                <div data-repeater-item="" class="row">
                                                    <div class="mb-3 col-lg-3">
                                                        <input type="text" id="name" name="option_description[name]" class="form-control" placeholder="Giá trị">
                                                    </div>

                                                    <div class="mb-3 col-lg-4">
                                                        <input type="file" id="image" class="form-control">
                                                    </div>

                                                    <div class="mb-3 col-lg-4">
                                                        <input type="number" id="sort_order" class="form-control">
                                                    </div>

                                                    <div class="col-lg-1">
                                                        <button data-repeater-delete="" type="button" class="btn btn-outline-light"><i class="bx bx-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <input data-repeater-create="" type="button" class="btn btn-outline-success inner" value="Thêm tùy chọn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div> <!-- container-fluid -->
</div>
@endsection