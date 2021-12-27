@extends('admin.layouts.index')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Blog</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-8">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">

                                <div class="d-flex flex-wrap">
                                    <div class="me-3">
                                        <p class="text-muted mb-2">Total Post</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>

                                    <div class="avatar-sm ms-auto">
                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                            <i class="bx bxs-book-bookmark"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card blog-stats-wid">
                            <div class="card-body">

                                <div class="d-flex flex-wrap">
                                    <div class="me-3">
                                        <p class="text-muted mb-2">Pages</p>
                                        <h5 class="mb-0">86</h5>
                                    </div>

                                    <div class="avatar-sm ms-auto">
                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                            <i class="bx bxs-note"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card blog-stats-wid">
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    <div class="me-3">
                                        <p class="text-muted mb-2">Comments</p>
                                        <h5 class="mb-0">4,235</h5>
                                    </div>

                                    <div class="avatar-sm ms-auto">
                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                            <i class="bx bxs-message-square-dots"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="card">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex flex-wrap align-items-start">
                            <h5 class="card-title me-2">Visitors</h5>
                            <div class="ms-auto">
                                <div class="toolbar d-flex flex-wrap gap-2 text-end">
                                    <button type="button" class="btn btn-light btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm active">
                                        1Y
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="mt-4">
                                    <p class="text-muted mb-1">Today</p>
                                    <h5>1024</h5>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mt-4">
                                    <p class="text-muted mb-1">This Month</p>
                                    <h5>12356 <span class="text-success font-size-13">0.2 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mt-4">
                                    <p class="text-muted mb-1">This Year</p>
                                    <h5>102354 <span class="text-success font-size-13">0.1 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">

                        <div class="apex-charts" id="area-chart" dir="ltr" style="min-height: 365px;">
                            <div id="apexchartsa2h083fm" class="apexcharts-canvas apexchartsa2h083fm apexcharts-theme-light" style="width: 1022px; height: 350px;"><svg id="SvgjsSvg1180" width="1022" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="1022" height="350">
                                        <div class="apexcharts-legend apexcharts-align-right position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 175px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Current" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(85, 110, 230) !important; color: rgb(85, 110, 230); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Current" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Current</span></div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Previous" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(241, 180, 76) !important; color: rgb(241, 180, 76); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Previous" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Previous</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.position-bottom,
                                            .apexcharts-legend.position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.position-right,
                                            .apexcharts-legend.position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.position-top.apexcharts-align-left,
                                            .apexcharts-legend.position-right,
                                            .apexcharts-legend.position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1182" class="apexcharts-inner apexcharts-graphical" transform="translate(40.00599670410156, 54)">
                                        <defs id="SvgjsDefs1181">
                                            <clipPath id="gridRectMaska2h083fm">
                                                <rect id="SvgjsRect1188" width="965.0320129394531" height="255.49400000000003" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaska2h083fm">
                                                <rect id="SvgjsRect1189" width="975.0320129394531" height="269.494" x="-8" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1217" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1218" stop-opacity="0.45" stop-color="rgba(85,110,230,0.45)" offset="0.2"></stop>
                                                <stop id="SvgjsStop1219" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                <stop id="SvgjsStop1220" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                <stop id="SvgjsStop1221" stop-opacity="0.45" stop-color="rgba(85,110,230,0.45)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1250" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1251" stop-opacity="0.45" stop-color="rgba(241,180,76,0.45)" offset="0.2"></stop>
                                                <stop id="SvgjsStop1252" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                <stop id="SvgjsStop1253" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                <stop id="SvgjsStop1254" stop-opacity="0.45" stop-color="rgba(241,180,76,0.45)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1187" x1="261.0541853471236" y1="0" x2="261.0541853471236" y2="253.49400000000003" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="261.0541853471236" y="0" width="1" height="253.49400000000003" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1257" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1258" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1260" font-family="Helvetica, Arial, sans-serif" x="0" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1261">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1263" font-family="Helvetica, Arial, sans-serif" x="87.18472844904119" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1264">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1266" font-family="Helvetica, Arial, sans-serif" x="174.36945689808238" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1267">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1269" font-family="Helvetica, Arial, sans-serif" x="261.5541853471236" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1270">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1272" font-family="Helvetica, Arial, sans-serif" x="348.73891379616475" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1273">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1275" font-family="Helvetica, Arial, sans-serif" x="435.923642245206" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1276">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1278" font-family="Helvetica, Arial, sans-serif" x="523.1083706942471" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1279">Jul</tspan>
                                                    <title>Jul</title>
                                                </text><text id="SvgjsText1281" font-family="Helvetica, Arial, sans-serif" x="610.2930991432883" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1282">Aug</tspan>
                                                    <title>Aug</title>
                                                </text><text id="SvgjsText1284" font-family="Helvetica, Arial, sans-serif" x="697.4778275923294" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1285">Sep</tspan>
                                                    <title>Sep</title>
                                                </text><text id="SvgjsText1287" font-family="Helvetica, Arial, sans-serif" x="784.6625560413705" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1288">Oct</tspan>
                                                    <title>Oct</title>
                                                </text><text id="SvgjsText1290" font-family="Helvetica, Arial, sans-serif" x="871.8472844904117" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1291">Nov</tspan>
                                                    <title>Nov</title>
                                                </text><text id="SvgjsText1293" font-family="Helvetica, Arial, sans-serif" x="959.0320129394528" y="282.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1294">Dec</tspan>
                                                    <title>Dec</title>
                                                </text></g>
                                            <line id="SvgjsLine1295" x1="0" y1="254.49400000000003" x2="959.0320129394531" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                        </g>
                                        <g id="SvgjsG1314" class="apexcharts-grid">
                                            <g id="SvgjsG1315" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1329" x1="0" y1="0" x2="959.0320129394531" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1330" x1="0" y1="36.21342857142857" x2="959.0320129394531" y2="36.21342857142857" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1331" x1="0" y1="72.42685714285714" x2="959.0320129394531" y2="72.42685714285714" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1332" x1="0" y1="108.64028571428571" x2="959.0320129394531" y2="108.64028571428571" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1333" x1="0" y1="144.8537142857143" x2="959.0320129394531" y2="144.8537142857143" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1334" x1="0" y1="181.06714285714287" x2="959.0320129394531" y2="181.06714285714287" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1335" x1="0" y1="217.28057142857145" x2="959.0320129394531" y2="217.28057142857145" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1336" x1="0" y1="253.49400000000003" x2="959.0320129394531" y2="253.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1316" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1317" x1="0" y1="254.49400000000003" x2="0" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1318" x1="87.18472844904119" y1="254.49400000000003" x2="87.18472844904119" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1319" x1="174.36945689808238" y1="254.49400000000003" x2="174.36945689808238" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1320" x1="261.55418534712356" y1="254.49400000000003" x2="261.55418534712356" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1321" x1="348.73891379616475" y1="254.49400000000003" x2="348.73891379616475" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1322" x1="435.92364224520594" y1="254.49400000000003" x2="435.92364224520594" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1323" x1="523.1083706942471" y1="254.49400000000003" x2="523.1083706942471" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1324" x1="610.2930991432884" y1="254.49400000000003" x2="610.2930991432884" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1325" x1="697.4778275923295" y1="254.49400000000003" x2="697.4778275923295" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1326" x1="784.6625560413706" y1="254.49400000000003" x2="784.6625560413706" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1327" x1="871.8472844904118" y1="254.49400000000003" x2="871.8472844904118" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1328" x1="959.0320129394529" y1="254.49400000000003" x2="959.0320129394529" y2="260.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1338" x1="0" y1="253.49400000000003" x2="959.0320129394531" y2="253.49400000000003" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1337" x1="0" y1="1" x2="0" y2="253.49400000000003" stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1190" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1191" class="apexcharts-series" seriesName="Current" data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1222" d="M 0 253.49400000000003L 0 188.3098285714286C 30.514654957164417 188.3098285714286 56.670073491876785 177.44580000000002 87.1847284490412 177.44580000000002C 117.69938340620561 177.44580000000002 143.85480194091798 90.53357142857143 174.3694568980824 90.53357142857143C 204.88411185524683 90.53357142857143 231.0395303899592 123.12565714285716 261.5541853471236 123.12565714285716C 292.068840304288 123.12565714285716 318.2242588390004 18.106714285714304 348.7389137961648 18.106714285714304C 379.2535687533292 18.106714285714304 405.4089872880416 83.29088571428574 435.923642245206 83.29088571428574C 466.43829720237045 83.29088571428574 492.5937157370828 68.80551428571431 523.1083706942472 68.80551428571431C 553.6230256514116 68.80551428571431 579.778444186124 137.6110285714286 610.2930991432884 137.6110285714286C 640.8077541004528 137.6110285714286 666.9631726351652 108.64028571428574 697.4778275923296 108.64028571428574C 727.992482549494 108.64028571428574 754.1479010842064 152.09640000000002 784.6625560413707 152.09640000000002C 815.1772109985352 152.09640000000002 841.3326295332475 141.23237142857147 871.847284490412 141.23237142857147C 902.3619394475764 141.23237142857147 928.5173579822888 159.33908571428574 959.0320129394532 159.33908571428574C 959.0320129394532 159.33908571428574 959.0320129394532 159.33908571428574 959.0320129394532 253.49400000000003M 959.0320129394532 159.33908571428574z" fill="url(#SvgjsLinearGradient1217)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaska2h083fm)" pathTo="M 0 253.49400000000003L 0 188.3098285714286C 30.514654957164417 188.3098285714286 56.670073491876785 177.44580000000002 87.1847284490412 177.44580000000002C 117.69938340620561 177.44580000000002 143.85480194091798 90.53357142857143 174.3694568980824 90.53357142857143C 204.88411185524683 90.53357142857143 231.0395303899592 123.12565714285716 261.5541853471236 123.12565714285716C 292.068840304288 123.12565714285716 318.2242588390004 18.106714285714304 348.7389137961648 18.106714285714304C 379.2535687533292 18.106714285714304 405.4089872880416 83.29088571428574 435.923642245206 83.29088571428574C 466.43829720237045 83.29088571428574 492.5937157370828 68.80551428571431 523.1083706942472 68.80551428571431C 553.6230256514116 68.80551428571431 579.778444186124 137.6110285714286 610.2930991432884 137.6110285714286C 640.8077541004528 137.6110285714286 666.9631726351652 108.64028571428574 697.4778275923296 108.64028571428574C 727.992482549494 108.64028571428574 754.1479010842064 152.09640000000002 784.6625560413707 152.09640000000002C 815.1772109985352 152.09640000000002 841.3326295332475 141.23237142857147 871.847284490412 141.23237142857147C 902.3619394475764 141.23237142857147 928.5173579822888 159.33908571428574 959.0320129394532 159.33908571428574C 959.0320129394532 159.33908571428574 959.0320129394532 159.33908571428574 959.0320129394532 253.49400000000003M 959.0320129394532 159.33908571428574z" pathFrom="M -1 253.49400000000003L -1 253.49400000000003L 87.1847284490412 253.49400000000003L 174.3694568980824 253.49400000000003L 261.5541853471236 253.49400000000003L 348.7389137961648 253.49400000000003L 435.923642245206 253.49400000000003L 523.1083706942472 253.49400000000003L 610.2930991432884 253.49400000000003L 697.4778275923296 253.49400000000003L 784.6625560413707 253.49400000000003L 871.847284490412 253.49400000000003L 959.0320129394532 253.49400000000003"></path>
                                                <path id="SvgjsPath1223" d="M 0 188.3098285714286C 30.514654957164417 188.3098285714286 56.670073491876785 177.44580000000002 87.1847284490412 177.44580000000002C 117.69938340620561 177.44580000000002 143.85480194091798 90.53357142857143 174.3694568980824 90.53357142857143C 204.88411185524683 90.53357142857143 231.0395303899592 123.12565714285716 261.5541853471236 123.12565714285716C 292.068840304288 123.12565714285716 318.2242588390004 18.106714285714304 348.7389137961648 18.106714285714304C 379.2535687533292 18.106714285714304 405.4089872880416 83.29088571428574 435.923642245206 83.29088571428574C 466.43829720237045 83.29088571428574 492.5937157370828 68.80551428571431 523.1083706942472 68.80551428571431C 553.6230256514116 68.80551428571431 579.778444186124 137.6110285714286 610.2930991432884 137.6110285714286C 640.8077541004528 137.6110285714286 666.9631726351652 108.64028571428574 697.4778275923296 108.64028571428574C 727.992482549494 108.64028571428574 754.1479010842064 152.09640000000002 784.6625560413707 152.09640000000002C 815.1772109985352 152.09640000000002 841.3326295332475 141.23237142857147 871.847284490412 141.23237142857147C 902.3619394475764 141.23237142857147 928.5173579822888 159.33908571428574 959.0320129394532 159.33908571428574" fill="none" fill-opacity="1" stroke="#556ee6" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaska2h083fm)" pathTo="M 0 188.3098285714286C 30.514654957164417 188.3098285714286 56.670073491876785 177.44580000000002 87.1847284490412 177.44580000000002C 117.69938340620561 177.44580000000002 143.85480194091798 90.53357142857143 174.3694568980824 90.53357142857143C 204.88411185524683 90.53357142857143 231.0395303899592 123.12565714285716 261.5541853471236 123.12565714285716C 292.068840304288 123.12565714285716 318.2242588390004 18.106714285714304 348.7389137961648 18.106714285714304C 379.2535687533292 18.106714285714304 405.4089872880416 83.29088571428574 435.923642245206 83.29088571428574C 466.43829720237045 83.29088571428574 492.5937157370828 68.80551428571431 523.1083706942472 68.80551428571431C 553.6230256514116 68.80551428571431 579.778444186124 137.6110285714286 610.2930991432884 137.6110285714286C 640.8077541004528 137.6110285714286 666.9631726351652 108.64028571428574 697.4778275923296 108.64028571428574C 727.992482549494 108.64028571428574 754.1479010842064 152.09640000000002 784.6625560413707 152.09640000000002C 815.1772109985352 152.09640000000002 841.3326295332475 141.23237142857147 871.847284490412 141.23237142857147C 902.3619394475764 141.23237142857147 928.5173579822888 159.33908571428574 959.0320129394532 159.33908571428574" pathFrom="M -1 253.49400000000003L -1 253.49400000000003L 87.1847284490412 253.49400000000003L 174.3694568980824 253.49400000000003L 261.5541853471236 253.49400000000003L 348.7389137961648 253.49400000000003L 435.923642245206 253.49400000000003L 523.1083706942472 253.49400000000003L 610.2930991432884 253.49400000000003L 697.4778275923296 253.49400000000003L 784.6625560413707 253.49400000000003L 871.847284490412 253.49400000000003L 959.0320129394532 253.49400000000003"></path>
                                                <g id="SvgjsG1192" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                    <g id="SvgjsG1194" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1195" r="3" cx="0" cy="188.3098285714286" class="apexcharts-marker no-pointer-events we2dbph4y" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="3"></circle>
                                                        <circle id="SvgjsCircle1196" r="3" cx="87.1847284490412" cy="177.44580000000002" class="apexcharts-marker no-pointer-events w10gbgrfv" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1197" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1198" r="3" cx="174.3694568980824" cy="90.53357142857143" class="apexcharts-marker no-pointer-events wqegno6ba" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1199" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1200" r="3" cx="261.5541853471236" cy="123.12565714285716" class="apexcharts-marker no-pointer-events wgdywnff6" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1201" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1202" r="3" cx="348.7389137961648" cy="18.106714285714304" class="apexcharts-marker no-pointer-events w6as7zel9" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1203" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1204" r="3" cx="435.923642245206" cy="83.29088571428574" class="apexcharts-marker no-pointer-events wk21xakit" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1205" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1206" r="3" cx="523.1083706942472" cy="68.80551428571431" class="apexcharts-marker no-pointer-events wdp8tpqmth" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1207" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1208" r="3" cx="610.2930991432884" cy="137.6110285714286" class="apexcharts-marker no-pointer-events w6rgcft8hg" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1209" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1210" r="3" cx="697.4778275923296" cy="108.64028571428574" class="apexcharts-marker no-pointer-events wa03ggz6o" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1211" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1212" r="3" cx="784.6625560413707" cy="152.09640000000002" class="apexcharts-marker no-pointer-events wglkyv7pn" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="9" j="9" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1213" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1214" r="3" cx="871.847284490412" cy="141.23237142857147" class="apexcharts-marker no-pointer-events wox6vwsal" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="10" j="10" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1215" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1216" r="3" cx="959.0320129394532" cy="159.33908571428574" class="apexcharts-marker no-pointer-events wesbsw8mh" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="11" j="11" index="0" default-marker-size="3"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1224" class="apexcharts-series" seriesName="Previous" data:longestSeries="true" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1255" d="M 0 253.49400000000003L 0 144.85371428571432C 30.514654957164417 144.85371428571432 56.670073491876785 213.6592285714286 87.1847284490412 213.6592285714286C 117.69938340620561 213.6592285714286 143.85480194091798 173.82445714285717 174.3694568980824 173.82445714285717C 204.88411185524683 173.82445714285717 231.0395303899592 188.3098285714286 261.5541853471236 188.3098285714286C 292.068840304288 188.3098285714286 318.2242588390004 137.6110285714286 348.7389137961648 137.6110285714286C 379.2535687533292 137.6110285714286 405.4089872880416 170.20311428571432 435.923642245206 170.20311428571432C 466.43829720237045 170.20311428571432 492.5937157370828 43.45611428571431 523.1083706942472 43.45611428571431C 553.6230256514116 43.45611428571431 579.778444186124 90.53357142857143 610.2930991432884 90.53357142857143C 640.8077541004528 90.53357142857143 666.9631726351652 144.85371428571432 697.4778275923296 144.85371428571432C 727.992482549494 144.85371428571432 754.1479010842064 123.12565714285716 784.6625560413707 123.12565714285716C 815.1772109985352 123.12565714285716 841.3326295332475 199.17385714285717 871.847284490412 199.17385714285717C 902.3619394475764 199.17385714285717 928.5173579822888 130.36834285714286 959.0320129394532 130.36834285714286C 959.0320129394532 130.36834285714286 959.0320129394532 130.36834285714286 959.0320129394532 253.49400000000003M 959.0320129394532 130.36834285714286z" fill="url(#SvgjsLinearGradient1250)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaska2h083fm)" pathTo="M 0 253.49400000000003L 0 144.85371428571432C 30.514654957164417 144.85371428571432 56.670073491876785 213.6592285714286 87.1847284490412 213.6592285714286C 117.69938340620561 213.6592285714286 143.85480194091798 173.82445714285717 174.3694568980824 173.82445714285717C 204.88411185524683 173.82445714285717 231.0395303899592 188.3098285714286 261.5541853471236 188.3098285714286C 292.068840304288 188.3098285714286 318.2242588390004 137.6110285714286 348.7389137961648 137.6110285714286C 379.2535687533292 137.6110285714286 405.4089872880416 170.20311428571432 435.923642245206 170.20311428571432C 466.43829720237045 170.20311428571432 492.5937157370828 43.45611428571431 523.1083706942472 43.45611428571431C 553.6230256514116 43.45611428571431 579.778444186124 90.53357142857143 610.2930991432884 90.53357142857143C 640.8077541004528 90.53357142857143 666.9631726351652 144.85371428571432 697.4778275923296 144.85371428571432C 727.992482549494 144.85371428571432 754.1479010842064 123.12565714285716 784.6625560413707 123.12565714285716C 815.1772109985352 123.12565714285716 841.3326295332475 199.17385714285717 871.847284490412 199.17385714285717C 902.3619394475764 199.17385714285717 928.5173579822888 130.36834285714286 959.0320129394532 130.36834285714286C 959.0320129394532 130.36834285714286 959.0320129394532 130.36834285714286 959.0320129394532 253.49400000000003M 959.0320129394532 130.36834285714286z" pathFrom="M -1 253.49400000000003L -1 253.49400000000003L 87.1847284490412 253.49400000000003L 174.3694568980824 253.49400000000003L 261.5541853471236 253.49400000000003L 348.7389137961648 253.49400000000003L 435.923642245206 253.49400000000003L 523.1083706942472 253.49400000000003L 610.2930991432884 253.49400000000003L 697.4778275923296 253.49400000000003L 784.6625560413707 253.49400000000003L 871.847284490412 253.49400000000003L 959.0320129394532 253.49400000000003"></path>
                                                <path id="SvgjsPath1256" d="M 0 144.85371428571432C 30.514654957164417 144.85371428571432 56.670073491876785 213.6592285714286 87.1847284490412 213.6592285714286C 117.69938340620561 213.6592285714286 143.85480194091798 173.82445714285717 174.3694568980824 173.82445714285717C 204.88411185524683 173.82445714285717 231.0395303899592 188.3098285714286 261.5541853471236 188.3098285714286C 292.068840304288 188.3098285714286 318.2242588390004 137.6110285714286 348.7389137961648 137.6110285714286C 379.2535687533292 137.6110285714286 405.4089872880416 170.20311428571432 435.923642245206 170.20311428571432C 466.43829720237045 170.20311428571432 492.5937157370828 43.45611428571431 523.1083706942472 43.45611428571431C 553.6230256514116 43.45611428571431 579.778444186124 90.53357142857143 610.2930991432884 90.53357142857143C 640.8077541004528 90.53357142857143 666.9631726351652 144.85371428571432 697.4778275923296 144.85371428571432C 727.992482549494 144.85371428571432 754.1479010842064 123.12565714285716 784.6625560413707 123.12565714285716C 815.1772109985352 123.12565714285716 841.3326295332475 199.17385714285717 871.847284490412 199.17385714285717C 902.3619394475764 199.17385714285717 928.5173579822888 130.36834285714286 959.0320129394532 130.36834285714286" fill="none" fill-opacity="1" stroke="#f1b44c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaska2h083fm)" pathTo="M 0 144.85371428571432C 30.514654957164417 144.85371428571432 56.670073491876785 213.6592285714286 87.1847284490412 213.6592285714286C 117.69938340620561 213.6592285714286 143.85480194091798 173.82445714285717 174.3694568980824 173.82445714285717C 204.88411185524683 173.82445714285717 231.0395303899592 188.3098285714286 261.5541853471236 188.3098285714286C 292.068840304288 188.3098285714286 318.2242588390004 137.6110285714286 348.7389137961648 137.6110285714286C 379.2535687533292 137.6110285714286 405.4089872880416 170.20311428571432 435.923642245206 170.20311428571432C 466.43829720237045 170.20311428571432 492.5937157370828 43.45611428571431 523.1083706942472 43.45611428571431C 553.6230256514116 43.45611428571431 579.778444186124 90.53357142857143 610.2930991432884 90.53357142857143C 640.8077541004528 90.53357142857143 666.9631726351652 144.85371428571432 697.4778275923296 144.85371428571432C 727.992482549494 144.85371428571432 754.1479010842064 123.12565714285716 784.6625560413707 123.12565714285716C 815.1772109985352 123.12565714285716 841.3326295332475 199.17385714285717 871.847284490412 199.17385714285717C 902.3619394475764 199.17385714285717 928.5173579822888 130.36834285714286 959.0320129394532 130.36834285714286" pathFrom="M -1 253.49400000000003L -1 253.49400000000003L 87.1847284490412 253.49400000000003L 174.3694568980824 253.49400000000003L 261.5541853471236 253.49400000000003L 348.7389137961648 253.49400000000003L 435.923642245206 253.49400000000003L 523.1083706942472 253.49400000000003L 610.2930991432884 253.49400000000003L 697.4778275923296 253.49400000000003L 784.6625560413707 253.49400000000003L 871.847284490412 253.49400000000003L 959.0320129394532 253.49400000000003"></path>
                                                <g id="SvgjsG1225" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                                    <g id="SvgjsG1227" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1228" r="3" cx="0" cy="144.85371428571432" class="apexcharts-marker no-pointer-events wi2t6p2vm" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="3"></circle>
                                                        <circle id="SvgjsCircle1229" r="3" cx="87.1847284490412" cy="213.6592285714286" class="apexcharts-marker no-pointer-events wjunr8dbv" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1230" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1231" r="3" cx="174.3694568980824" cy="173.82445714285717" class="apexcharts-marker no-pointer-events wfp6ivzwn" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1232" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1233" r="3" cx="261.5541853471236" cy="188.3098285714286" class="apexcharts-marker no-pointer-events wuk84y32l" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1234" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1235" r="3" cx="348.7389137961648" cy="137.6110285714286" class="apexcharts-marker no-pointer-events wfjoxydmnf" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1236" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1237" r="3" cx="435.923642245206" cy="170.20311428571432" class="apexcharts-marker no-pointer-events wszep7xw6i" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1238" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1239" r="3" cx="523.1083706942472" cy="43.45611428571431" class="apexcharts-marker no-pointer-events wljve7xvp" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1240" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1241" r="3" cx="610.2930991432884" cy="90.53357142857143" class="apexcharts-marker no-pointer-events wdrghy1a" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1242" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1243" r="3" cx="697.4778275923296" cy="144.85371428571432" class="apexcharts-marker no-pointer-events wqwbpbhnd" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="8" j="8" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1244" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1245" r="3" cx="784.6625560413707" cy="123.12565714285716" class="apexcharts-marker no-pointer-events wwoj5wm3hf" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="9" j="9" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1246" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1247" r="3" cx="871.847284490412" cy="199.17385714285717" class="apexcharts-marker no-pointer-events wfqwcspg7" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="10" j="10" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1248" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaska2h083fm)">
                                                        <circle id="SvgjsCircle1249" r="3" cx="959.0320129394532" cy="130.36834285714286" class="apexcharts-marker no-pointer-events whs2jagrg" stroke="#ffffff" fill="#f1b44c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="11" j="11" index="1" default-marker-size="3"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1193" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1226" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1339" x1="0" y1="0" x2="959.0320129394531" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1340" x1="0" y1="0" x2="959.0320129394531" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1341" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1342" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1343" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1344" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1345" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1186" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1296" class="apexcharts-yaxis" rel="0" transform="translate(10.005996704101562, 0)">
                                        <g id="SvgjsG1297" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1298" font-family="Helvetica, Arial, sans-serif" x="20" y="55.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1299">70</tspan>
                                            </text><text id="SvgjsText1300" font-family="Helvetica, Arial, sans-serif" x="20" y="91.91342857142858" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1301">60</tspan>
                                            </text><text id="SvgjsText1302" font-family="Helvetica, Arial, sans-serif" x="20" y="128.12685714285715" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1303">50</tspan>
                                            </text><text id="SvgjsText1304" font-family="Helvetica, Arial, sans-serif" x="20" y="164.34028571428573" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1305">40</tspan>
                                            </text><text id="SvgjsText1306" font-family="Helvetica, Arial, sans-serif" x="20" y="200.5537142857143" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1307">30</tspan>
                                            </text><text id="SvgjsText1308" font-family="Helvetica, Arial, sans-serif" x="20" y="236.7671428571429" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1309">20</tspan>
                                            </text><text id="SvgjsText1310" font-family="Helvetica, Arial, sans-serif" x="20" y="272.98057142857147" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1311">10</tspan>
                                            </text><text id="SvgjsText1312" font-family="Helvetica, Arial, sans-serif" x="20" y="309.194" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1313">0</tspan>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1183" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 310.56px; top: 190.31px;">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Apr</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 110, 230);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Current: </span><span class="apexcharts-tooltip-text-value">36</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 180, 76);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Previous: </span><span class="apexcharts-tooltip-text-value">18</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 278.787px; top: 309.494px;">
                                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 22.55px;">Apr</div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1063px; height: 534px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{URL::asset('admin/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-sm rounded-circle img-thumbnail">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="text-muted">
                                            <h5 class="mb-1">Henry wells</h5>
                                            <p class="mb-0">UI / UX Designer</p>
                                        </div>
                                    </div>

                                    <div class="flex-shrink-0 dropdown ms-2">
                                        <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bxs-cog align-middle me-1"></i> Setting
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </div>


                                <hr>

                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Total Post</p>
                                            <h5 class="mb-0">32</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Subscribes</p>
                                            <h5 class="mb-0">10k</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-start">
                            <h5 class="card-title mb-3 me-2">Subscribes</h5>

                            <div class="dropdown ms-auto">
                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap">
                            <div>
                                <p class="text-muted mb-1">Total Subscribe</p>
                                <h4 class="mb-3">10,512</h4>
                                <p class="text-success mb-0"><span>0.6 % <i class="mdi mdi-arrow-top-right ms-1"></i></span></p>
                            </div>
                            <div class="ms-auto align-self-end">
                                <i class="bx bx-group display-4 text-light"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light rounded-circle text-primary h1">
                                    <i class="mdi mdi-email-open"></i>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <h4 class="text-primary">Subscribe !</h4>
                                    <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay update.</p>

                                    <div class="input-group bg-light rounded">
                                        <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">

                                        <button class="btn btn-primary" type="button" id="button-addon2">
                                            <i class="bx bxs-paper-plane"></i>
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom">
                        <div class="d-flex flex-wrap align-items-start">
                            <div class="me-2">
                                <h5 class="card-title mt-1 mb-0">Posts</h5>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-custom card-header-tabs ms-auto" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#post-recent" role="tab">
                                        Recent
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#post-popular" role="tab">
                                        Popular
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card-body">

                        <div data-simplebar="init" style="max-height: 295px;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="post-recent" role="tabpanel">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-2.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Beautiful Day with Friends</a></h5>
                                                                            <p class="text-muted mb-0">10 Nov, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-6.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>
                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Drawing a sketch</a></h5>
                                                                            <p class="text-muted mb-0">02 Nov, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-2.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Project discussion with team</a></h5>
                                                                            <p class="text-muted mb-0">24 Oct, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-1.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Riding bike on road</a></h5>
                                                                            <p class="text-muted mb-0">20 Oct, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end tab pane -->

                                                    <div class="tab-pane" id="post-popular" role="tabpanel">

                                                        <ul class="list-group list-group-flush">

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-6.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Drawing a sketch</a></h5>
                                                                            <p class="text-muted mb-0">02 Nov, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-2.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Beautiful Day with Friends</a></h5>
                                                                            <p class="text-muted mb-0">10 Nov, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-1.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Riding bike on road</a></h5>
                                                                            <p class="text-muted mb-0">20 Oct, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="list-group-item py-3">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <img src="{{URL::asset('admin/assets/images/small/img-2.jpg')}}" alt="" class="avatar-md h-auto d-block rounded">
                                                                    </div>

                                                                    <div class="align-self-center overflow-hidden me-auto">
                                                                        <div>
                                                                            <h5 class="font-size-14 text-truncate"><a href="javascript: void(0);" class="text-dark">Project discussion with team</a></h5>
                                                                            <p class="text-muted mb-0">24 Oct, 2020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <!-- end tab pane -->
                                                </div>
                                                <!-- end tab content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 323px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 269px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-start">
                            <div class="me-2">
                                <h5 class="card-title mb-3">Comments</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>

                        <div data-simplebar="init" style="max-height: 310px;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item py-3">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        <i class="bx bxs-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-1">Delores Williams <small class="text-muted float-end">1 hr Ago</small></h5>
                                                                <p class="text-muted">If several languages coalesce, the grammar of the resulting of the individual</p>
                                                                <div>
                                                                    <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply me-1"></i> Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-group-item py-3">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-xs">
                                                                    <img src="{{URL::asset('admin/assets/images/users/avatar-2.jpg')}}" alt="" class="img-fluid d-block rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-1">Clarence Smith <small class="text-muted float-end">2 hrs Ago</small></h5>
                                                                <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                                <div>
                                                                    <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                </div>

                                                                <div class="d-flex pt-3">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                <i class="bx bxs-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-14 mb-1">Silvia Martinez <small class="text-muted float-end">2 hrs Ago</small></h5>
                                                                        <p class="text-muted">To take a trivial example, which of us ever undertakes</p>
                                                                        <div>
                                                                            <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-group-item py-3">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        <i class="bx bxs-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-1">Keith McCoy <small class="text-muted float-end">12 Aug</small></h5>
                                                                <p class="text-muted">Donec posuere vulputate arcu. phasellus accumsan cursus velit</p>
                                                                <div>
                                                                    <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 495px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 194px; transform: translate3d(0px, 116px, 0px); display: block;"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-start">
                            <div class="me-2">
                                <h5 class="card-title mb-3">Top Visitors</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="mt-3">
                                    <p class="text-muted mb-1">Today</p>
                                    <h5>1024</h5>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mt-3">
                                    <p class="text-muted mb-1">This Month</p>
                                    <h5>12356 <span class="text-success font-size-13">0.2 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="py-2">
                                        <h5 class="font-size-14">California <span class="float-end">78%</span></h5>
                                        <div class="progress animated-progess progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="py-2">
                                        <h5 class="font-size-14">Nevada <span class="float-end">69%</span></h5>
                                        <div class="progress animated-progess progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="py-2">
                                        <h5 class="font-size-14">Texas <span class="float-end">61%</span></h5>
                                        <div class="progress animated-progess progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-2">
                                <h5 class="card-title mb-4">Activity</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar="init" class="mt-2" style="max-height: 280px;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <ul class="verti-timeline list-unstyled">
                                                    <li class="event-list active">
                                                        <div class="event-timeline-dot">
                                                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <h5 class="font-size-14">10 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div>
                                                                    Posted <span class="fw-semibold">Beautiful Day with Friends</span> blog... <a href="javascript: void(0);">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="event-timeline-dot">
                                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <h5 class="font-size-14">08 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div>
                                                                    If several languages coalesce, the grammar of the resulting... <a href="javascript: void(0);">Read</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="event-timeline-dot">
                                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <h5 class="font-size-14">02 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div>
                                                                    Create <span class="fw-semibold">Drawing a sketch blog</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="event-timeline-dot">
                                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <h5 class="font-size-14">24 Oct <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div>
                                                                    In enim justo, rhoncus ut, imperdiet a venenatis vitae
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="event-timeline-dot">
                                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <h5 class="font-size-14">21 Oct <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div>
                                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 327px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 239px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </div>

                        <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-2">
                                <h5 class="card-title mb-4">Popular post</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="col" colspan="2">Post</th>
                                        <th scope="col">Likes</th>
                                        <th scope="col">Comments</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td style="width: 100px;"><img src="{{URL::asset('admin/assets/images/small/img-2.jpg')}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                        <td>
                                            <h5 class="font-size-13 text-truncate mb-1"><a href="javascript: void(0);" class="text-dark">Beautiful Day with Friends</a></h5>
                                            <p class="text-muted mb-0">10 Nov, 2020</p>
                                        </td>
                                        <td><i class="bx bx-like align-middle me-1"></i> 125</td>
                                        <td><i class="bx bx-comment-dots align-middle me-1"></i> 68</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{URL::asset('admin/assets/images/small/img-6.jpg')}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                        <td>
                                            <h5 class="font-size-13 text-truncate mb-1"><a href="javascript: void(0);" class="text-dark">Drawing a sketch</a></h5>
                                            <p class="text-muted mb-0">02 Nov, 2020</p>
                                        </td>
                                        <td><i class="bx bx-like align-middle me-1"></i> 102</td>
                                        <td><i class="bx bx-comment-dots align-middle me-1"></i> 48</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{URL::asset('admin/assets/images/small/img-1.jpg')}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                        <td>
                                            <h5 class="font-size-13 text-truncate mb-1"><a href="javascript: void(0);" class="text-dark">Riding bike on road</a></h5>
                                            <p class="text-muted mb-0">24 Oct, 2020</p>
                                        </td>
                                        <td><i class="bx bx-like align-middle me-1"></i> 98</td>
                                        <td><i class="bx bx-comment-dots align-middle me-1"></i> 35</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{URL::asset('admin/assets/images/small/img-2.jpg')}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                        <td>
                                            <h5 class="font-size-13 text-truncate mb-1"><a href="javascript: void(0);" class="text-dark">Project discussion with team</a></h5>
                                            <p class="text-muted mb-0">15 Oct, 2020</p>
                                        </td>
                                        <td><i class="bx bx-like align-middle me-1"></i> 92</td>
                                        <td><i class="bx bx-comment-dots align-middle me-1"></i> 22</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection