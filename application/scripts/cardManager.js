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

function loadAllGameCards()
{
	var url = base_url() + "Games/getGamecards/";
	getCards(url, createGameCard);
}

function loadAllVideoCards()
{
	var url = base_url() + "Videos/getVideocards/"
	getCards(url, createVideoCard);
}

function getCards(url, callback)
{
	$.ajax(
	{	
		url: url,
		success: function(msg) {
			var cardList = JSON.parse(msg);
			for(var c in cardList)
			{
				if(cardList[c].title)
					$(".tiles").append(callback(cardList[c]));
			}
		},
		error: function(xhr)
		{
			console.log(xhr);
		}
	});
}

function createGameCard(cardData)
{
	// Extract the tags from the cardData.
	this.tags = "";
	this.tagList = cardData.tags.replace(" ","").split(',');

	this.class = cardData.tags.replace(" ","").replace(",", " ");

	for(var i in tagList)
	{
		tags += "<li>" + tagList[i] + "</li>" + "\n";
	}

	// Build a HTML string.
	return "\
	<a class='tile " + this.class + "' href = '" + base_url() + 'Games/Game/' + cardData.id + "'> \
		<div class='tile-image'> \
			<img src='" + base_url() + "../application/assets/" + cardData.image + "' /> \
		</div> \
		\
		<div class='tile-title'> \
			<h1>" + cardData.title + "</h1> \
			<h2>" + cardData.engine + "</h2> \
		</div> \
		\
		<div class='tile-content'>\
			<hr> \
			<p>" + cardData.description_short + " </p> \
		</div> \
		\
		<div class='tile-tags'> \
			<ul> " +
			tags
			+ "</ul> \
		</div> \
	</a> \ ";
}

function createVideoCard(cardData)
{
		// Extract the tags from the cardData.
	this.tags = "";
	this.tagList = cardData.tags.replace(" ","").split(',');

	this.class = cardData.tags.replace(" ","").replace(",", " ");

	for(var i in tagList)
	{
		tags += "<li>" + tagList[i] + "</li>" + "\n";
	}

	// Build a HTML string.
	return "\
	<a class='tile video " + this.class + "' href = '" + base_url() + 'Videos/Video/' + cardData.id + "'> \
		<div class='tile-image'> \
			<img src='" + "http://img.youtube.com/vi/" + cardData.video_id + "/0.jpg' /> \
		</div> \
		\
		<div class='tile-title'> \
			<h1>" + cardData.title + "</h1> \
			<h2>" + cardData.subject + "</h2> \
		</div> \
		\
		<div class='tile-content'>\
			<hr> \
			<p>" + cardData.description + " </p> \
		</div> \
		\
		<div class='tile-tags'> \
			<ul> " +
			tags
			+ "</ul> \
		</div> \
	</a> \ ";
}