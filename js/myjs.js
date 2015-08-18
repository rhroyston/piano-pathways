$('#tab-login a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
$('#tab-register a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

$(document).ready(function(event) {
    $('ul.nav.nav-tabs a:first').tab('show'); // Select first tab
    $('ul.nav.nav-tabs a[href="'+ window.location.hash+ '"]').tab('show'); // Select tab by name if provided in location hash
    $('ul.nav.nav-tabs a[data-toggle="tab"]').on('shown', function (event) {    // Update the location hash to current tab
        window.location.hash= event.target.hash;
    });
});

$.validator.setDefaults({
    errorElement: "span",
    errorClass: "help-block",
    highlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorPlacement: function (error, element) {
        if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});
