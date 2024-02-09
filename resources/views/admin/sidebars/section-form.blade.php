<div class="offcanvas offcanvas-end" style="width: 30%;" tabindex="-1" id="section-form">
    <div class="d-flex align-items-center bg-info p-3 offcanvas-header">
        <h5 class="text-white m-0">Section Detail</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="" class="needs-validation" method="POST" novalidate>
    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="card mb-0 p-3">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="departmentname" class="form-label">Department Name</label>
                        <select class="form-control select2" data-toggle="select2">
                            <option value="">-- Select Department --</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="sectionname" class="form-label">Section Full Name</label>
                        <input type="text" id="sectionname" class="form-control" name="sectionname">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="sectioncode" class="form-label">Section Short Name</label>
                        <input type="text" id="sectioncode" class="form-control" name="sectioncode">

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="activestatus">
                            <label class="form-check-label" for="customSwitch1">Active Status</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100"><i class="bi bi-trash me-3 fs-20"></i> <span>Reset</span> </button>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success w-100"><i class="ri-save-3-line me-3 fs-20"></i> <span>Submit</span> </button>
            </div>
        </div>
    </div>
    </form>
</div>

