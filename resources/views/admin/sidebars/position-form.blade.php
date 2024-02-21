<div class="offcanvas offcanvas-end departmentFormModal" style="width: 30%;" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-info p-3 offcanvas-header">
        <h5 class="text-white m-0">Position Detail</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="{{ url('save-position') }}" class="needs-validation departmentForm" method="POST" novalidate>
        {{ csrf_field() }}
        <input type="hidden" id="positionId" name="positionId">
    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="card mb-0 p-3">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="position" class="form-label">Position </label>
                        <input type="text" id="position" class="form-control" name="position" required>
                        <div class="invalid-feedback">
                            Please enter Position
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="departmentcode" class="form-label">Department </label>
                        <select class="form-select" name="departmentId" required>
                            <option value="">-- Select Department --</option>
                            @foreach($pageData['department'] as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please enter Department
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="designationId" class="form-label">Designation </label>
                        <select class="form-select" name="designationId" required>
                            <option value="">-- Select Designation --</option>
                            @foreach($pageData['designation'] as $designation)
                                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please enter Designation
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="startDate" class="form-label">Start Date </label>
                        <input type="date" id="startDate" class="form-control" name="startDate">
                    </div>
                    <div class="col-lg-6">
                        <label for="endDate" class="form-label">End Date </label>
                        <input type="date" id="endDate" class="form-control" name="endDate">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" name="activeStatus" id="activestatus">
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
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success w-100"><i class="ri-save-3-line me-3 fs-20"></i> <span>Submit</span> </button>
            </div>
        </div>
    </div>
    </form>
</div>
