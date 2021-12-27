<div id="modalForm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title add-task-title">Add New Task</h5>
                <h5 class="modal-title update-task-title" style="display: none;">Update Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="NewtaskForm" role="form">
                    <div class="form-group mb-3">
                        <label for="taskname" class="col-form-label">Task Name<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <input id="taskname" name="taskname" type="text" class="form-control validate" placeholder="Enter Task Name..." required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label">Task Description</label>
                        <div class="col-lg-12">
                            <textarea id="taskdesc" class="form-control" name="taskdesc"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="col-form-label">Add Team Member<span class="text-danger">*</span></label>
                        <ul class="list-unstyled user-list validate" id="taskassignee">
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-1" name="member[]">
                                    <label class="form-check-label ms-2" for="member-1">Albert Rodarte</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-1.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-2" name="member[]">
                                    <label class="form-check-label ms-2" for="member-2">Hannah Glover</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-2.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-3" name="member[]">
                                    <label class="form-check-label ms-2" for="member-3">Adrian Rodarte</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-3.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-4" name="member[]">
                                    <label class="form-check-label ms-2" for="member-4">Frank Hamilton</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-4.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-5" name="member[]">
                                    <label class="form-check-label ms-2" for="member-5">Justin Howard</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-5.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-6" name="member[]">
                                    <label class="form-check-label ms-2" for="member-6">Michael Lawrence</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-6.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-7" name="member[]">
                                    <label class="form-check-label ms-2" for="member-7">Oliver Sharp</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-7.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="form-check form-check-primary mb-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="member-8" name="member[]">
                                    <label class="form-check-label ms-2" for="member-8">Richard Simpson</label>
                                    <img src="{{URL::asset('admin/assets/images/users/avatar-8.jpg')}}" class="rounded-circle avatar-xs m-1" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-form-label">Status<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <select class="form-select validate" id="TaskStatus" required>
                                <option value="" selected>Choose..</option>
                                <option value="Waiting">Waiting</option>
                                <option value="Approved">Approved</option>
                                <option value="Pending">Pending</option>
                                <option value="Complete">Complete</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="taskbudget" class="col-form-label">Budget<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <input id="taskbudget" name="taskbudget" type="number" placeholder="Enter Task Budget..." class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <button type="button" class="btn btn-primary" id="addtask">Create Task</button>
                            <button type="button" class="btn btn-primary" id="updatetaskdetail">Update Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->