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

        @include('admin.ecommerce.category.form',
        [
            'action' => action('App\Http\Controllers\Admin\Ecommerce\CategoryController@store'),
            'parents' => $parents,
            'parent_id' => 0,
            'sort_order' => null,
            'image' => null,
            'name' => null,
            'status' => 1,
            'description' => null,
            'meta_title' => null,
            'seo_url' => null,
            'meta_description' => null,
            'google_title' => 'Tiêu đề của danh mục trên Google',
            'google_url' => 'Đường dẫn của danh mục trên Google',
            'google_description' => 'Mô tả của danh mục trên Google',
        ])

    </div>
    @endsection

    @section('js')
    <script>
        var data = {
            _totken: '{{ csrf_token() }}',
        };
    </script>

    @include(
    'admin.ecommerce.category.js',
    ['url' => URL::asset('admin/category/ajax'), 'data' => "<script>
        data
    </script>"]
    )
    @endsection