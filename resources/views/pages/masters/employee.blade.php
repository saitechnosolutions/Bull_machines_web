@extends('layout.app')
@section('main')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Employee Creation</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="">
                                            <label for="input-emp_name">Employee Name</label>
                                            <input type="text" class="form-control" id="input-emp_name"
                                                placeholder="Enter Employee name" name="employeename">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_code">Employee Code</label>
                                            <input type="text" class="form-control" id="input-emp_code"
                                                placeholder="Enter Employee Code" name="emp_code">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Designation</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-department_name">Department</label>
                                            <input type="text" class="form-control" id="input-department_name"
                                                placeholder="Enter Department name" name="department_name">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-mobile_num">Mobile No</label>
                                            <input type="text" class="form-control" id="input-mobile_num"
                                                placeholder="Enter Mobile Number" name="mobile_num">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_address">Address</label>
                                            <textarea name="" id="" cols="15" rows="3" class="form-control"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-email_address">E-mail</label>
                                            <input type="text" class="form-control" id="input-email_address"
                                                placeholder="Enter Email address" name="email_address">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-DOB">DOB</label>
                                            <input type="date" class="form-control" id="input-DOB"
                                                placeholder="Enter DOB" name="emp_DOB">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-doj">DOJ</label>
                                            <input type="date" class="form-control" id="input-doj"
                                                placeholder="Enter Department name" name="employee_doj">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-dol">DOL</label>
                                            <input type="date" class="form-control" id="input-dol"
                                                placeholder="Enter Mobile Number" name="employee_dol">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Branch</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Reports To</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Role</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <hr>
                                        <div class="mt-3">
                                            <h5 class="underline">
                                                <u>Territory</u>
                                            </h5>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Country</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">State</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">District</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Base District</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-emp_name">Home District</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <hr>
                                        <div class="mt-3">
                                            <h5 class="underline">
                                                <u>Login Details</u>
                                            </h5>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-DOB">Login ID</label>
                                            <input type="text" class="form-control" id="input-login_id"
                                                placeholder="Enter Login ID" name="login_id">
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-DOB">Password</label>
                                            <input type="password" class="form-control" id="input-employee_password"
                                                placeholder="Enter password" name="login_id">
                                            <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-DOB">Confirm Password</label>
                                            <input type="password" class="form-control" id="input-emp_confirm_password"
                                                placeholder="Enter confirm password" name="login_id">
                                            <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                        </div>
                                        <div class="mt-3">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <button class="btn btn-success">
                                                        Save
                                                    </button>
                                                </div>
                                                <div class="col-lg-3">
                                                    <button class="btn btn-secondary">
                                                        Clear
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div>
            </div><!-- end row-->


        </div>
        <!-- container-fluid -->
    </div>
@endsection
