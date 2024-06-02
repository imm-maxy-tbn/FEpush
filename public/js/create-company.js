// create-company.js

$(document).ready(function () {
    $('#createCompanyForm').submit(function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: $(this).attr('action'), // Get the form's action URL
            type: "POST",
            data: formData,
            success: function (response) {
                alert(response.success);
                window.location.href = response.redirect; // Use redirect URL from response
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    // Display validation errors (consider using a more user-friendly method)
                    alert(Object.values(errors).join('\n'));
                } else {
                    alert("An error occurred.");
                }
            }
        });
    });
});
