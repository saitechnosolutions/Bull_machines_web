// USER LOGIN

$(document).ready(function () {
    $(document).on("click", "#user_Log_in", function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/login",
            method: "POST",
            success: function (response) {
                swal.fire("Success", "Logged in Succesfully", "success");

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
                    title: "Logged in Succesfully",
                });

                setTimeout(function () {
                    window.location.href = "/";
                }, 1500);
            },
            error: function (data) {
                Swal.fire("Error!", "Log Out failed", "success");
            },
        });
    });
});

// TOGGLE PASSWORD IN EMPLOYEE CREATION

$(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// APPEND VALUES ON INPUT FIELDS ON COUNTRY MASTER

function handleCountryClick(countryId, countryName) {
    $("#input-country_name").val(countryName);
    $("#input-country_id").val(countryId);
}

$(document).ready(function () {
    // APPEND VALUES ON INPUT FIELDS ON STATE MASTER

    window.handleStateClick = function (stateId, stateName, countryId) {
        $("#input-state_id").val(stateId);
        $("#input-master_state_name").val(stateName);
        $("#master_state_country_select").val(countryId);
    };

    // APPEND VALUES ON INPUT FIELDS ON DISTRICT MASTER

    window.handleDistrictClick = function (stateId, districtName, districtID) {
        $("#input-district_id").val(districtID);
        $("#input-master_district_name").val(districtName);
        $("#master_district_state_select").val(stateId);
    };

    // APPEND VALUES ON INPUT FIELDS ON DISTRICT MASTER

    window.handlePanchayatClick = function (
        panchayatId,
        panchayatName,
        districtID
    ) {
        $("#input-panchayat_id").val(panchayatId);
        $("#input-master_panchayat_name").val(panchayatName);
        $("#master_panchayat_district_select").val(districtID);

        console.log(panchayatId);
        console.log(panchayatName);
        console.log(districtID);
    };
});
