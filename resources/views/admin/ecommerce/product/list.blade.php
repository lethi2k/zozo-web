@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Sản phẩm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Sản phẩm</li>
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

                        <h4 class="card-title">Bộ lọc sản phẩm</h4>
                        <p class="card-title-desc">Bạn có thể lọc thông tin sản phẩm qua Danh mục, Tên, Đơn hàng, Số lượng ....</p>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Từ khóa</label>
                                    <div class="col-md-10">
                                        <div class="d-flex ">
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
                                <div class="input-group mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Kho hàng</label>
                                    <div class="col-md-10">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <input type="number" class="form-control" id="formrow-max" placeholder="Tối thiểu">
                                            </div>
                                            <span class="mx-3 mt-2"> - </span>
                                            <div class="flex-grow-1 align-self-center">
                                                <input type="number" class="form-control" id="formrow-price" placeholder="Tối đa">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Danh mục</label>
                                    <div class="col-md-10">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <div class="input-group">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Đã bán</label>
                                    <div class="col-md-10">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <input type="number" class="form-control" id="formrow-max" placeholder="Tối thiểu">
                                            </div>
                                            <span class="mx-3 mt-2"> - </span>
                                            <div class="flex-grow-1 align-self-center">
                                                <input type="number" class="form-control" id="formrow-price" placeholder="Tối đa">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Tìm</button>
                            <button type="button" class="btn btn-outline-light waves-effect">Nhập lại</button>
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
                                <h4 class="card-title">1 sản phẩm</h4>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <a href="{{URL::asset('admin/product/add')}}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                        <i class="mdi mdi-plus me-1"></i> Thêm mới
                                    </a>

                                </div>
                            </div><!-- end col-->
                        </div>

                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab" aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Tất cả</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#sync-shopee" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Sản phẩm đồng bộ Shopee</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#sync-kiotviet" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Sản phẩm đồng bộ Kiot Viet</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3 text-muted">
                            <div class="tab-pane active" id="all" role="tabpanel">
                                @include('admin.ecommerce.product._table_tab')
                            </div>
                            <div class="tab-pane" id="sync-shopee" role="tabpanel">
                                @include('admin.ecommerce.product._table_tab')
                            </div>
                            <div class="tab-pane" id="sync-kiotviet" role="tabpanel">
                                @include('admin.ecommerce.product._table_tab')
                            </div>
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