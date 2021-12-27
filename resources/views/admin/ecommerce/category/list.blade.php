@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Danh mục sản phẩm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Danh mục sản phẩm</li>
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
                            <div class="col-12 col-md-10 mb-2">
                                <div class="row">
                                    <div class="d-flex col-md-12">
                                        <div class="w-25">
                                            <div class="input-group">
                                                <select class="rounded-end-none form-select column-filter">
                                                    <option value="name">Tên</option>
                                                    <option value="user">Người tạo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-75 bd-highlight">
                                            <div class="search-product-right">
                                                <div class="position-relative">
                                                    <select class="rounded-start-none form-control select-category-ajax"></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-2">
                                <div class="d-flex flex-wrap gap-2 float-end">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="button-filter">Tìm kiếm</button>
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
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light mb-2">
                                        <i class="bx bx-transfer-alt"></i> Điều chỉnh thứ tự
                                    </button>
                                    <a href="{{URL::asset('admin/category/create')}}" class="btn btn-success waves-effect waves-light mb-2">
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
                                        <th class="align-middle">Tên danh mục</th>
                                        <th class="align-middle">Sản phẩm</th>
                                        <th>Trạng thái</th>
                                        <th>Người tạo</th>
                                        <th class="text-end">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($categories as $category)
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
                                                    <img class="rounded avatar-sm" src="{{URL::asset('admin/assets/images/default.png')}}" alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="text-body fw-bold font-size-14 my-1">{{$category->description->name}}</h5>
                                                    <p class="text-muted mb-1">STT: {{$category->sort_order}}</p>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            20
                                        </td>

                                        <td>
                                            <div class="form-switch form-switch-lg mb-3" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" @if($category->status == 1) checked @endif>
                                            </div>
                                        </td>
                                        <td>
                                            le thi
                                        </td>

                                        <td class="text-end">
                                            <div class="d-flex gap-3 float-end">
                                                <!-- <a href="{{action('App\Http\Controllers\Admin\Ecommerce\CategoryController@detail',['id' => $category->category_id]) }}" class="text-success"><i class="mdi mdi-eye-check font-size-18"></i></a> -->
                                                <a href="{{action('App\Http\Controllers\Admin\Ecommerce\CategoryController@edit',['id' => $category->category_id]) }}" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="{{action('App\Http\Controllers\Admin\Ecommerce\CategoryController@destroy',['id' => $category->category_id]) }}" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $categories->links('admin.vendor.pagination.custom') }}

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
@endsection

@section('js')
<script>
    var data = {
        _totken: '{{ csrf_token() }}',
        column: $('.column-filter').val()
    };
</script>
@include('admin.ecommerce.category.js', ['url' => URL::asset('admin/category/ajax'), 'data' => "<script>
    data
</script>"])
@endsection