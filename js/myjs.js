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


//$(function() {

var password = document.getElementById("phpro_password")
  , confirm_password = document.getElementById("phpro_password_confirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

//  /* code here */ });
