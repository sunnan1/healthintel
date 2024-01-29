<div class="offcanvas offcanvas-end" style="width: 50%;" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-info p-3 offcanvas-header">
        <h5 class="text-white m-0">Employee Details</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="" class="needs-validation" method="POST" novalidate>
    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="card mb-0 p-3">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <label for="simpleinput" class="form-label">Employee Code</label>
                        <input type="text" id="employeeCode" class="form-control" name="employeecode" readonly>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                Demographics
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="firstname" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Please enter First Name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="middleName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="lastname" class="form-control">
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
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Spouse Name</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Gender</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" id="example-select">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="cnic" class="form-label">CNIC</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="cnic" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="passportno" class="form-label">Passport #</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="passportno" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Birth Country</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" id="example-select">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="India">India</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <div class="input-group input-group-merge">
                                            <input type="date" id="dob" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="age" class="form-label">Age</label>
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="age" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="employeecategory" class="form-label">Employee Category</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" id="employeecategory">
                                                <option value="CLINICAL">Clinical</option>
                                                <option value="DOCTOR">Doctor</option>
                                                <option value="NURSE">Nurse</option>
                                                <option value="NON-CLINICAL">NON-Clinical</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="martialstatus" class="form-label">Martial Status</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="martialstatus" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="bloodgroup" class="form-label">Blood Group</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="bloodgroup" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="religion" class="form-label">Religion</label>
                                        <div class="input-group input-group-merge">
                                            <select class="form-select" id="religion">
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Contact Details
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="Landline" class="form-label">Landline #</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="Landline" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Mobile" class="form-label">Mobile #</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="Mobile" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="workmobile" class="form-label">Work Mobile</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="workmobile" class="form-control">
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
                                        <label for="workemail" class="form-label">Work Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="workemail" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address Details
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="country" class="form-label">Country</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="country" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="province" class="form-label">Province</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="province" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="city" class="form-label">City</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="permanentaddress" class="form-label">Permanent Address</label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control" id="permanentaddress" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="postalcode" class="form-label">Postal Code</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="postalcode" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Emergency Contact
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="contactpreson" class="form-label">Contact Person</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="contactpreson" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="contactno" class="form-label">Contact #</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="contactno" class="form-control">
                                        </div>
                                    </div>
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
                <a href="form-validation.html#" role="button" class="btn btn-primary w-100">Submit</a>
            </div>
        </div>
    </div>
    </form>
</div>

