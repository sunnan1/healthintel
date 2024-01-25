<div class="offcanvas offcanvas-end" style="width: 50%;" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-info p-3 offcanvas-header">
        <h5 class="text-white m-0">Employee Registration</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="" class="needs-validation" method="POST" novalidate>
    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="card mb-0 p-3">

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
                                        <label for="simpleinput" class="form-label">Employee Code</label>
                                        <input type="text" id="employeeCode" class="form-control" name="employeecode">
                                    </div>
                                </div>
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
                                        <input type="text" id="middlename" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" id="lastname" class="form-control">
                                        <div class="invalid-feedback">
                                            Please enter Last Name
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Father Name</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Husband Name</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="simpleinput" class="form-label">Gender</label>
                                        <select class="form-select" id="example-select">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit overflow.
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
