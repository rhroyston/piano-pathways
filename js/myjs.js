$('#tab-login a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
$('#tab-register a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

//Script to open tab via id selector in url
$(document).ready(function(event) {
  $('ul.nav.nav-tabs a:first').tab('show'); // Select first tab
  $('ul.nav.nav-tabs a[href="'+ window.location.hash+ '"]').tab('show'); // Select tab by name if provided in location hash
  $('ul.nav.nav-tabs a[data-toggle="tab"]').on('shown', function (event) { // Update the location hash to current tab
      window.location.hash= event.target.hash;
  });
});

// Script to match the password
function checkPasswordMatch() {
  var password = $("#phpro_password").val();
  var confirmPassword = $("#phpro_password_confirm").val();
  
  if (password !== confirmPassword){
    if(!$("#password_confirm").hasClass("has-error")){
      $("#password_confirm").toggleClass("has-error");
    }
  }
  if (password === confirmPassword){
      $("#password_confirm").removeClass("has-error");
  }
}    

$(document).ready(function () {
  $("#phpro_password_confirm").keyup(checkPasswordMatch);
});

$(document).ready(function () {
  
// Select all elements with data-toggle="popover" in the document
//$('[data-toggle="popover"]').popover(); 
 
$("#phpro_username").focus(function(){
  $("#phpro_username").popover("show");
});
$("#phpro_username").blur(function(){
  $("#phpro_username").popover("hide");
});

});



