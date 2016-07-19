$(document).ready(function() {
    // make rows clickable if they have a data-url
    $(".clickrow").on('click', function() {
        document.location = $(this).data('url');
    });

    // Check if any accordions need to be opened if it contains a form
    // with errors
    $(".accordion-inner:has('.has-error')").each(function(i, v) {
        $(v).parent().addClass("in");
    });
});

function csrfSafeMethod(method) {
    // these HTTP methods do not require CSRF protection
    return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
}
$.ajaxSetup({
    crossDomain: false, // obviates need for sameOrigin test
    beforeSend: function(xhr, settings) {
        if (!csrfSafeMethod(settings.type)) {
            xhr.setRequestHeader("X-CSRFToken", $.cookie('csrftoken'));
        }
    }
});
