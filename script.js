$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).serialize(),
            success: function (response) {
                $('#result').html(response);
                $('#registrationForm')[0].reset(); // Reset the form
            },
            error: function () {
                $('#result').html('<p style="color:red;">Error submitting form</p>');
            }
        });
    });
});




