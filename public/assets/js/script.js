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
