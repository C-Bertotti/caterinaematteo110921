// require('./bootstrap');


var burger = $('#burger');
var dropdownMenu = $('#nav__right');


burger.click(function() {
    dropdownMenu.toggleClass( "active");
});
  