$(document).ready(function () {
    $('#updateCompanyForm').submit(function (event) {
        event.preventDefault();

        // Get the company ID from the form (you'll need to add a hidden input for this)
        var companyId = $(this).find('input[name="company_id"]').val();
        var formData = $(this).serialize();

        $.ajax({
            url: $(this).attr('action'),
            type: "PUT", // Use PUT for updates
            data: formData,
            success: function (response) {
                alert(response.success);
                window.location.href = response.redirect;
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    alert(Object.values(errors).join('\n'));
                } else {
                    alert("An error occurred.");
                }
            }
        });
    });
});
