<div class="offcanvas offcanvas-end" style="width: 50%;" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-info p-3 offcanvas-header">
        <h5 class="text-white m-0">Employee Details</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="{{ url('save-employee') }}"  method="POST" novalidate enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="employeeId">
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="card mb-0 p-3">
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label for="simpleinput" class="form-label">Employee Code</label>
                            <input type="text" id="employeeCode" class="form-control" name="employeecode" readonly>
                        </div>
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-2" style="text-align: center">
                            <div class="form-group">
                                <img src="" class="avatar-lg rounded-circle w-10"  id="imgPreview">
                            </div>
                            <div class="form-group">
                                <label class="form-label"><b>Select Image:</b></label>
                                <input type="file" class="form-control" id="imgInput" name="employeeImage" accept="image/*">
                            </div>
                        </div>
                    </div>
                        <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#demographics-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Demographics
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Contact Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#address-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Address Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#emergency-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Emergency Contact
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="demographics-b2">
                                    <div class="row mb-3">
                                        <div class="col-lg-4">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="firstname" class="form-control" name="firstName" required>
                                                <div class="invalid-feedback">
                                                    Please enter First Name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="middlename" class="form-label">Middle Name</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="middleName" class="form-control" name="middleName" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="lastname" name="lastName" class="form-control">
                                                <div class="invalid-feedback">
                                                    Please enter Last Name
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Father Name</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="simpleinput" name="fatherName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Gender</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" name="gender" id="example-select">
                                                <option value="">--- Select Gender ---</option>
                                                @foreach($pageData['setting'] as $set)
                                                    @if($set->type == 'GENDER')
                                                        <option value="{{ $set->id }}">{{ $set->key }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <div class="input-group input-group-merge">
                                            <input type="date" id="dob" name="dob" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="cnic" class="form-label">CNIC</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="cnic" name="cnic" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="passportno" class="form-label">Passport #</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="passportno" name="passportNo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Birth Country</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" name="birthCountry" id="example-select">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="India">India</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="martialstatus" class="form-label">Martial Status</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select"  name="martialStatus">
                                                <option value="">-- Select Status --</option>
                                                @foreach($pageData['setting'] as $set)
                                                    @if($set->type == 'MARITAL_STATUS')
                                                        <option value="{{ $set->id }}">{{ $set->key }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="simpleinput" class="form-label">Spouse Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="simpleinput" name="spouseName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label for="religion" class="form-label">Religion</label>
                                    <div class="input-group input-group-merge">
                                        <select class="form-select" name="religion" id="religion">
                                            <option value="">--- Select Religion ---</option>
                                            @foreach($pageData['setting'] as $set)
                                                @if($set->type == 'RELIGION')
                                                    <option value="{{ $set->id }}">{{ $set->key }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label for="bloodgroup" class="form-label">Blood Group</label>
                                    <div class="input-group input-group-merge">
                                        <select class="form-select"  name="bloodGroup">
                                            <option value="">-- Select Blood Group --</option>
                                            @foreach($pageData['setting'] as $set)
                                                @if($set->type == 'BLOOD_GROUP')
                                                    <option value="{{ $set->id }}">{{ $set->key }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                </div>
                            <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="religion" class="form-label">Department</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select"  name="department">
                                                <option value="">-- Select Department --</option>
                                                @foreach($pageData['department'] as $department)
                                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="religion" class="form-label">Designation</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" name="designation">
                                                <option value="">-- Select Designation --</option>
                                                @foreach($pageData['designation'] as $designation)
                                                    <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="employeeCategory" class="form-label">Employee Category</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" id="employeeCategory" name="employeeCategory">
                                                <option value="CLINICAL">Clinical</option>
                                                <option value="DOCTOR">Doctor</option>
                                                <option value="NURSE">Nurse</option>
                                                <option value="NON-CLINICAL">NON-Clinical</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="position" class="form-label">Position</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" id="position" name="position">
                                                <option value="CLINICAL">Clinical</option>
                                                <option value="DOCTOR">Doctor</option>
                                                <option value="NURSE">Nurse</option>
                                                <option value="NON-CLINICAL">NON-Clinical</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane" id="contact-b2">
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for="Landline" class="form-label">Landline #</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="Landline" class="form-control" name="Landline">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="Mobile" class="form-label">Mobile #</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="Mobile" class="form-control" name="Mobile">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="workMobile" class="form-label">Work Mobile</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="workMobile" class="form-control" name="workMobile">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group input-group-merge">
                                        <input type="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="workEmail" class="form-label">Work Email</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="workEmail" class="form-control" name="workEmail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="address-b2">
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for="country" class="form-label">Country</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="country" class="form-control" name="country">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="province" class="form-label">Province</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="province" class="form-control" name="province">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="city" class="form-label">City</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="city" class="form-control" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label for="permanentAddress" class="form-label">Permanent Address</label>
                                    <div class="input-group input-group-merge">
                                        <textarea class="form-control" id="permanentAddress" rows="5" name="permanentAddress"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="postalCode" class="form-label">Postal Code</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="postalCode" class="form-control" name="postalCode">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="emergency-b2">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="contactPerson" class="form-label">Contact Person</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="contactPerson" class="form-control" name="contactPerson">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="contactNo" class="form-label">Contact #</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="contactNo" class="form-control" name="contactNo">
                                    </div>
                                </div>
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
                    <input type="submit" class="btn btn-success w-100"><i class="ri-save-3-line me-3 fs-20"></i> <span>Submit</span> </input>
    {{--                <a href="form-validation.html#" role="button" class="btn btn-primary w-100">Submit</a>--}}
                </div>
            </div>
        </div>
    </form>
</div>
@section('script')
    <script>
        $("#imgInput").change(function() {
            if (this.files && this.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imgPreview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>

@endsection
