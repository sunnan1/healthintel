@extends('admin.dashboard')
@section('header-content')
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterangepicker css -->
    <link href="assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Touchspin css -->
    <link href="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
    <!-- Flatpickr Timepicker css -->
    <link href="assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
    <style>
        .mr-10 {
            margin-right: 10px;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                        <h4 class="page-title">{{ $pageData['main'] ?? '' }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{ $pageData['title'] ?? '' }}</h4>
                            <button href="#theme-settings-offcanvas" data-bs-toggle="offcanvas" type="button" class="btn btn-info showDepartmentForm" style="float: right;">
                                <i class="ri-add-fill"></i> Add Designation
                            </button>
                            <br>
                            <br>
                            <br>
                            <form action="{{ url('save-schedule') }}"  method="POST">
                                {{ csrf_field() }}
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <label for="position" class="form-label">Doctor List </label>
                                        <select class="form-select" name="doctorId" required>
                                            <option value="">-- Select Doctor --</option>
                                            @foreach($pageData['doctors'] as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->first_name.' '.$doctor->last_name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please enter Position
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <label for="position" class="form-label">Working Days </label>
                                        <div style="display: flex;">
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="monday" unchecked name="workingDays[]" value="monday">
                                            <label class="form-check-label" for="monday">Monday</label>
                                        </div>
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="tuesday" unchecked name="workingDays[]" value="tuesday">
                                            <label class="form-check-label" for="tuesday">Tuesday</label>
                                        </div>
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="wednesday" unchecked name="workingDays[]" value="wednesday">
                                            <label class="form-check-label" for="wednesday">Wednesday</label>
                                        </div>
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="thursday" unchecked name="workingDays[]" value="thursday">
                                            <label class="form-check-label" for="thursday">Thursday</label>
                                        </div>
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="friday" unchecked name="workingDays[]" value="friday">
                                            <label class="form-check-label" for="friday">Friday</label>
                                        </div>
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="saturday" unchecked name="workingDays[]" value="saturday">
                                            <label class="form-check-label" for="saturday">Saturday</label>
                                        </div>
                                        <div class="form-check form-checkbox-success mb-2 mr-10">
                                            <input type="checkbox" class="form-check-input" id="sunday" unchecked name="workingDays[]" value="sunday">
                                            <label class="form-check-label" for="sunday">Sunday</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-sm-6 mb-0">
                                        <div class="mb-3">
                                            <label class="form-label">Start Date &amp; Time</label>
                                            <input type="text" id="datetime-datepicker" name="startDateTime" class="form-control flatpickr-input active" placeholder="Date and Time" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-0">
                                        <div class="mb-3">
                                            <label class="form-label">End Date &amp; Time</label>
                                            <input type="text" id="enddatetime-datepicker" name="endDateTime" class="form-control flatpickr-input active" placeholder="Date and Time" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-0">
                                        <div class="mb-3">
                                            <label class="form-label">Slot Type</label>
                                            <select name="slotType" class="form-select" required>
                                                <option value="S">Number of Slots</option>
                                                <option value="T">Time Wise</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-0">
                                        <div class="mb-3">
                                            <label class="form-label">Duration</label>
                                            <input type="number" name="duration" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-sm-6 mb-0">
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary w-30" id="reset-layout">Create Schedule</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div><!-- end row-->
        </div>
    </div>
@endsection
@section('script')
    <script src="assets/js/vendor.min.js"></script>

    <!--  Select2 Plugin Js -->
    <script src="assets/vendor/select2/js/select2.min.js"></script>

    <!-- Daterangepicker Plugin js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Input Mask Plugin js -->
    <script src="assets/vendor/jquery-mask-plugin/jquery.mask.min.js"></script>

    <!-- Bootstrap Touchspin Plugin js -->
    <script src="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Bootstrap Maxlength Plugin js -->
    <script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Typehead Plugin js -->
    <script src="assets/vendor/handlebars/handlebars.min.js"></script>
    <script src="assets/vendor/typeahead.js/typeahead.bundle.min.js"></script>

    <!-- Flatpickr Timepicker Plugin js -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

    <!-- Typehead Demo js -->
    <script src="assets/js/pages/demo.typehead.js"></script>

    <!-- Timepicker Demo js -->
    <script src="assets/js/pages/demo.flatpickr.js"></script>

    <script>
        $(function() {
            $("#enddatetime-datepicker").flatpickr({enableTime:!0,dateFormat:"Y-m-d H:i"})
        });
    </script>
@endsection
