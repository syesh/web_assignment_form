$(document).ready(function() {
    $('#regForm').on('submit', function(e) {
        let isValid = true;
        

        $('.input-group').removeClass('error');


        const fields = ['#fullname', '#email', '#dob', '#address'];
        fields.forEach(function(field) {
            if ($(field).val().trim() === "") {
                $(field).parent().addClass('error');
                isValid = false;
            }
        });


        if ($('input[name="gender"]:checked').length === 0) {
            $('input[name="gender"]').closest('.input-group').addClass('error');
            isValid = false;
        }


        if ($('input[name="hobbies[]"]:checked').length === 0) {
            $('input[name="hobbies[]"]').closest('.input-group').addClass('error');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
});