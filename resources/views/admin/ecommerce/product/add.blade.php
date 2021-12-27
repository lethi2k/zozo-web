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
        <form action="" method="post" class="product-validation">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-sm-start">
                        <a href="{{URL::asset('admin/product/list/all')}}" class="btn btn-outline-secondary waves-effect waves-light mb-4 me-2 pe-4">
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
                            <h4 class="card-title">Thông tin cơ bản</h4>
                            <p class="card-title-desc">Fill all information below</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="ProductName" class="form-label">Tên sản phẩm</label>
                                        <input id="ProductName" name="product_name" type="text" class="form-control" placeholder="Product Name">
                                    </div>
                                    <div class="mb-3">
                                        <div class="float-start">
                                            <label for="manufacturername">Thương hiệu</label>
                                        </div>
                                        <div class="float-end">
                                            <a href="#" class="link-primary"><i class="bx bx-check-double"></i> quản lý thương hiệu</a>
                                        </div>
                                        <select class="form-control select2" id="manufacturer">
                                            <option value="">Lựa chọn thương hiệu</option>
                                            <optgroup label="Thêm mới">
                                                <option value="addManufacturer">Thêm mới thương hiệu</option>
                                            </optgroup>

                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label>Mô tả chi tiết</label>
                                        <textarea class="form-control" rows="5" placeholder="Product Description"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <div class="float-start">
                                            <label class="control-label">Danh mục</label>
                                        </div>
                                        <div class="float-end">
                                            <a href="#" class="link-primary"><i class="bx bx-check-double"></i> quản lý danh mục</a>
                                        </div>
                                        <!-- <select class="form-control select2" id="cateProduct">
                                            <option value="">Lựa chọn danh mục</option>
                                            <option value="addCategory">Thêm mới danh mục</option>
                                            <option value="FA">Fashion</option>
                                            <option value="EL">Electronic</option>
                                        </select> -->

                                        <select class="form-control select2" id="cateProduct">
                                            <option value="0">Lựa chọn danh mục</option>
                                            <optgroup label="Thêm mới">
                                                <option value="addCategory">Thêm mới danh mục</option>
                                            </optgroup>

                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="float-start">
                                            <label class="control-label">Từ khóa (tags)</label>
                                        </div>
                                        <div class="float-end">
                                            <a href="#" class="link-primary"><i class="bx bx-check-double"></i> quản lý tag</a>
                                        </div>

                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                            <option value="WI">Wireless</option>
                                            <option value="BE">Battery life</option>
                                            <option value="BA">Bass</option>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="productdesc">Mô tả ngắn</label>
                                        <textarea class="form-control" id="productdesc" rows="5" placeholder="Product Description"></textarea>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Quản lý hàng hóa</h4>
                            <p class="card-title-desc">Fill all information below</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">số lượng</label>
                                        <input id="quantity" name="quantity" type="number" class="form-control" placeholder="Product Name">
                                    </div>
                                    <div class="mb-3">
                                        <div class="float-start">
                                            <label class="control-label" for="store">Cửa hàng</label>
                                        </div>
                                        <div class="float-end">
                                            <a href="#" class="link-primary"><i class="bx bx-check-double"></i> quản lý cửa hàng</a>
                                        </div>
                                        <select id="store" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                            <option value="WI">zozo</option>
                                            <option value="BA">inet</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="cost" class="form-label">Giá nhập</label>
                                        <input id="cost" name="cost" type="number" class="form-control" placeholder="Giá nhập">
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-start">
                                            <label class="control-label" for="supplier">Nhà cung cấp</label>
                                        </div>
                                        <div class="float-end">
                                            <a href="#" class="link-primary"><i class="bx bx-check-double"></i> quản lý nhà cung cấp</a>
                                        </div>
                                        <select class="form-control select2" id="supplier">
                                            <option value="">Lựa chọn thương hiệu</option>
                                            <optgroup label="Thêm mới">
                                                <option value="addSupplier">Thêm mới thương hiệu</option>
                                            </optgroup>

                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Hình ảnh sản phẩm</h4>

                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thông số sản phẩm</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name">Tên thông số</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Giá trị</label>
                                </div>
                                <hr>
                            </div>
                            <form class="outer-repeater" enctype="multipart/form-data">

                                <div data-repeater-list="group-a">
                                    <div data-repeater-item="" class="row">
                                        <div class="mb-3 col-lg-6">
                                            <input type="text" id="name" name="group-a[0][untyped-input]" class="form-control" placeholder="Nhập tiêu đề vd: Thương hiệu">
                                        </div>

                                        <div class="mb-3 col-lg-5">
                                            <input type="email" id="email" class="form-control" placeholder="Nhập giá trị vd: Apple">
                                        </div>

                                        <div class="col-lg-1">
                                            <button data-repeater-delete="" type="button" class="btn btn-outline-light"><i class="bx bx-trash"></i></button>
                                        </div>
                                    </div>

                                </div>
                                <input data-repeater-create="" type="button" class="btn btn-outline-success mt-3 mt-lg-0" value="Thêm giá trị">
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Thông tin bán hàng</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="metatitle">Giá</label>
                                        <input id="metatitle" name="productname" type="text" class="form-control" placeholder="Metatitle">
                                    </div>
                                    <div class="mb-3">
                                        <label for="metakeywords">SKU</label>
                                        <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Meta Keywords">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="metakeywords">Giá Liêm yết</label>
                                        <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Meta Keywords">
                                    </div>
                                    <div class="mb-3">
                                        <label class="d-block mb-3">Trạng thái :</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="outer-group[0][inlineRadioOptions]" id="inlineRadio1" value="option1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Kinh doanh</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="outer-group[0][inlineRadioOptions]" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Ngừng kinh doanh</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">
                                    Phân loại hàng
                                </label>
                                <div class="col-md-10 mb-4">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <label for="name">Tên nhóm</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Giá trị</label>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="option-content">
                                        <div class="row">
                                            <div class="mb-3 col-lg-5">
                                                <input type="text" id="name" name="group-a[0][untyped-input]" class="form-control" placeholder="Màu sắc">
                                            </div>

                                            <div class="mb-3 col-lg-6 option-value">
                                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="WI">Đen</option>
                                                    <option value="BE">Đỏ</option>
                                                    <option value="BA">Trắng</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-1">
                                                <button type="button" class="btn btn-outline-light"><i class="bx bx-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" class="btn btn-outline-success inner add-option" value="Thêm nhóm phân loại">
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">
                                    Mua nhiều giảm giá
                                </label>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="name">Từ (sản phẩm)</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="email">Đến (sản phẩm)</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="email">Đơn Giá</label>
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
                                                                <input type="number" id="name" name="group-a[0][untyped-input]" class="form-control" placeholder="Số lượng tối thiểu">
                                                            </div>

                                                            <div class="mb-3 col-lg-4">
                                                                <input type="number" id="email" class="form-control" placeholder="Số lượng tối đa">
                                                            </div>

                                                            <div class="mb-3 col-lg-4">
                                                                <input type="number" id="email" class="form-control" placeholder="Khoảng giá">
                                                            </div>

                                                            <div class="col-lg-1">
                                                                <button data-repeater-delete="" type="button" class="btn btn-outline-light"><i class="bx bx-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input data-repeater-create="" type="button" class="btn btn-outline-success inner" value="Thêm khoảng giá">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Vận chuyển</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="metatitle">Cân nặng (Sau khi đóng gói)</label>
                                        <div class="input-group">
                                            <input id="metatitle" name="productname" type="text" class="form-control" placeholder="Metatitle">
                                            <button type="button" class="btn btn-secondary" disabled="">
                                                gr
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Dài</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="Pick a date" autocomplete="off">
                                            <button type="button" class="btn btn-secondary" disabled="">
                                                cm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Rộng</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="Pick a date" autocomplete="off">
                                            <button type="button" class="btn btn-secondary" disabled="">
                                                cm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Cao</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="Pick a date" autocomplete="off">
                                            <button type="button" class="btn btn-secondary" disabled="">
                                                cm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thông tin khác</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <div class="row">
                                <label for="example-text-input" class="col-md-2 col-form-label">
                                    Bảo hành
                                </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="metatitle">Xuất xứ</label>
                                            <input id="metatitle" name="productname" type="text" class="form-control" placeholder="Metatitle">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="metakeywords">Địa chỉ bảo hành</label>
                                            <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Meta Keywords">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="metatitle">Số điện thoại</label>
                                            <input id="metatitle" name="productname" type="text" class="form-control" placeholder="Metatitle">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="metakeywords">Số tháng bảo hành</label>
                                            <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Meta Keywords">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="metakeywords">Nội dung bảo hành</label>
                                            <textarea class="form-control" rows="5" placeholder="Product Description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="card-title">SEO</label>
                                    <p class="text-muted mb-1 text-truncate">Xem trước kết quả tìm kiếm:</p>
                                    <div class="content-seo">
                                        <h4 class="card-title google-title">Áo thun tay lỡ nam nữ form rộng chữ kiểu cá tính</h4>
                                        <p class="teaser google-url">http://default.exdomain.net/ao-thun-tay-lo-nam-nu-form-rong-chu-kieu-ca-tinh</p>
                                        <p class="teaser google-description">Mô tả của bài viết trên kết quả tìm kiếm trên Google.</p>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="formCheck1" checked>
                                    <label class="form-check-label" for="formCheck1">
                                        Chỉnh sửa Url
                                    </label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="option-date">
                                        <img src="{{URL::asset('admin/assets/images/flags/italy.jpg')}}" alt="" class="rounded avatar-seo">
                                    </span>
                                    <input type="text" class="form-control" name="date" value="ao-thun-tay-lo-nam-nu-form-rong-chu-kieu-ca-tinh" aria-describedby="option-date" placeholder="null">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@include('admin.ecommerce.product.modal')
@endsection
@section('js')
<script>
    //add product option variant
    $(document).ready(function() {
        $(".option-content").find("select").select2();
        $(".add-option").click(function() {
            $(".option-content")
                .find("select")

                // call destroy to revert the changes made by Select2
                .select2("destroy")
                .end()
                .append(

                    // clone the row and insert it in the DOM
                    $(".option-content")
                    .find(".row")
                    .first()
                    .clone()
                );

            // enable Select2 on the select elements
            $(".option-content").find("select").select2();
        });
    });

    //validate form
    $(document).ready(function() {
        $('.product-validation').validate({
            lang: 'vi', // or whatever language option you have.
            rules: {
                product_name: {
                    required: true,
                    minlength: 2,
                }
            }
        });
    });

    //change select 2
    $('#cateProduct').change(function() {
        var opval = $(this).val();
        if (opval == "addCategory") {
            if ($("#modalCategory").find("select").data('select2')) {
                $("#modalCategory")
                    .find("select")
                    .select2("destroy")
                    .end()
            }

            $('#modalCategory').modal("show")
        }
    });

    //close modal select 2
    $(".close-modal").click(function() {
        $("#cateProduct").val(0).trigger("change");
        $('#modalCategory').modal("hide")
    });
</script>
@endsection