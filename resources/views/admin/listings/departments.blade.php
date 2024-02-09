@extends('admin.dashboard')
@section('header-content')
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')

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
                            <i class="ri-add-fill"></i> Add Department
                        </button>
                        <br>
                        <br>
                        <br>
                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Department Full Name</th>
                                    <th>Department Short Name</th>
                                    <th>Active Status</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($pageData['data'] as $department)
                                <tr>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->code }}</td>
                                    <td>{{ is_null($department->deleted_at) ? 'Active' : 'In-Active' }}</td>
                                    <td>{{ date('Y-m-d H:i:s' , strtotime($department->updated_at)) }}</td>
                                    <td>
                                        <a href="#theme-settings-offcanvas" id="showDepartmentForm" data-status="{{ is_null($department->deleted_at) ? 'Active' : 'In-Active' }}" data-id="{{ $department->id }}" data-name="{{ $department->name }}" data-code="{{ $department->code }}" data-bs-toggle="offcanvas">
                                            <i class="bi bi-pencil-square me-3 fs-20"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div><!-- end row-->
    </div>
</div>
@endsection
@section('sidebar-content')
    @include('admin.sidebars.department-form')
@endsection
@section('script')
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="assets/js/pages/demo.datatable-init.js"></script>


    <script>
        $(function () {
            $("body").on('click' , "#showDepartmentForm" , function () {
                $("body .departmentFormModal").find('#departmentname').val($(this).data('name'));
                $("body .departmentFormModal").find('#departmentcode').val($(this).data('code'));
                $("body .departmentFormModal").find('#departmentId').val($(this).data('id'));
                if ($(this).data('status') == 'Active' ) {
                    $("body .departmentFormModal").find('#activestatus').click();
                }
            });
            $("body").on('click' , ".showDepartmentForm" , function () {
                $("body .departmentFormModal").find('#departmentname').val('');
                $("body .departmentFormModal").find('#departmentcode').val('');
                $("body .departmentFormModal").find('#departmentId').val('');
            });
        });
    </script>



@endsection
