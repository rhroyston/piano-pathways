$('#tab-login a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#tab-register a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

// Javascript to enable link to tab
var hash = document.location.hash;
var prefix = "tab_";
if (hash) {
    $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
});
