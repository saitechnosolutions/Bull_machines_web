@extends('layout.app')
@section('main')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Country Master</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Locations</a></li>
                                <li class="breadcrumb-item active">Country</li>
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
                            <form action="" method="post" id="country_add_form" data-url="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="">
                                            <label for="input-country_name">Country</label>
                                            <input type="text" class="form-control" id="input-country_name"
                                                placeholder="Enter Country name" name="country_name">
                                        </div>

                                        <div class="mt-3">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <button class="btn btn-success" type="submit">
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
@section('scripts')
    <script>
        // ADD CATEGORY VALIDATION
        const validator = new window.JustValidate("#country_add_form");

        validator
            .addField("#input-country_name", [{
                    rule: "required",
                },
                {
                    rule: "minLength",
                    value: 3,
                },
                {
                    rule: "maxLength",
                    value: 20,
                },
            ])
            .onSuccess((event) => {
                // event.currentTarget.submit();
                event.preventDefault();

                var countryName = $("#input-country_name").val();

                var formData = {
                    countryName: countryName,
                };

                // Call the reusable function
                // submitForm("#country_add_form", formUrl, formData);

                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });

                $.ajax({
                    type: "POST",
                    url: "/country_store",
                    data: formData,
                    beforeSend: function() {
                        $(".preloader").fadeIn();
                    },
                    success: function(response) {
                        $(".preloader").fadeOut();
                        // swal.fire("Success", "Country added Successfully", "success");
                        Swal.fire({
                            title: "Success",
                            text: "Country added Successfully",
                            icon: "success",
                            customClass: {
                                popup: "swal-custom-popup", // Add a custom class
                            },
                        });

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            },
                        });

                        Toast.fire({
                            icon: "success",
                            title: "Country added Successfully",
                        });

                        setTimeout(function() {
                            window.location.reload();
                        }, 1500);
                    },
                    error: function(xhr, status, error) {
                        $(".preloader").fadeOut();
                        console.error(xhr.responseText);
                        // Optionally display error notification
                    },
                });
            });
    </script>
@endsection
