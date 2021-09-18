/* Author: 

*/



var hash = jQuery(location).attr('hash');
alert(hash);


jQuery('.nav-tab').click(function(e) {
  //Toggle tab link
  jQuery(this).addClass('nav-tab-active').siblings().removeClass('nav-tab-active');

  //Toggle target tab
  jQuery(jQuery(this).attr('href')).addClass('active').siblings().removeClass('active');
});















