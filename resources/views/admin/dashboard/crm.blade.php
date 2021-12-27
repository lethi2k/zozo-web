@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Saas</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Saas</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="{{URL::asset('admin/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="text-muted">
                                            <p class="mb-2">Welcome to Skote Dashboard</p>
                                            <h5 class="mb-1">Henry wells</h5>
                                            <p class="mb-0">UI / UX Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 align-self-center">
                                <div class="text-lg-center mt-4 mt-lg-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Total Projects</p>
                                                <h5 class="mb-0">48</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Projects</p>
                                                <h5 class="mb-0">40</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Clients</p>
                                                <h5 class="mb-0">18</h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="clearfix mt-4 mt-lg-0">
                                    <div class="dropdown float-end">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bxs-cog align-middle me-1"></i> Setting
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card bg-primary bg-soft">
                    <div>
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Skote Saas Dashboard</p>

                                    <ul class="ps-3 mb-0">
                                        <li class="py-1">7 + Layouts</li>
                                        <li class="py-1">Multiple apps</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{URL::asset('admin/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                            <i class="bx bx-copy-alt"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Orders</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>1,452 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                    <div class="d-flex">
                                        <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                            <i class="bx bx-archive-in"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Revenue</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>$ 28,452 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                    <div class="d-flex">
                                        <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                            <i class="bx bx-purchase-tag-alt"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Average Price</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>$ 16.2 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                    <div class="d-flex">
                                        <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">From previous period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-end">
                                <div class="input-group input-group-sm">
                                    <select class="form-select form-select-sm">
                                        <option value="JA" selected="">Jan</option>
                                        <option value="DE">Dec</option>
                                        <option value="NO">Nov</option>
                                        <option value="OC">Oct</option>
                                    </select>
                                    <label class="input-group-text">Month</label>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Earning</h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-muted">
                                    <div class="mb-4">
                                        <p>This month</p>
                                        <h4>$2453.35</h4>
                                        <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> From previous period</div>
                                    </div>

                                    <div>
                                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Details <i class="mdi mdi-chevron-right ms-1"></i></a>
                                    </div>

                                    <div class="mt-4">
                                        <p class="mb-2">Last month</p>
                                        <h5>$2281.04</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div id="line-chart" class="apex-charts" dir="ltr" style="min-height: 335px;">
                                    <div id="apexchartslz5mb986g" class="apexcharts-canvas apexchartslz5mb986g apexcharts-theme-light" style="width: 673px; height: 320px;"><svg id="SvgjsSvg1440" width="673" height="320" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1442" class="apexcharts-inner apexcharts-graphical" transform="translate(40.92999267578125, 30)">
                                                <defs id="SvgjsDefs1441">
                                                    <clipPath id="gridRectMasklz5mb986g">
                                                        <rect id="SvgjsRect1448" width="629.0700073242188" height="250.49400000000003" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMasklz5mb986g">
                                                        <rect id="SvgjsRect1449" width="626.0700073242188" height="251.49400000000003" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1455" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1456" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1456Out" in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1457" in="SvgjsFeFlood1456Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1457Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1458" dx="7" dy="18" result="SvgjsFeOffset1458Out" in="SvgjsFeComposite1457Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1459" stdDeviation="8 " result="SvgjsFeGaussianBlur1459Out" in="SvgjsFeOffset1458Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1460" result="SvgjsFeMerge1460Out" in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1461" in="SvgjsFeGaussianBlur1459Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1462" in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1463" in="SourceGraphic" in2="SvgjsFeMerge1460Out" mode="normal" result="SvgjsFeBlend1463Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1447" x1="0" y1="0" x2="0" y2="247.49400000000003" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="247.49400000000003" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1464" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1465" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1467" font-family="Helvetica, Arial, sans-serif" x="0" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1468">1</tspan>
                                                            <title>1</title>
                                                        </text><text id="SvgjsText1470" font-family="Helvetica, Arial, sans-serif" x="56.55181884765625" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1471">2</tspan>
                                                            <title>2</title>
                                                        </text><text id="SvgjsText1473" font-family="Helvetica, Arial, sans-serif" x="113.1036376953125" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1474">3</tspan>
                                                            <title>3</title>
                                                        </text><text id="SvgjsText1476" font-family="Helvetica, Arial, sans-serif" x="169.65545654296875" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1477">4</tspan>
                                                            <title>4</title>
                                                        </text><text id="SvgjsText1479" font-family="Helvetica, Arial, sans-serif" x="226.207275390625" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1480">5</tspan>
                                                            <title>5</title>
                                                        </text><text id="SvgjsText1482" font-family="Helvetica, Arial, sans-serif" x="282.75909423828125" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1483">6</tspan>
                                                            <title>6</title>
                                                        </text><text id="SvgjsText1485" font-family="Helvetica, Arial, sans-serif" x="339.3109130859375" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1486">7</tspan>
                                                            <title>7</title>
                                                        </text><text id="SvgjsText1488" font-family="Helvetica, Arial, sans-serif" x="395.86273193359375" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1489">8</tspan>
                                                            <title>8</title>
                                                        </text><text id="SvgjsText1491" font-family="Helvetica, Arial, sans-serif" x="452.41455078125" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1492">9</tspan>
                                                            <title>9</title>
                                                        </text><text id="SvgjsText1494" font-family="Helvetica, Arial, sans-serif" x="508.96636962890625" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1495">10</tspan>
                                                            <title>10</title>
                                                        </text><text id="SvgjsText1497" font-family="Helvetica, Arial, sans-serif" x="565.5181884765625" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1498">11</tspan>
                                                            <title>11</title>
                                                        </text><text id="SvgjsText1500" font-family="Helvetica, Arial, sans-serif" x="622.0700073242188" y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1501">12</tspan>
                                                            <title>12</title>
                                                        </text></g>
                                                    <line id="SvgjsLine1502" x1="0" y1="248.49400000000003" x2="622.0700073242188" y2="248.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                                </g>
                                                <g id="SvgjsG1521" class="apexcharts-grid">
                                                    <g id="SvgjsG1522" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1536" x1="0" y1="0" x2="622.0700073242188" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1537" x1="0" y1="35.35628571428572" x2="622.0700073242188" y2="35.35628571428572" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1538" x1="0" y1="70.71257142857144" x2="622.0700073242188" y2="70.71257142857144" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1539" x1="0" y1="106.06885714285715" x2="622.0700073242188" y2="106.06885714285715" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1540" x1="0" y1="141.42514285714287" x2="622.0700073242188" y2="141.42514285714287" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1541" x1="0" y1="176.7814285714286" x2="622.0700073242188" y2="176.7814285714286" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1542" x1="0" y1="212.1377142857143" x2="622.0700073242188" y2="212.1377142857143" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1543" x1="0" y1="247.49400000000003" x2="622.0700073242188" y2="247.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1523" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1524" x1="0" y1="248.49400000000003" x2="0" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1525" x1="56.55181884765625" y1="248.49400000000003" x2="56.55181884765625" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1526" x1="113.1036376953125" y1="248.49400000000003" x2="113.1036376953125" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1527" x1="169.65545654296875" y1="248.49400000000003" x2="169.65545654296875" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1528" x1="226.207275390625" y1="248.49400000000003" x2="226.207275390625" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1529" x1="282.75909423828125" y1="248.49400000000003" x2="282.75909423828125" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1530" x1="339.3109130859375" y1="248.49400000000003" x2="339.3109130859375" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1531" x1="395.86273193359375" y1="248.49400000000003" x2="395.86273193359375" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1532" x1="452.41455078125" y1="248.49400000000003" x2="452.41455078125" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1533" x1="508.96636962890625" y1="248.49400000000003" x2="508.96636962890625" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1534" x1="565.5181884765625" y1="248.49400000000003" x2="565.5181884765625" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1535" x1="622.0700073242188" y1="248.49400000000003" x2="622.0700073242188" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1545" x1="0" y1="247.49400000000003" x2="622.0700073242188" y2="247.49400000000003" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1544" x1="0" y1="1" x2="0" y2="247.49400000000003" stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1450" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1451" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1454" d="M 0 208.60208571428575C 19.793136596679688 208.60208571428575 36.75868225097656 176.7814285714286 56.55181884765625 176.7814285714286C 76.34495544433594 176.7814285714286 93.31050109863281 190.9239428571429 113.1036376953125 190.9239428571429C 132.8967742919922 190.9239428571429 149.86231994628906 137.88951428571428 169.65545654296875 137.88951428571428C 189.44859313964844 137.88951428571428 206.4141387939453 144.96077142857143 226.207275390625 144.96077142857143C 246.0004119873047 144.96077142857143 262.96595764160156 63.64131428571429 282.75909423828125 63.64131428571429C 302.55223083496094 63.64131428571429 319.5177764892578 74.2482 339.3109130859375 74.2482C 359.1040496826172 74.2482 376.06959533691406 120.21137142857143 395.86273193359375 120.21137142857143C 415.65586853027344 120.21137142857143 432.6214141845703 77.78382857142859 452.41455078125 77.78382857142859C 472.2076873779297 77.78382857142859 489.17323303222656 28.28502857142854 508.96636962890625 28.28502857142854C 528.7595062255859 28.28502857142854 545.7250518798828 77.78382857142859 565.5181884765625 77.78382857142859C 585.3113250732422 77.78382857142859 602.2768707275391 49.49880000000002 622.0700073242188 49.49880000000002" fill="none" fill-opacity="1" stroke="rgba(85,110,230,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasklz5mb986g)" filter="url(#SvgjsFilter1455)" pathTo="M 0 208.60208571428575C 19.793136596679688 208.60208571428575 36.75868225097656 176.7814285714286 56.55181884765625 176.7814285714286C 76.34495544433594 176.7814285714286 93.31050109863281 190.9239428571429 113.1036376953125 190.9239428571429C 132.8967742919922 190.9239428571429 149.86231994628906 137.88951428571428 169.65545654296875 137.88951428571428C 189.44859313964844 137.88951428571428 206.4141387939453 144.96077142857143 226.207275390625 144.96077142857143C 246.0004119873047 144.96077142857143 262.96595764160156 63.64131428571429 282.75909423828125 63.64131428571429C 302.55223083496094 63.64131428571429 319.5177764892578 74.2482 339.3109130859375 74.2482C 359.1040496826172 74.2482 376.06959533691406 120.21137142857143 395.86273193359375 120.21137142857143C 415.65586853027344 120.21137142857143 432.6214141845703 77.78382857142859 452.41455078125 77.78382857142859C 472.2076873779297 77.78382857142859 489.17323303222656 28.28502857142854 508.96636962890625 28.28502857142854C 528.7595062255859 28.28502857142854 545.7250518798828 77.78382857142859 565.5181884765625 77.78382857142859C 585.3113250732422 77.78382857142859 602.2768707275391 49.49880000000002 622.0700073242188 49.49880000000002" pathFrom="M -1 318.20657142857146L -1 318.20657142857146L 56.55181884765625 318.20657142857146L 113.1036376953125 318.20657142857146L 169.65545654296875 318.20657142857146L 226.207275390625 318.20657142857146L 282.75909423828125 318.20657142857146L 339.3109130859375 318.20657142857146L 395.86273193359375 318.20657142857146L 452.41455078125 318.20657142857146L 508.96636962890625 318.20657142857146L 565.5181884765625 318.20657142857146L 622.0700073242188 318.20657142857146"></path>
                                                        <g id="SvgjsG1452" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1551" r="0" cx="0" cy="0" class="apexcharts-marker wc26megwc no-pointer-events" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1453" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1546" x1="0" y1="0" x2="622.0700073242188" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1547" x1="0" y1="0" x2="622.0700073242188" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1548" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1549" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1550" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1552" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1553" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1446" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1503" class="apexcharts-yaxis" rel="0" transform="translate(10.92999267578125, 0)">
                                                <g id="SvgjsG1504" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1505" font-family="Helvetica, Arial, sans-serif" x="20" y="31.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1506">90</tspan>
                                                    </text><text id="SvgjsText1507" font-family="Helvetica, Arial, sans-serif" x="20" y="67.05628571428572" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1508">80</tspan>
                                                    </text><text id="SvgjsText1509" font-family="Helvetica, Arial, sans-serif" x="20" y="102.41257142857144" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1510">70</tspan>
                                                    </text><text id="SvgjsText1511" font-family="Helvetica, Arial, sans-serif" x="20" y="137.76885714285714" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1512">60</tspan>
                                                    </text><text id="SvgjsText1513" font-family="Helvetica, Arial, sans-serif" x="20" y="173.12514285714286" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1514">50</tspan>
                                                    </text><text id="SvgjsText1515" font-family="Helvetica, Arial, sans-serif" x="20" y="208.48142857142858" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1516">40</tspan>
                                                    </text><text id="SvgjsText1517" font-family="Helvetica, Arial, sans-serif" x="20" y="243.8377142857143" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1518">30</tspan>
                                                    </text><text id="SvgjsText1519" font-family="Helvetica, Arial, sans-serif" x="20" y="279.194" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1520">20</tspan>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1443" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 160px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 110, 230);"></span>
                                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 698px; height: 321px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sales Analytics</h4>

                        <div style="position: relative;">
                            <div id="donut-chart" class="apex-charts" style="min-height: 240.7px;">
                                <div id="apexchartsnb9c5z5kj" class="apexcharts-canvas apexchartsnb9c5z5kj apexcharts-theme-light" style="width: 479px; height: 240.7px;"><svg id="SvgjsSvg1554" width="479" height="240.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1556" class="apexcharts-inner apexcharts-graphical" transform="translate(121.5, 0)">
                                            <defs id="SvgjsDefs1555">
                                                <clipPath id="gridRectMasknb9c5z5kj">
                                                    <rect id="SvgjsRect1558" width="244" height="262" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMasknb9c5z5kj">
                                                    <rect id="SvgjsRect1559" width="242" height="264" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter1568" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1569" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1569Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1570" in="SvgjsFeFlood1569Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1570Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1571" dx="1" dy="1" result="SvgjsFeOffset1571Out" in="SvgjsFeComposite1570Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1572" stdDeviation="1 " result="SvgjsFeGaussianBlur1572Out" in="SvgjsFeOffset1571Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1573" result="SvgjsFeMerge1573Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1574" in="SvgjsFeGaussianBlur1572Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1575" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1576" in="SourceGraphic" in2="SvgjsFeMerge1573Out" mode="normal" result="SvgjsFeBlend1576Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter1581" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1582" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1582Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1583" in="SvgjsFeFlood1582Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1583Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1584" dx="1" dy="1" result="SvgjsFeOffset1584Out" in="SvgjsFeComposite1583Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1585" stdDeviation="1 " result="SvgjsFeGaussianBlur1585Out" in="SvgjsFeOffset1584Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1586" result="SvgjsFeMerge1586Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1587" in="SvgjsFeGaussianBlur1585Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1588" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1589" in="SourceGraphic" in2="SvgjsFeMerge1586Out" mode="normal" result="SvgjsFeBlend1589Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter1594" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1595" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1595Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1596" in="SvgjsFeFlood1595Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1596Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1597" dx="1" dy="1" result="SvgjsFeOffset1597Out" in="SvgjsFeComposite1596Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1598" stdDeviation="1 " result="SvgjsFeGaussianBlur1598Out" in="SvgjsFeOffset1597Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1599" result="SvgjsFeMerge1599Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1600" in="SvgjsFeGaussianBlur1598Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1601" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1602" in="SourceGraphic" in2="SvgjsFeMerge1599Out" mode="normal" result="SvgjsFeBlend1602Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <g id="SvgjsG1560" class="apexcharts-pie">
                                                <g id="SvgjsG1561" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle1562" r="77.06829268292684" cx="119" cy="119" fill="transparent"></circle>
                                                    <g id="SvgjsG1563" class="apexcharts-slices">
                                                        <g id="SvgjsG1564" class="apexcharts-series apexcharts-pie-series" seriesName="SeriesxA" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1565" d="M 119 8.902439024390233 A 110.09756097560977 110.09756097560977 0 0 1 141.8905700573504 226.69166511493654 L 135.02339904014528 194.3841655804556 A 77.06829268292684 77.06829268292684 0 0 0 119 41.93170731707316 L 119 8.902439024390233 z" fill="rgba(85,110,230,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="168" data:startAngle="0" data:strokeWidth="2" data:value="56" data:pathOrig="M 119 8.902439024390233 A 110.09756097560977 110.09756097560977 0 0 1 141.8905700573504 226.69166511493654 L 135.02339904014528 194.3841655804556 A 77.06829268292684 77.06829268292684 0 0 0 119 41.93170731707316 L 119 8.902439024390233 z" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1577" class="apexcharts-series apexcharts-pie-series" seriesName="SeriesxB" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1578" d="M 141.8905700573504 226.69166511493654 A 110.09756097560977 110.09756097560977 0 0 1 11.30833488506343 96.10942994264965 L 43.6158344195444 102.97660095985475 A 77.06829268292684 77.06829268292684 0 0 0 135.02339904014528 194.3841655804556 L 141.8905700573504 226.69166511493654 z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="114" data:startAngle="168" data:strokeWidth="2" data:value="38" data:pathOrig="M 141.8905700573504 226.69166511493654 A 110.09756097560977 110.09756097560977 0 0 1 11.30833488506343 96.10942994264965 L 43.6158344195444 102.97660095985475 A 77.06829268292684 77.06829268292684 0 0 0 135.02339904014528 194.3841655804556 L 141.8905700573504 226.69166511493654 z" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1590" class="apexcharts-series apexcharts-pie-series" seriesName="SeriesxC" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1591" d="M 11.30833488506343 96.10942994264965 A 110.09756097560977 110.09756097560977 0 0 1 118.98078435072314 8.90244070127197 L 118.9865490455062 41.93170849089037 A 77.06829268292684 77.06829268292684 0 0 0 43.6158344195444 102.97660095985475 L 11.30833488506343 96.10942994264965 z" fill="rgba(244,106,106,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="78" data:startAngle="282" data:strokeWidth="2" data:value="26" data:pathOrig="M 11.30833488506343 96.10942994264965 A 110.09756097560977 110.09756097560977 0 0 1 118.98078435072314 8.90244070127197 L 118.9865490455062 41.93170849089037 A 77.06829268292684 77.06829268292684 0 0 0 43.6158344195444 102.97660095985475 L 11.30833488506343 96.10942994264965 z" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1566" class="apexcharts-datalabels"><text id="SvgjsText1567" font-family="Helvetica, Arial, sans-serif" x="212.07026976435435" y="109.21792047044732" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1568)" style="font-family: Helvetica, Arial, sans-serif;">46.7%</text></g>
                                                        <g id="SvgjsG1579" class="apexcharts-datalabels"><text id="SvgjsText1580" font-family="Helvetica, Arial, sans-serif" x="52.82687783573989" y="185.17312216426012" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1581)" style="font-family: Helvetica, Arial, sans-serif;">31.7%</text></g>
                                                        <g id="SvgjsG1592" class="apexcharts-datalabels"><text id="SvgjsText1593" font-family="Helvetica, Arial, sans-serif" x="60.106355892216584" y="46.27240635331091" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1594)" style="font-family: Helvetica, Arial, sans-serif;">21.7%</text></g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1603" x1="0" y1="0" x2="238" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1604" x1="0" y1="0" x2="238" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1557" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 110, 230);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 195, 143);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(244, 106, 106);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 480px; height: 242px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>

                        <div class="text-center text-muted">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-4">
                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i> Product A</p>
                                        <h5>$ 2,132</h5>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-4">
                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i> Product B</p>
                                        <h5>$ 1,763</h5>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-4">
                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> Product C</p>
                                        <h5>$ 973</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-end">
                                <div class="input-group input-group-sm">
                                    <select class="form-select form-select-sm">
                                        <option value="JA" selected="">Jan</option>
                                        <option value="DE">Dec</option>
                                        <option value="NO">Nov</option>
                                        <option value="OC">Oct</option>
                                    </select>
                                    <label class="input-group-text">Month</label>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Top Selling product</h4>
                        </div>

                        <div class="text-muted text-center">
                            <p class="mb-2">Product A</p>
                            <h4>$ 6385</h4>
                            <p class="mt-4 mb-0"><span class="badge badge-soft-success font-size-11 me-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Product A</h5>
                                            <p class="text-muted mb-0">Neque quis est</p>
                                        </td>

                                        <td style="position: relative;">
                                            <div id="radialchart-1" class="apex-charts" style="min-height: 61px;">
                                                <div id="apexcharts5sy5ptu8f" class="apexcharts-canvas apexcharts5sy5ptu8f apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1605" width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1607" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1606">
                                                                <clipPath id="gridRectMask5sy5ptu8f">
                                                                    <rect id="SvgjsRect1609" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask5sy5ptu8f">
                                                                    <rect id="SvgjsRect1610" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1611" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1612">
                                                                    <g id="SvgjsG1613" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1614" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1616">
                                                                        <g id="SvgjsG1618" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath1619" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 0 1 44.98383193561228 43.972649328109725" fill="none" fill-opacity="0.85" stroke="rgba(85,110,230,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="133" data:value="37" index="0" j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 0 1 44.98383193561228 43.972649328109725"></path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1617" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1620" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1621" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1608" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 133px; height: 86px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Sales</p>
                                            <h5 class="mb-0">37 %</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Product B</h5>
                                            <p class="text-muted mb-0">Quis autem iure</p>
                                        </td>

                                        <td style="position: relative;">
                                            <div id="radialchart-2" class="apex-charts" style="min-height: 61px;">
                                                <div id="apexchartswnjhw2d1" class="apexcharts-canvas apexchartswnjhw2d1 apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1622" width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1624" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1623">
                                                                <clipPath id="gridRectMaskwnjhw2d1">
                                                                    <rect id="SvgjsRect1626" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskwnjhw2d1">
                                                                    <rect id="SvgjsRect1627" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1628" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1629">
                                                                    <g id="SvgjsG1630" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1631" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1633">
                                                                        <g id="SvgjsG1635" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath1636" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 9.888613802535662 33.90925746625116" fill="none" fill-opacity="0.85" stroke="rgba(52,195,143,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="259" data:value="72" index="0" j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 9.888613802535662 33.90925746625116"></path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1634" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1637" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1638" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1625" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 133px; height: 86px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Sales</p>
                                            <h5 class="mb-0">72 %</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Product C</h5>
                                            <p class="text-muted mb-0">Sed aliquam mauris.</p>
                                        </td>

                                        <td style="position: relative;">
                                            <div id="radialchart-3" class="apex-charts" style="min-height: 61px;">
                                                <div id="apexchartstlxtis0pi" class="apexcharts-canvas apexchartstlxtis0pi apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1639" width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1641" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1640">
                                                                <clipPath id="gridRectMasktlxtis0pi">
                                                                    <rect id="SvgjsRect1643" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMasktlxtis0pi">
                                                                    <rect id="SvgjsRect1644" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1645" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1646">
                                                                    <g id="SvgjsG1647" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1648" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1650">
                                                                        <g id="SvgjsG1652" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath1653" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 25.043551407226317 49.87922951394725" fill="none" fill-opacity="0.85" stroke="rgba(244,106,106,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="194" data:value="54" index="0" j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 25.043551407226317 49.87922951394725"></path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1651" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1654" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1655" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1642" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 133px; height: 86px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Sales</p>
                                            <h5 class="mb-0">54 %</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Tasks</h4>

                        <ul class="nav nav-pills bg-light rounded">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">In Process</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Upcoming</a>
                            </li>
                        </ul>

                        <div class="mt-4">
                            <div data-simplebar="init" style="max-height: 250px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">

                                                    <div class="table-responsive">
                                                        <table class="table table-nowrap align-middle table-hover mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 50px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck01">
                                                                            <label class="form-check-label" for="tasklistCheck01"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Skote Saas Dashboard</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Mark</p>
                                                                    </td>
                                                                    <td style="width: 90px;">
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                                            <label class="form-check-label" for="tasklistCheck02"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">New Landing UI</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Team A</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                                            <label class="form-check-label" for="tasklistCheck02"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Brand logo design</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Janis</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck04">
                                                                            <label class="form-check-label" for="tasklistCheck04"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Blog Template UI</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Dianna</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck05">
                                                                            <label class="form-check-label" for="tasklistCheck05"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Multipurpose Landing</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Team B</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck06">
                                                                            <label class="form-check-label" for="tasklistCheck06"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Redesign - Landing page</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Jerry</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="tasklistCheck07">
                                                                            <label class="form-check-label" for="tasklistCheck07"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Skote Crypto Dashboard</a></h5>
                                                                        <p class="text-muted mb-0">Assigned to Eric</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 font-size-16">
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 457px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 136px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent border-top">
                        <div class="text-center">
                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light"> Add new Task</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="row">
                            <div class="col-md-4 col-9">
                                <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                                <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
                            </div>
                            <div class="col-md-8 col-3">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item d-none d-sm-inline-block">
                                        <div class="dropdown">
                                            <button class="btn nav-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-search-alt-2"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-0 dropdown-menu-md">
                                                <form class="p-3">
                                                    <div class="form-group m-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">

                                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item  d-none d-sm-inline-block">
                                        <div class="dropdown">
                                            <button class="btn nav-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-cog"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Profile</a>
                                                <a class="dropdown-item" href="#">Clear chat</a>
                                                <a class="dropdown-item" href="#">Muted</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div>
                            <div class="chat-conversation">
                                <ul class="list-unstyled" data-simplebar="init" style="max-height: 260px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <li>
                                                            <div class="chat-day-title">
                                                                <span class="title">Today</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="conversation-list">
                                                                <div class="dropdown">

                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="ctext-wrap">
                                                                    <div class="conversation-name">Steven Franklin</div>
                                                                    <p>
                                                                        Hello!
                                                                    </p>
                                                                    <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                                </div>

                                                            </div>
                                                        </li>

                                                        <li class="right">
                                                            <div class="conversation-list">
                                                                <div class="dropdown">

                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="ctext-wrap">
                                                                    <div class="conversation-name">Henry Wells</div>
                                                                    <p>
                                                                        Hi, How are you? What about our next meeting?
                                                                    </p>

                                                                    <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="conversation-list">
                                                                <div class="dropdown">

                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="ctext-wrap">
                                                                    <div class="conversation-name">Steven Franklin</div>
                                                                    <p>
                                                                        Yeah everything is fine
                                                                    </p>

                                                                    <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                                                </div>

                                                            </div>
                                                        </li>

                                                        <li class="last-chat">
                                                            <div class="conversation-list">
                                                                <div class="dropdown">

                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="ctext-wrap">
                                                                    <div class="conversation-name">Steven Franklin</div>
                                                                    <p>&amp; Next meeting tomorrow 10.00AM</p>
                                                                    <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                                                </div>

                                                            </div>
                                                        </li>

                                                        <li class="right">
                                                            <div class="conversation-list">
                                                                <div class="dropdown">

                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="ctext-wrap">
                                                                    <div class="conversation-name">Henry Wells</div>
                                                                    <p>
                                                                        Wow that's great
                                                                    </p>

                                                                    <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:07</p>
                                                                </div>
                                                            </div>
                                                        </li>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 645px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar" style="height: 104px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="p-3 chat-input-section">
                        <div class="row">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded chat-input" placeholder="Enter Message...">
                                    <div class="chat-input-links">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a href="javascript: void(0);"><i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript: void(0);"><i class="mdi mdi-file-image-outline"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript: void(0);"><i class="mdi mdi-file-document-outline"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
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