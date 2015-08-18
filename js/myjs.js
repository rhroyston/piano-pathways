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




function checkPasswordMatch() {
  var password = $("#phpro_password").val();
  var confirmPassword = $("#phpro_password_confirm").val();

  if (password != confirmPassword){
    if(!$("#password_confirm").hasClass("has-error")){
      //alert('#password_confirm does not have error class');
      $('#password_confirm').toggleClass("has-error");
    }
  }
  else {
      $("#password_confirm").removeClass("has-error");
  }
}    

$(document).ready(function () {
   $("#phpro_password_confirm").keyup(checkPasswordMatch);
});



