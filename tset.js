$(function() {
    $('input[name="type"]').on('click', function() {
        if ($(this).val() == 'Cricket') {
            $('#textboxes1').show();
        }
        else {
            $('#textboxes1').hide();
        }
    });
});
$(function() {
    $('input[name="type"]').on('click', function() {
        if ($(this).val() == 'Football') {
            $('#textboxes2').show();
        }
        else {
            $('#textboxes2').hide();
        }
    });
});
$(function() {
    $('input[name="type"]').on('click', function() {
        if ($(this).val() == 'Tennis') {
            $('#textboxes3').show();
        }
        else {
            $('#textboxes3').hide();
        }
    });
});
$(function() {
    $('input[name="type"]').on('click', function() {
        if ($(this).val() == 'Hockey') {
            $('#textboxes4').show();
        }
        else {
            $('#textboxes4').hide();
        }
    });
});

