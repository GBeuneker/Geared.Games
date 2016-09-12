$(function()
{
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("footer").toggleClass("toggled");
        $("#menu-toggle").toggleClass("toggled");

       	if($("#topLogo").css("transform") == 'none'){
			$("#topLogo").css("transform", "rotate(-360deg)");
	
		} else {
			$("#topLogo").css("transform", "");
		}
    });

});