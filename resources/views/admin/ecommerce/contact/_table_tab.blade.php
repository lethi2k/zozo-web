<div class="table-responsive">
    <table class="table table-nowrap table-check">
        <thead class="table-light">
            <tr>
                <th style="width: 20px;" class="align-middle">
                    <div class="form-check font-size-16">
                        <input class="form-check-input" type="checkbox" id="checkAll">
                        <label class="form-check-label" for="checkAll"></label>
                    </div>
                </th>
                <th class="align-middle">Khách hàng</th>
                <th class="align-middle">Nhóm khách hàng</th>
                <th class="align-middle">Địa chỉ</th>
                <th class="align-middle text-end">Tổng</th>
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
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded avatar-sm" src="http://127.0.0.1:8000/admin/assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1">
                            <span class="badge badge-pill badge-soft-success font-size-12 mb-2">{{$status}}</span>
                            <h5 class="font-size-14 mb-1">
                                <a href="javascript: void(0);" class="text-dark">ledinhthi2909@gmail.com</a>
                            </h5>
                            <p class="text-muted mb-0">{{$rank}}</p>
                        </div>
                    </div>
                </td>
                <td>
                    Mặc định
                </td>
                <td>
                    <p class="text-muted mb-0">Lê Đình Thi - 0986966813</p>
                    <p class="text-muted mb-0">247 Dịch vọng hậu, Cầu Giấy, Hà Nội</p>
                </td>
                <td class="text-end">
                    <p class="text-muted mb-0">
                        <span>Số lượng: </span> 20 Đơn
                    </p>
                    <p class="text-muted mb-0">
                        <span>Tổng tiền: </span> 20.000.000.đ
                    </p>
                </td>
                <td class="text-end">
                    20/10/2021
                </td>
                <td>
                    <div class="d-flex gap-3 float-end">
                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>