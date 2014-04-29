(function($){

jQuery(document).ready(function(){

var highLightLink = jQuery(".panel-heading a");

highLightLink.prepend("<div class=\"panel-indicator\"></div>");
highLightLink.click(function(){

	//jQuery(this).children("div").toggleClass("panel-clicked");

});

jQuery(".panel").on("shown.bs.collapse",function(){

	jQuery(this).children(".panel-heading").children("h4").children("a").children("div").toggleClass("panel-clicked");

});

jQuery(".panel").on("hidden.bs.collapse",function(){

	jQuery(this).children(".panel-heading").children("h4").children("a").children("div").toggleClass("panel-clicked");

});

});

}(jQuery));