<div class="table-responsive">
    <table class="table table-nowrap table-check table-bordered">
        <thead class="table-light">
            <tr>
                <th style="width: 20px;" class="align-middle">
                    <div class="form-check font-size-16">
                        <input class="form-check-input" type="checkbox" id="checkAll">
                        <label class="form-check-label" for="checkAll"></label>
                    </div>
                </th>
                <th class="align-middle">Sản phẩm</th>
                <th class="align-middle">Khách hàng</th>
                <th class="align-middle text-end">Tổng đơn</th>
                <th class="align-middle text-end">Tình trạng</th>
                <th class="align-middle text-end">Ngày tạo</th>
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
                    <span class="badge badge-pill badge-soft-success font-size-12">Đã thanh toán</span>
                    <span class="badge badge-pill badge-soft-warning font-size-12 mb-2">Đang giao hàng</span>
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded avatar-sm" src="http://127.0.0.1:8000/admin/assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="text-body fw-bold font-size-14 my-1 text-table">Áo thun tay lỡ nam nữ form rộng chữ kiểu cá tính</h5>
                            <span class="text-muted">Hồng/XL </span>
                            <span class="float-sm-end">x 2</span>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-muted mb-0">Lê Đình Thi - 0986966813</p>
                    <p class="text-muted mb-0">247 Dịch vọng hậu, Cầu Giấy, Hà Nội</p>
                </td>
                <td class="text-end">
                    <p class="text-muted mb-0 mt-1"><span class="fw-bold">SL:</span> 20 Sản phẩm</p>
                    <p class="text-muted mb-0 mt-1"><span class="fw-bold">Giá:</span> 2.000.000.đ</p>
                </td>
                <td class="text-end">
                    <span class="badge badge-pill badge-soft-warning font-size-12 mb-2">{{$status}}</span>
                    <br>
                    <span class="badge badge-pill badge-soft-secondary font-size-12"><i class="bx bx-printer"></i> Chưa in hóa đơn</span>
                </td>
                <td class="text-end">
                    20/12/2021
                </td>

                <td class="text-end">
                    <a href="javascript: void(0);" class="mb-2">Giao hàng</a>
                    <br>
                    <a href="javascript: void(0);">Xem thêm</a>
                </td>
            </tr>

        </tbody>
    </table>
</div>