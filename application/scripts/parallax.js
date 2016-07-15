$(function(){
	var bannerBg = document.getElementById("banner-background");
	if(bannerBg)
	{
		document.addEventListener("scroll", parallax);
	}
});

$(window).on("load", function() {
	scaleBanner();
	fillPage();
});

function parallax(element)
{
	var parallaxAmount = 0.3;
	var scrollAmount = $(document).scrollTop();
	var translation = "translate(0," + (-scrollAmount * parallaxAmount) + "px)";

	$("#banner-background").css("transform", translation);
}

$(window).resize(function() {
	scaleBanner();
	fillPage();
});

function fillPage()
{
	var pagefill = document.getElementById("pagefill");
	if(pagefill)
	{
		// Get the height that is left after subtracting the footer height.
		var fillHeight = ($(window).height() - 150) - $(pagefill).position().top;
		$(pagefill).css("height", fillHeight + "px");
	}
}

function scaleBanner()
{
	var banner = document.getElementById("banner");
	if(banner)
	{
		var bannerBgHeight = $("#banner-background").height();
		$(banner).css("height", bannerBgHeight*0.8 + "px");
	}
}