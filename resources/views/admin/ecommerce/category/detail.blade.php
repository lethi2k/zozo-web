@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Chi tiết sản phẩm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        @include('admin.ecommerce.category.form',
        [
            'action' => action('App\Http\Controllers\Admin\Ecommerce\CategoryController@update', ['id' => $category->category_id]),
            'parents' => $parents,
            'parent_id' => $category->parent_id,
            'sort_order' => $category->sort_order,
            'image' => $category->image,
            'name' => $category->description->name,
            'status' => $category->status,
            'description' => $category->description->description,
            'meta_title' => $category->description->meta_title,
            'seo_url' => $category->description->seo_url,
            'meta_description' => $category->description->meta_description,
            'google_title' => $category->description->meta_title,
            'google_url' => $category->description->seo_url,
            'google_description' => $category->description->meta_description,
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