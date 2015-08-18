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


$(document).ready(function() {
  $("#phpro_password_confirm").bind("change paste keyup", function() {

    if($('#phpro_password').val() != $('#phpro_password_confirm').val()) {
      //if phpro_password_confirm's has-error class is not set then toggle it on
      if(!$("#password_confirm").hasClass('has-error')){
        $('#password_confirm').toggleClass("has-error");
      }
    }
    
    if($('#phpro_password_confirm').val() == $('#phpro_password').val()) {
      $("#password_confirm").setClass("has-success");
    }
    
    
    
  });
});



