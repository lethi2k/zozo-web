@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Cửa hàng</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                            <li class="breadcrumb-item active">Cửa hàng</li>
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
                            <h4 class="card-title">9 Cửa hàng </h4>
                            <p class="card-title-desc mb-3">Danh sách cửa hàng trong hệ thống</p>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        B
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Brendle's</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>112</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$13,575</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-16">
                                                        T
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Tech Hifi</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>104</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$11,145</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-danger bg-soft text-danger font-size-16">
                                                        L
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Lafayette</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>126</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$12,356</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-success bg-soft text-success font-size-16">
                                                        P
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Packer</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>102</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$11,228</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-info bg-soft text-info font-size-16">
                                                        N
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Nedick's</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>96</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$9,235</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-dark bg-soft text-dark text-light font-size-16">
                                                        H
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Hudson's</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>120</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$14,794</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-dark bg-soft text-dark text-light font-size-16">
                                                        T
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Tech Hifi</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>104</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$11,145</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        B
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Brendle's</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>112</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$13,575</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="text-center p-4 border-end">
                                                <div class=" avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-success bg-soft text-success font-size-16">
                                                        L
                                                    </span>
                                                </div>
                                                <h5 class="text-truncate pb-1">Lafayette</h5>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="p-4 text-center text-xl-start">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Products</p>
                                                            <h5>126</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                                            <h5>$12,356</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="text-decoration-underline text-reset">See Profile <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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