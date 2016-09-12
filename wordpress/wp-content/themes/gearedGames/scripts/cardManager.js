$(function(){
	var filters = [];

	var hobbyFilter = document.getElementById("hobbyFilter");
	var jamFilter = document.getElementById("jamFilter");
	var workFilter = document.getElementById("workFilter");
	var gawFilter = document.getElementById("gawFilter");
	var modFilter = document.getElementById("modFilter");

	filters.push(hobbyFilter);
	filters.push(jamFilter);
	filters.push(workFilter);
	filters.push(gawFilter);
	filters.push(modFilter);

	var designFilter = document.getElementById("designFilter");
	var trailerFilter = document.getElementById("trailerFilter");
	var miscFilter = document.getElementById("miscFilter");

	filters.push(designFilter);
	filters.push(trailerFilter);
	filters.push(miscFilter);

	for(var i = 0; i < filters.length; i++)
	{
		if(filters[i])
			filters[i].addEventListener("click", activateFilter);
	}
})

function activateFilter(element)
{
	this.id = element.target.id;

	if($("#"+this.id).hasClass("active"))
		$("#"+this.id).removeClass("active");
	else
		$("#"+this.id).addClass("active");

	updateFilters();
}

function updateFilters()
{
	var tags = [];
	var listItems = $(".tile-filters li");
	listItems.each(function(idx, li) {
	    var item = $(li);
	    if(item.hasClass("active"))
	    	tags.push(item[0].title);
	});

	updateCards(tags);
}

function updateCards(tags)
{
	$(".tiles").children().each(function () {

	var hide = true;

	// Check if the current card has one of the tags.
	for(var i = 0; i < tags.length; i++)
	{
		if($(this).hasClass(tags[i]))
		{
			hide = false;
			break;
		}
	}

	// Hide the card if it hase none of the tags enabled.
	if(hide)
	{
		if(isMobile())
			$(this).fadeOut(500);
		else
	    	$(this).hide(500);
	}
	else
	{
		if(isMobile())
			$(this).fadeIn(500);
		else
	    	$(this).show(500);
	}
      
	});
}