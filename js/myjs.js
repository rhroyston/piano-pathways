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

// Throw up some popups
$(document).ready(function () {
  
  // Contain the popover within the body NOT the element it was called in.
  $('[data-toggle="popover"]').popover({
      container: 'body'
  });
  
  $('#phpro_firstname').popover({html: "true", title: "<i class='fa fa-info-circle'></i> Student First Name", content: "Please enter the <b>students</b> name when registering", placement: "right", trigger: "focus"});

  $(".alert").delay(4000).fadeOut("slow");


  var $tabs = $('.tabbable li');
  $('#register-anchor').on('click', function() {
      $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
  });

});
$(window).load(function(){
    $('#cover').fadeOut(1000);
});


$(window).load(function(){

  
  $('.modalclass').on('click', function () {
    var href = $(this).attr('href');
    
    $("#modal-placeholder").load("includes/modalhtml.php", function() {
      $(".modal-content").load(href, function() {
        $('#myModal').modal('show');
      }); 
    });
  });

});


$(window).on('hidden.bs.modal', function (e) {
  $('#modal-placeholder').empty();
});

$(window).on('show.bs.modal', function (e) {
  //$('#datetimepicker1').datetimepicker();
  alert('show modal fired');
});


