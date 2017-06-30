$(document).ready(function(){
    $(".navHeader a").click(function(){
    	$(".navHeader").find(".active").removeClass("active");
    	   $(this).parent().addClass("active");
    });
});
